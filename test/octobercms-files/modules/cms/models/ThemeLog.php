<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
