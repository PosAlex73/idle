<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
