<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
