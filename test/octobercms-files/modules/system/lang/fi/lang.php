<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
