<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
