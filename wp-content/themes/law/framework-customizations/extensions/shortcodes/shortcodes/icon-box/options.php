<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'style'   => array(
		'type'    => 'select',
		'label'   => __('Box Style', 'fw'),
		'choices' => array(
			'fw-iconbox-1' => __('Icon above title', 'fw'),
			'fw-iconbox-2' => __('Icon in line with title', 'fw')
		)
	),
	'icon'    => array(
		'type'  => 'icon',
		'label' => __('Choose an Icon', 'fw'),
	),
	'title'   => array(
		'type'  => 'text',
		'label' => __( 'Title of the Box', 'fw' ),
	),

	/* my custom option */
	'handle_content_wrapper'   => array(
		'type'  => 'checkbox',
		'label' => __( 'Wrap content in link ?', 'fw' ),
	),

	'link_target'   => array(
		'type'  => 'text',
		'label' => __( 'Link Target', 'fw' ),
	),

	'link_class'   => array(
		'type'  => 'text',
		'label' => __( 'Link Class', 'fw' ),
	),
	/**/

	'content' => array(
		'type'  => 'textarea',
		'label' => __( 'Content', 'fw' ),
		'desc'  => __( 'Enter the desired content', 'fw' ),
	)
);