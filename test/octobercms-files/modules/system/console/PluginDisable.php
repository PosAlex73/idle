<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');