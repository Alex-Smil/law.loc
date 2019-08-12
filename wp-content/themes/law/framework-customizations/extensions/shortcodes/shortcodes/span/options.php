<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'span_icon'  => array( // Поле для добавления иконки
		'type'  => 'icon',
		'label' => __( 'Span Icon', 'law' )
	),
	'span_content'    => array( // содержимое внутри тега <span>...</span>
		'type'  => 'text',
		'label' => __( 'Span Content', 'law' ),
		'desc'  => __( 'Span Content Desc', 'law' ),
	),

    'span_class' => array( // класс тега <span>
        'type'  => 'text',
        'label' => __('Span Class', 'law'),
        'desc'  => __( 'Span Class Desc', 'law' )
    ),

    'span_id' => array( // ID тега <span>
        'type'  => 'text',
        'label' => __('Span ID', 'law'),
        'desc'  => __( 'Span ID Desc', 'law' )
    ),

    /* здесь описываем data атрибуты для тега span
     * Поле принимает строку в виде:
     * data-from="0" data-to="27539" data-speed="5000" data-refresh-interval="50"
     */
    'span_data_attr' => array(
        'type'  => 'text',
        'label' => __('Attributes', 'law'),
        'desc'  => __( 'Attributes Desc', 'law' )
    )
);