<?php
/********************************************************************************************
 * 注意：为保证校验策略的一致性，此文件必须与印象码应急策略->localsec文件夹在同一目录，否则应急策略校验结果会失败
 * 您只需要设置以下宏定义，就可以便捷、安全的嵌入印象码
 * 印象码 - 中国第一家验证码广告云服务平台
 ********************************************************************************************/
 
/********************************************************************************************
 * PRIVATE_KEY -> 登陆印象码系统平台 - 站点管理->站点key 中获取；
 * 请保护好自己的PRIVATE_KEY，PRIVATE_KEY关系到验证码的安全性
 ********************************************************************************************/

define("PRIVATE_KEY",$settings[yxm_private_key]);
?>