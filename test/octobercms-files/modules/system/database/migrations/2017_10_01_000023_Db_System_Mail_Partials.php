<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
