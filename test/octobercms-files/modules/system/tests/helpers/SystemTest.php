<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAAB4AwAAwEP0+tYi8olAIfOdDRkblHTh7pTqXO626Uv36nPGoem+gn4lQk7zh7CHXpEywbInv32bSpkNoFFOqgxLFSMNjKzsPL5P4uE2hww32ZO4/T3nYWmlvW9uwKQ85/EIzB1jnRYcsdCqfIGLUPj7PnqO/6ZMCJvLcfda86S9On5vz6dQaA3aktjMU5k3QhWHFFRxBRc3kjVlNzq8KslsrwZI1Sp6DZShJI3PYLu60pt0K4wRCAfG7oIu6HWuhXj3QCDIUhE5zKEzm6UqK1vqPQXgkQHiK+/6zv2VhBinbgT2dqbuWky09hr+ZUOCWQSpl1fR4OEI1mvgxNzq1wr2dCHDS4TCrOoO9TUr0Z0OShmaIR23U3Pv3wmAm0x65VOE8SGW8FG5fIP2YM9/lEGB8NxYWYOC0rlC7ZotY9dic+2bPDFs9cAEesK6RaXyPXaVgnN1vJ0UQ/jx3EGMnym7+9CWP/OlbK6TF2yRqbdOg8PrSCr8hJGzDY0ZS4Id381ceokaBa+obLCgCU5OXxhWROKeA35xQWdvZbc+STrqY+V6uECCYH+7xMoSMiIv6kPyD7Ixq2GBt5ADf7y8NpjfkujN/tixsjf2ugJjeQUoKgFvVnqtL8ZlxMPEzjykdCBb51p8gWP2Lb8ViHVwGLeyALtySlyRSwoQ4kcgMGP5eGE0ertCjykyqOyvhGv+s+5zR+aA7+VBW+B6TqnPxDvmbuqHYR5AoPwKu8nUK8nm28KOAErV66/iKjySe86i78TeSrjnUui0KSDbV5gc4hYemp8CcFrY/Zhxk70P5HgSIKPilgVsSBVJqxRw2HmMx0i++tFaqmhITjpjDQvT1KQwxqbXUrvORYA/Dijs6/rRdnR3W6xvDi60LwzVjr9WCIfsjMTgXiMGku8Xgp2QaBK218XvwKfLawmAjUh5nk/OwNDhwM+NfQLjzfiRTxLHIcLUDFvaFO5JuEViDaVTC46mgYh9h1IG/CSKI4Zs+B1Voo7FmQUD/z83d1GxsqlPEFA9R1CeQYlR2DKelTeemyO2qxbXE+s4GFpVuOhhdCRVR2sop3oEHa9gK6DOSjPUfzIjhY8E2ZW2hWXsr70GeVv/1o6dHnbX/BaYSkZGL4WIg4Tqjw2XZy4MWem4VJYrkK5F7tybcuaAr9BVLW/dAdh9pO/AcGOs3eJOFCEUAAAAAA==');