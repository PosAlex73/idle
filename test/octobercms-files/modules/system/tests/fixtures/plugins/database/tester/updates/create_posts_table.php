<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
