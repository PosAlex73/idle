<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
