<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
