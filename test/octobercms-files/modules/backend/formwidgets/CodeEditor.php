<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
