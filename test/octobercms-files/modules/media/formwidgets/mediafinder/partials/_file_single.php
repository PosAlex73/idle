<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');