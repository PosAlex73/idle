<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');