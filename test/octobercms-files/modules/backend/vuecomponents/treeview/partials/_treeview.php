<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
