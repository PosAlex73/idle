<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');