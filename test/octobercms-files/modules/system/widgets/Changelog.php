<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');