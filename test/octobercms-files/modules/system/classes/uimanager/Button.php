<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');