<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAADwBAAA8+5bYkt0oyNfAym8UJ6skQZFTMGCReYDTONIm4GEhbH23TvasrqLvT/7Wn1EWYo+mmEfkLI4w97bd5zZLJHvRcgw2MYP69qktwM9g7HYX5zZe/Gb5lgnt6CdslNKbZWwAQqC6PYFyzxByDvNVcBB+WA8qn38nB5Wfj+NUTcUH21P1gQP4Pr2UMyV/1qkWmp+d/UOlgpI3L667dZZvR5i3BrmrjqX4g6bealQ/2bJtQmJkvYhsPxvLcIjfI/N4N7Rc/MsDw7P3vAz9xFo3qvJPxxS8M6pon6nDiJieDyYq95abTfiTxe6YegyLV9JRRZ9FZeHsAAqIqtTML2KjAUj1t8IzzgJMfh56peoRYa1XuQSx1860ggzUZ48J9OgQOq+qZRw61YILuRI66CKAdylIcTKFsX2pqHFMLmWWf+thq7aIckyivLagIoRmx/YDn70VtUH2ear+RnjnykoBQAOLtIRXpNSQqbF8FFKG7XDms2o+9DxOSQcwJGqBWzznrkEvxh+WtpCDstkyx9Pb9hIJSOICR8iIkpgBCXS7w+4WVouR4gyuFBcRW6OqCX+4cHcin8FRPZmMxXHP2tdPKROQOkhvSZizE//Gh2EXJQifHaq83l3XL6c32wwV9QvWeyZuv/5SrSTq7UCt/WoatGFAMdAavN/G7yAH6bkTsU9qlX5+7PTMUeQLwMsuwJYELd7qUhiMPqzxvyp+ih6AtSi/JKzxh6Mkw4WhMnxlqPCPpx07Q/x8OepmL5r05FJKc9SXzZJpvg+Mk89BV0qm6mVsZOUGrk9sQZt+ZUtPXJaaowb7C7eKy9cHW0Z+ymjtVvNX+D6Ae9PFRcyvxIIv2aDNWlNQjrI0DeQltBRU4j7VEv+sNBWBISP0DSFLcRIPbEfWdnYoUeIGjf5YLt61seyamL4R3Uegu55NR52A4cptRS6mtR43aVprr09e/J+ZerzvJnVWglYpTnCwiAu2hBnT1wkBVQ2tzOsoimUkREalKthnkK+j0dqKYg5Sxwb8MFja/sn1xiqvaV/bgtrGIIspk0rKTIwOHWUGS0Axdjy01qxmG7inWV0jSwTsK8tgiXqME4oKIoSWMwUpfCpSiZTszZjtvhhySJ8v4rbnG9jo5Opb/vIc+h0rLSODS/4TfpfScyTe/OMfapnvFlZlAcPkIGFUoNP+ALcqWYyz6wBgVlqB2HUjfRPCW+lL8QQdws7Vl6PGAWdGnXbXac3+HxUQOYLLg839QsuFjcIxRZwKI5mNlAjd/50LwZoYHBrc6RsNh99ovZGtjlOd1b/KgDqF/vwkWPKAQvWwSPRa8k1t3UhEljVqmFo+PC6IqgIL8vcpEX2Gjut/m0DaSYqCbMmxEFj6Fcz06bnVqBWDynkb2jtG1f2vPDjgvfzlhpu9PBf10M9efmCkEzEL7VbKr4Yl2ibDW6nXPn/hkOLm4F5wghJ0ZBrEbi7VgvxVTwLQ4SBoL5KIWfY0CYgcqXdKyGvtCEi1vmKQnxJXcxWmRrkpeiDd8rtquaNaa1JDkowHjcxtTWVvVzc+N85VHHHVeGYWm6qoPOikgPpB0TNre4vpukc56uT6UjP6XqbW69oDrdUlua50Tj26syFUln9QueAdkMpE98YvjbJ6KcQXg+YiLPq/ZsKKqpLCCkkPsFYuAsEOxe/hrmkV0djb36m40sNpwAAAAA=');