<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');