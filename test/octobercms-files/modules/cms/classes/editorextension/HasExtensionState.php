<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');