<?php
/**
 * Builders Control. Handles data passing from args to JS.
 *
 * @package Neve\Customizer\Controls\React
 */

namespace Neve\Customizer\Controls\React;

/**
 * Customizer section.
 *
 * @package Neve\Customizer\Controls\React
 */
class Builder extends \WP_Customize_Control {
	/**
	 * Type of this section.
	 *
	 * @var string
	 */
	public $type = 'neve_builder_control';

	/**
	 * Builder Type
	 *
	 * @var string
	 */
	public $builder_type = null;
	/**
	 * Columns Layout
	 *
	 * @var boolean
	 */
	public $columns_layout = false;

	/**
	 * Gather the parameters passed to client JavaScript via JSON.
	 *
	 * @return array The array to be exported to the client as JSON.
	 */
	public function json() {
		$json                  = parent::json();
		$json['builderType']   = $this->builder_type;
		$json['columnsLayout'] = $this->columns_layout;

		return $json;
	}

	/**
	 * This method overrides the default render
	 * so that nothing is rendered.
	 * Previously it would try to put an input element where the value was `esc_attr()`
	 * This would trigger notices in PHP
	 * It is not required to have a render as it is being handled by React.
	 */
	final public function render_content() {
		// this is rendered from React
	}
}
