<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');