<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');