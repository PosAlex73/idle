<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');