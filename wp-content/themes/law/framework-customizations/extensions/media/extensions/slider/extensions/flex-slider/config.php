<?php if (!defined('FW')) die('Forbidden');
/* откуда будем брать картинки
 * Из 'posts', 'categories', 'tags' или 'custom'
 * 'custom' - означает, что будем брать вручную */
$cfg['population_methods'] = array('custom');

/* Типы контента отображаемый слайдером */
$cfg['multimedia_types'] = array('image');