<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
