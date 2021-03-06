<?php 
/**
 * @version $Id: tabber.css.php 5 2013-01-04 13:37:11Z szymon $
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

defined('_JEXEC') or die;
Header ("Content-type: text/css");

// Get slideshow parameters
$mid = $_GET['mid'];
$slide_width = $_GET['w'];
$slide_height = $_GET['h'];
$thumb_width = $_GET['tw'];
$thumb_height = $_GET['th'];
$tab_width = $_GET['tabw'];
$tab_height = $_GET['tabh'];
$tab_position = $_GET['tabp'];
$desc_position = $_GET['dp'];
$desc_width = $_GET['dw'];
$arrows_top = $_GET['at'];
$arrows_horizontal = $_GET['ah'];
$loader_position = $_GET['lip'];
if($desc_position == 'over') {
	$desc_bottom = $_GET['db'];
	$desc_left = $_GET['dl'];
}
$resizing = $_GET['r'];

$img_w = 100;
if($desc_position == 'left' || $desc_position == 'right') $img_w -= $desc_width;

$image_width = 'max-width: '.$img_w.'%';
$image_height = 'max-height: 100%';

switch($resizing){
	case 'crop':
	case 'toWidth':
		$image_width = 'width: '.$img_w.'%';
		$image_height = 'height: auto';
		break;
	case 'toHeight':
		$image_width = 'width: auto';
		$image_height = 'height: 100%';
		break;
}

/* DON'T CHANGE ANYTHING UNLESS YOU ARE SURE YOU KNOW WHAT YOU ARE DOING */

/* General tabber settings */ ?>
#dj-tabber<?php echo $mid; ?> {
	margin: 10px auto;
	max-width: <?php echo ($slide_width + $tab_width); ?>px;
	padding: 9px;
	background: #d7d7d7;
	border: 1px solid #d0d0d0; <?php /* must be declared in pixels */ ?>
	box-shadow: 0 0 5px #ccc;
}
#dj-tabber<?php echo $mid; ?> .dj-tabber-in {
	width: <?php echo ($slide_width + $tab_width); ?>px;
	max-width: <?php echo ($slide_width + $tab_width); ?>px;
	height: <?php echo $slide_height; ?>px;
	position: relative;
	overflow: hidden;
}
#dj-tabber<?php echo $mid; ?> .dj-slides {
	width: auto;
	height: 100%;
	<?php if($tab_position=='left') { ?>
		margin-left: <?php echo $tab_width; ?>px;
	<?php } else { ?>
		margin-right: <?php echo $tab_width; ?>px;
	<?php } ?>
	overflow: hidden;
	position: relative;
	z-index: 5;
}
#dj-tabber<?php echo $mid; ?> .dj-slide {
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	overflow: hidden;
	text-align: center;
}
#dj-tabber<?php echo $mid; ?> .dj-slide-in {
	height: 100%;
}
#dj-tabber<?php echo $mid; ?> .dj-slide-in > a {
	background: none;
}
#dj-tabber<?php echo $mid; ?> .dj-slide img.dj-image, 
#dj-tabber<?php echo $mid; ?> .dj-slide a:hover img.dj-image {
	border: 0 !important;
	<?php echo $image_width; ?>;
	<?php echo $image_height; ?>;
	<?php if($desc_position=='left') { ?>
		margin: 0 0 0 <?php echo $desc_width; ?>%;
	<?php } else if($desc_position=='right') { ?>
		margin: 0 <?php echo $desc_width; ?>% 0 0;
	<?php } ?>
}

<?php /* Slide description area settings */ ?>
#dj-tabber<?php echo $mid; ?> .dj-slide-desc {
	position: absolute;
	width: <?php echo $desc_width; ?>%;
	<?php if($desc_position=='over') { ?>
		bottom: <?php echo $desc_bottom; ?>%;
		left: <?php echo $desc_left; ?>%;
	<?php } else if($desc_position=='left') { ?>
		left: 0;
		bottom: 0;
	<?php } else if($desc_position=='right') { ?>
		right: 0;
		bottom: 0;
	<?php } ?>
	<?php if($desc_position!='over') { ?>
		height: 100%;
	<?php } ?>
}
#dj-tabber<?php echo $mid; ?> .dj-slide-desc-in {
	position: relative;
	height: 100%;
}
#dj-tabber<?php echo $mid; ?> .dj-slide-desc-bg {
	position:absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: #000;
	<?php //if($desc_position=='over') { ?>
		opacity: 0.5;
		filter: alpha(opacity = 50);
	<?php //} ?>
}
#dj-tabber<?php echo $mid; ?> .dj-slide-desc-text {
	position: relative;
	color: #ccc;
	padding: 10px;
	text-align: left;
}
#dj-tabber<?php echo $mid; ?> .dj-slide-desc-text p {
	display: block;
	padding: 0;
}
#dj-tabber<?php echo $mid; ?> .dj-slide-desc-text a {
	color: #f5f5f5;
}
#dj-tabber<?php echo $mid; ?> .dj-slide-title {
	font-size: 1.5em;
	font-weight: bold;
	line-height: 1.1;
	color: #f5f5f5;
	margin-bottom: 5px;
}
#dj-tabber<?php echo $mid; ?> .dj-slide-title a {
	background: none;
}
#dj-tabber<?php echo $mid; ?> .dj-readmore-wrapper {
	padding: 5px 0 0;
	text-align: right;
}
#dj-tabber<?php echo $mid; ?> a.dj-readmore {
	font-size: 1.1em;
}

