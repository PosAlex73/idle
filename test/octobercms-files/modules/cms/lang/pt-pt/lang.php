<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');