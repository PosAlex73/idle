<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
