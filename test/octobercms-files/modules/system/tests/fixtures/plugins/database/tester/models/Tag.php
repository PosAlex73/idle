<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAACQAgAAjmttUVzYP61DNKHw/s/1j6wYYYNQEL3TnIf1GcuZysUW/Gh+44tKC3lDORPGQoOWQgnkJ88WTyDocdHpJau1b84b+zMy/YGRmxOU255jDNxJBYepJ7j3UYHRBp0vKSTuqsd38ARTdjG6QXFavaB4L9HgdGfY0Y5jSSgLxYgcliGs44USSlb+iNMlaxAK8tXQ2u7I1VZaobNkWYVRGhKV3svOkGhkW88oBSwNzvUFY0BrGlMCF1uiBuy+xxQodRJGb7WTVkNVYnIVNoBvyqpG/JBbkME1DHYg+h1fKtY7o2zl0xjdyaKYp4tPPFMRg8hk7aOIBuMTObBivf3QoW05+AB6I6LExHJ4zHeTEoWW1s2/UcaxxUU02CZVAFXKheYX/y27ba+Z04F4rewqii46pxSc5lg/u10M+cqGyszfpkUtOTh4L1LSP7z0ZDyJd1JKl2UXvRJ8aNtl/56JLuD9MOmjJzbjEuvYai39XnB7O5iTQo5eGOxmY55+z85BFZulv3A0Ik7WHsFtIMFxKb3bh53G/MCI7A1kfgCF0htSvdrMbq33Eml8FWNOR94R/6cp0NL2UuUB4O6UD5z7rhQeVoEjhf5MYUNuchlitFFaoXMXK8o4S+QITzvsBMq90FBQ1H81ROYp67IDh6yQULOhtyoJChmGdAqhVIrnUlGXqHSt/pxQG01n6aGcJKsQP8LUNJv39NsucT75+uoEMv7G72f/ziPAJiv8eqHpOjG20Xt4U39jWSbNxaFhTL9pfUVb9RydztovipBXZ2Ivhl9v8sB2+u0lSFWtuD67N+7/fqyHFyU0MkJEPx9owlopAQpgra8oP0CeRZh5FwQX4FQKAljwUJ1Bu7JVkELnSJlZqXEAAAAA');