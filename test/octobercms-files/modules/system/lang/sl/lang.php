<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
