<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
