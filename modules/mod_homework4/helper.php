<?php

defined('_JEXEC') or die('(@)|(@)');

class modHomework4Helper
{
	public static function &getList($catid, $limit)
	{
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);		
		$query->select('title');
		$query->from('#__content');
		$query->where('catid='.$catid);
        	$db->setQuery($query, 0, $limit);
                $list = $db->loadColumn();	

		return $list;
	}
	
}
