<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
