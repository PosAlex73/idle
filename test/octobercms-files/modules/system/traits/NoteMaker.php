<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAADYAwAA0ong918nyasx/z4zGwQRkGtoiAxfI79GM3otva+Cg8TpI+19eYDFMATmjL7mtibuUoHdUCu3vxG0fQSlYs4bV4da7wsK8KHhG/7tvxfNIFhUiJbMD4RqLD9nlOmKGpViLZUlO1swhIuVLCfq3QImiOyC9dDMwkzY2Icn68fsHwu1gfDGlcLZ/KM0oqB7YgLbGWRqezCI6z33PgADQHM58lKMzBSTh8sREDsVxceDUKOahU1ro8eO5P3zNBlBUjnXn2b+kMKNOY886Y5g63aCuHa4fMmVgtJ9ARBvIXzHk+XbGXhKcxMGxR3kOFDtz4FmdVLaVK5k4PLPRAbLOKNyOjHeZO2dEzCXS64fWpnaII3zkKGvz3U7+rQQ1Nxvz1tnf6KxLSA+vWZQADqsvLkZvH5515fqJ/5sQGvgzUS2TBuZ/kJwOWdVmAccqGi0LhcZRxUsky8Psc37jPnDDoabGY5ixThvw9qHpf6L6P3SMd+h/eYKteNAI/dHj4s6tqXaqDl992gS60KQ2+34H2wJ2sNZlkAbxGLXe1+4ZM47mrqEXL58kQ7azuhOznp9gpgTjUTje5NSeVXEqYOWB7QUGY37JVIwDiGe2gBVUefLSH+4wmyIRBT8v/snhzb5spYwGpJf7HSEdI4xZQfaEpGO++ugZTbjGIm1AVBwfYn72J7ymE9hA2/iY76Y6mzXyXd0EN+YP8LdyQt5axLOp2akypO4ni7pprip7T0izBtV06tGLWcoDFs/MWBtFga4MuHKG+RHtA+ZEMnh9/nhQAPXsdyqlBqoiI9U4jFkU+hUxZwZRkFIY3Y5JeioPdLfLVqGIQZld3nrrTMit2vo2TFgV9++7DhwH4ju6LufLcZP8e10g3MC1LmtlVwH2AzNXrZ8RsMr1jS85L2ME3Buxl89pO0WrTlBZ1Qw0oDUUtRshWE+t/NKdCpp4Pjazbz/ZmYz77BNVFpOTekeh/GiKbifXLivWevAQ/ccnXm8tBJqFRTOjXQOcO8Mr2AOxR8XSLueRBL2pJjRXtQd0yv2TQvuds4LKUad/JLV+9yGMkgEOPJVgYnrmvGYe4Neh8+8DGetgebT7U+CxuU88phGr4F9yY1QoGw3p76ARjaQkBQc+PzJLK70Ta5WXD9iB0fl9tl4MS++EIrZ1VlrETcgtHz7r7kdiyPTHB/+1Ch+Wesf1vmYZBr5enSDqcy9Y0YhsaGz2N9ViaZseLdGe8TlYitUKVEtEUIu9Ja9NNJYkn9HJXc/L2DDQkczOyIIrOKAAmnJCPObAzFp8MKEIFIvVy/WaC2/eoK4Z5P8AAAAAA==');