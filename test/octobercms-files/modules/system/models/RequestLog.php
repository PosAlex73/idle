<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
