<?php 
// This is PHPDISK auto-generated file. Do NOT modify me.

// Cache Time:2015-09-26 17:55:14

!defined('IN_PHPDISK') && exit('[PHPDisk] Access Denied');

?>
<?php 
##
#	Project: PHPDISK File Storage Solution
#	This is NOT a freeware, use is subject to license terms.
#
#	Site: http://www.google.com
#
#	$Id: block_announce_list.tpl.php 121 2014-03-04 12:38:05Z along $
#
#	Copyright (C) 2008-2014 PHPDisk Team. All Rights Reserved.
#
##
 ?>
<?php !defined('IN_PHPDISK') && exit('[PHPDisk] Access Denied!'); ?>
<div class="idx_r_box"> 
<div class="tit"><span style="float:right; font-size:12px"><a href="<?=urr("ann_list","")?>"><?=__('more')?></a></span><?=__('disk_announce')?></div>
<ul>
<?php 
if(count($C[ann_list])){
	foreach($C[ann_list] as $v){
 ?>
<li><span class="txtgray f10" style="float:right"><?=$v[in_time]?></span><a href="<?=$v[a_ann_href]?>" target="_blank"><img src="images/icon_nav.gif" align="absmiddle" border="0" /><?=$v[subject]?></a></li>
<?php 
	}
}else{
 ?>
<li><?=__('announce_not_found')?></li>
<?php 
}
 ?>
</ul>
</div>
