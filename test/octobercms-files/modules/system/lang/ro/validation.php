<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
