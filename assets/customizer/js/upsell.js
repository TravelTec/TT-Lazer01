/* global upsellConfig */
wp.customize.bind( 'ready', function () {
	if ( typeof upsellConfig !== 'undefined' ) {
		const markup =
			'<div class="nv-upsell"><div class="nv-upsell-content">' +
			upsellConfig.text +
			'</div><a rel="external noreferrer noopener" target="_blank" href="' +
			upsellConfig.button_url +
			'" class="button button-primary">' +
			upsellConfig.button_text +
			'<span class="components-visually-hidden">' +
			upsellConfig.screen_reader +
			'</span>' +
			'</a></div>';
		const elChild = document.createElement( 'li' );
		elChild.innerHTML = markup;
		const el = document.getElementById( 'sub-accordion-panel-hfg_header' );
		el.appendChild( elChild );
	}
} );

wp.customize.sectionConstructor.nv_simple_upsell_section = wp.customize.Section.extend(
	{
		// No events for this type of section.
		attachEvents() {},

		// Always make the section active.
		isContextuallyActive() {
			return true;
		},
	}
);
