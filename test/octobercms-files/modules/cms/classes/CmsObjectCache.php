<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');