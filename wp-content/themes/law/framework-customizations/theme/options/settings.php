<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'general' => array( // вкладка
		'type' => 'tab', // тип вкладки
		'title' => __('General', 'law'),
		'options' => array( // массив отдельных опций
			'footer_text' => array(
				'type' => 'wp-editor',
				'label' => __('Text in footer', 'law'),
				'desc' => __('Write text for footer', 'law'),
				'help' => __('Some help ...', 'law')
			),
			'test_img' => array(
				'type' => 'upload',
				'label' => __('Header image', 'law'),
				'desc' => __('Header image', 'law'),
				'help' => __('Some help ...', 'law')
			)
		)
	),
	'colors' => array( // вкладка
		'type' => 'tab', // тип вкладки
		'title' => __('Site colors', 'law'),
		'options' => array( // массив отдельных опций
			'header_color' => array(
				'type' => 'color-picker',
				'value' => '#fff',
				'label' => __('Header color', 'law'),
				'desc' => __('Choose header color', 'law'),
				'help' => __('Some help ...', 'law')
			),
		)
	)
);