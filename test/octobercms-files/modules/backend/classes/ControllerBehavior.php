<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');