<?php
defined('_JEXEC') or die('(@)|(@)');

require_once dirname(__FILE__).'/helper.php';

$catid = $params->get('mycategory');
$limit = $params->get('myintegeralue');

$list = modhomework4Helper::getList($catid, $limit);

require JModuleHelper::getLayoutPath('mod_homework4', $params->get('layout', 'default'));
