<?php 
// This is PHPDISK auto-generated file. Do NOT modify me.

// Cache Time:2015-10-27 20:50:05

!defined('IN_PHPDISK') && exit('[PHPDisk] Access Denied');

?>
<?php 
##
#	Project: PHPDISK File Storage Solution
#	This is NOT a freeware, use is subject to license terms.
#
#	Site: http://www.google.com
#
#	$Id: block_viewfile_bottom.tpl.php 121 2014-03-04 12:38:05Z along $
#
#	Copyright (C) 2008-2014 PHPDisk Team. All Rights Reserved.
#
##
 ?>
<?php !defined('IN_PHPDISK') && exit('[PHPDisk] Access Denied!'); ?>
<div class="fl_box2">
<div class="tit2"><?=__('user_other_file')?></div>
<ul>
<?php 
if(count($C[user_other_file])){
	foreach($C[user_other_file] as $v){
 ?>
	<li><?=$v['file_size']?><a href="<?=$v['a_viewfile']?>" target="_blank"><?=$v[file_icon]?><?=$v['file_name']?></a></li>
<?php 
	}
}else{
 ?>
<li><?=__('file_not_found')?></li>
<?php 
}
 ?>
</ul>
</div>

<div class="fl_box2" style="margin-left:5px;">
<div class="tit2"><?=__('your_like_file')?></div>
<ul>
<?php 
if(count($C[you_like_file])){
	foreach($C[you_like_file] as $v){
 ?>
	<li><?=$v['file_size']?><a href="<?=$v['a_viewfile']?>" target="_blank"><?=$v[file_icon]?><?=$v['file_name']?></a></li>
<?php 
	}
}else{
 ?>
<li><?=__('file_not_found')?></li>
<?php 
}
 ?>
</ul>
</div>

<div class="clear"></div>