<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
