<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