<?php /* Navigation buttons settings */ ?>
#dj-tabber<?php echo $mid; ?> .dj-navigation {
	position: absolute;
	top: <?php echo $arrows_top; ?>%;
	width: <?php echo $slide_width; ?>px;
	<?php if($tab_position=='left') { ?>
		margin-left: <?php echo $tab_width; ?>px;
	<?php } else { ?>
		margin-right: <?php echo $tab_width; ?>px;
	<?php } ?>
	z-index: 10;
}
#dj-tabber<?php echo $mid; ?> .dj-navigation-in {
	position: relative;
	margin: 0 <?php echo $arrows_horizontal; ?>px;
}
#dj-tabber<?php echo $mid; ?> .dj-navigation .dj-prev {
	cursor: pointer;
	display: block;
	position: absolute;
	left: 0;
}
#dj-tabber<?php echo $mid; ?> .dj-navigation .dj-next {
	cursor: pointer;
	display: block;
	position: absolute;
	right: 0;
}
#dj-tabber<?php echo $mid; ?> .dj-navigation .dj-play, 
#dj-tabber<?php echo $mid; ?> .dj-navigation .dj-pause {
	cursor: pointer;
	display: block;
	position: absolute;
	left: 50%;
	margin-left: -18px;
}

<?php /* Tabber tabs and indicator styling */ ?>
#dj-tabber<?php echo $mid; ?> .dj-tabs {
	position: absolute;
	top: 0;
	<?php if($tab_position=='left') { ?>
		left: 0;
	<?php } else { ?>
		right: 0;
	<?php } ?>
	width: <?php echo $tab_width; ?>px;
	height: 100%;
	z-index: 5;
}
#dj-tabber<?php echo $mid; ?> .dj-tabs-in {
	position: relative;
	width: <?php echo $tab_width; ?>px;
	margin: 0;
}
#dj-tabber<?php echo $mid; ?> .dj-tab-indicator {
	position: absolute;
	top: 0;
	<?php if($tab_position=='left') { ?>
		left: <?php echo $tab_width; ?>px;
		background: url(<?php echo $ipath ?>/images/dj-tab-indicator-right.png) left center no-repeat;
	<?php } else { ?>
		right: <?php echo $tab_width; ?>px;
		background: url(<?php echo $ipath ?>/images/dj-tab-indicator-left.png) right center no-repeat;
	<?php } ?>
	width: 30px;
	height: <?php echo $tab_height; ?>px;
	z-index: 15;
}
#dj-tabber<?php echo $mid; ?> .dj-tab {
	display: block;
	height: <?php echo $tab_height; ?>px;
	overflow: hidden;
	cursor: pointer;
	background: #fff url(<?php echo $ipath ?>/images/dj-tab.png) 0 100% repeat-x;
	padding: 0 6px;
	<?php if($tab_position=='left') { ?>
		box-shadow: -1px 1px 2px #999;
		margin: 0 10px 8px 2px;
	<?php } else { ?>
		box-shadow: 1px 1px 2px #999;
		margin: 0 2px 8px 10px;
	<?php } ?>
	
}
#dj-tabber<?php echo $mid; ?> span.dj-tab-in {
	display: table;
	height: <?php echo $tab_height; ?>px;
	font-size: 13px;
	line-height: 15px;
	font-weight: bold;
	color: #505050;
	text-shadow: 1px 1px 1px #ddd;
}
#dj-tabber<?php echo $mid; ?> span.dj-tab-in span {
	display: table-cell;
	vertical-align: middle;
}
#dj-tabber<?php echo $mid; ?> .dj-tab table {
	border-collapse: separate;
	border: 0;
	height: <?php echo $tab_height; ?>px;
	overflow: hidden;
}
#dj-tabber<?php echo $mid; ?> .dj-tab table td {
	border: 0;
	vertical-align: middle;
}
#dj-tabber<?php echo $mid; ?> .dj-tab-active {
	background: #2f2f2f url(<?php echo $ipath ?>/images/dj-tab-active.png) 0 100% repeat-x;
	<?php if($tab_position=='left') { ?>
		margin-right: 0;
		padding-right: 16px;
	<?php } else { ?>
		margin-left: 0;
		padding-left: 16px;
	<?php } ?>
}
#dj-tabber<?php echo $mid; ?> .dj-tab-active span.dj-tab-in,
#dj-tabber<?php echo $mid; ?> .dj-tab-active span.dj-tab-in span {
	color: #fff;
	text-shadow: none;
}
#dj-tabber<?php echo $mid; ?> .dj-tab img {
	border: 1px solid #ccc;
	margin-right: 8px;
}
#dj-tabber<?php echo $mid; ?> .dj-tab-active img {
	border: 1px solid #fff;
}

<?php /* Loader icon styling */ ?>
#dj-tabber<?php echo $mid; ?> .dj-loader {
	position: absolute;
	<?php if($loader_position=='tl') { ?>
		top: 10px;
		left: 10px;
	<?php } else if($loader_position=='tr') { ?>
		top: 10px;
		right: 10px;
	<?php } else if($loader_position=='bl') { ?>
		bottom: 10px;
		left: 10px;
	<?php } else if($loader_position=='br') { ?>
		bottom: 10px;
		right: 10px;
	<?php } ?>
	z-index: 20;
	width: 16px;
	height: 16px;
	display: block;
	background: #222 url(<?php echo $ipath ?>/images/ajax-loader.gif) left top no-repeat;
	border: 1px solid #aaa;
	margin: 2px;
	border-radius: 8px;
	-moz-border-radius: 8px;
	opacity: 0.8;
	filter: alpha(opacity = 80);
}
