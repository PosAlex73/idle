<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
