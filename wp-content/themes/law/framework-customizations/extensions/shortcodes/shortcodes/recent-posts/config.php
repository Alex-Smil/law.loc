<?php if (!defined('FW')) die('Forbidden');

$cfg = array();

$cfg['page_builder'] = array(
	'title'         => __('Recent Posts', 'law'),
	'description'   => __('Add Recent Posts', 'law'),

    /*
     * Указываем где будет расположена иконка(в какой вкладке)
     * без domain 'fw' работает криво, создает новый tab
     * даже если попытаться поместить икноку в уже сущ-ий tab
     * */
	'tab'           => __('Content Elements', 'fw'),
);