<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');