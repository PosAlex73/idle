<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
