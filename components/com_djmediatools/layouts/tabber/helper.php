<?php
/**
 * @version $Id: helper.php 5 2013-01-04 13:37:11Z szymon $
 * @package DJ-MediaTools
 * @copyright Copyright (C) 2012 DJ-Extensions.com LTD, All rights reserved.
 * @license http://www.gnu.org/licenses GNU/GPL
 * @author url: http://dj-extensions.com
 * @author email contact@dj-extensions.com
 * @developer Szymon Woronowski - szymon.woronowski@design-joomla.eu
 *
 * DJ-MediaTools is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * DJ-MediaTools is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with DJ-MediaTools. If not, see <http://www.gnu.org/licenses/>.
 *
 */

// no direct access
defined('_JEXEC') or die ('Restricted access');

class TabberDJMediatoolsLayoutHelper extends DJMediatoolsLayoutHelper {
	
	public function getParams(&$params) {
		
		$params = parent::getParams($params);
		
		if(!is_numeric($params->get('tab_width'))) $params->set('tab_width', 200);
		if(!is_numeric($params->get('tab_height'))) $params->set('tab_height', 50);
		if(!is_numeric($params->get('thumb_width'))) $params->set('thumb_width', 40);
		if(!is_numeric($params->get('thumb_height'))) $params->set('thumb_height', 40);
		if(!is_numeric($params->get('arrows_horizontal'))) $params->set('arrows_horizontal', 0);
		if($params->get('arrows_horizontal') < 0) $params->set('arrows_horizontal', 0);
		
		return $params;
	}
	
	public function getAnimationOptions(&$params) {
		
		$options = parent::getAnimationOptions($params);
		
		$options[] = "tab_height: ".$params->get('tab_height');
		$options[] = "tab_indicator: ".$params->get('tab_indicator');
		
		return $options;
	}
	
	public function getStyleSheetParams(&$params) {
		
		$options = parent::getStyleSheetParams($params);
		
		$thumb_width = $params->get('thumb_width');
		$thumb_height = $params->get('thumb_height');
		$tab_width = $params->get('tab_width');
		$tab_height = $params->get('tab_height');
		$tab_position = $params->get('tab_position');
		
		$options[] = "tw=$thumb_width";
		$options[] = "th=$thumb_height";
		$options[] = "tabw=$tab_width";
		$options[] = "tabh=$tab_height";
		$options[] = "tabp=$tab_position";
		
		return $options;
	}
}

