<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');