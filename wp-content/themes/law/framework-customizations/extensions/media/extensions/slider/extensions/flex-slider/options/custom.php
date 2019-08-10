<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$options = array(
	'link' => array( // сама ссылка
		'type'  => 'text',
		'label' => __( 'Link', 'law' ),
		'value' => '',
		'desc'  => __( 'Choose a link for your slide.', 'law' )
	),
    /* добавим еще одну настройку */
    'link_title' => array( // текст ссылки
        'type'  => 'text',
        'label' => __( 'Link_title', 'law' ),
        'value' => '',
        'desc'  => __( 'Choose a link_title for your slide.', 'law' )
    )
);

