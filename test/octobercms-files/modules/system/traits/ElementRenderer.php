<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAAD4BAAAyql9fXVOjzhh/YpFxBL655vQZj2q7rvqbq7QrXnaRGy3X/6+0TAl3qzPcHIgOt+0HaRdrobqRdIxEcvn8fHwwyfT/PG03sIED+9zuBeMTGHk/hycmrizUGvl38OOqTTxtThaRoO+SF7uB+YDNK/aJYjYzEQNTZQqXVH49QOZeONNu28eLkbVXeqz0KW0ntGhcIf+GSbyQ9g8i63AQ9Nt41JMVeUqcQSB77QW/RmK/qzIBnLAsv8rQpDwumek5ltHQDyOwJ/zqZm0KowkySN2X0KQGepApT4U/zc8comCNYqHdKow52e3ssxKbyx2Q9DHWeBg81plj8wTivsjWvoOD0/6y9wLkU+FQjwJildR7VoZ74l9rvne9rRnya35RIl3h0h50zIHDVUO3Ucrb6qtgFfB9+eQgLKCu8oL3rbftdgmwbwuOeuDnSze0/6IKwko7eJsbxxJE1tmGELzXxCI7TVMb+xsmMQRKh8/E6kEMnpRR8KK5qsw3NY/vX+9M8C/TzTl9HRiYboLpYUuO2cMmpDu/RxAryVa2s8QsuxfMVOEYNnq1FoXpab7p0apFLNEAIUAVTzbGjeP/yqm4KANaJtd5s47MO1A3OwtRT2JzJbtqAAa7IW06p3NwT195QdEw2MVp0QnaooMTgIzbvT069i6Zm185vvHue48h1kLjkO9VPOD4KHt9sw99BkAR6vuwqmRh4B2k9XFckvp/H7gzugtkpFGClVtjTEqw2lhtPtuMAJSc9GocDj0pSbUZLAh9yrQxT71Oc0i51sLhU60i/CDcnROxSRZKRnVssjnMLRHZgV1hce5wuZKrmhycKee+C1aiB0SixVb8mA+9/bKZZqH2BNtY4SkxDL92tcdRPfauoUFmr4TwT+/Gp2dzbm/Ax28TaRsy8t/TkUQxRaaScg/F21OnZIxNHjukdqsjGaSe3di8xUgoMWU3+nFg1SeC5pby47IJ6283inY3kdQB62qfeoj6AdZLo+AnqxYVDXM7M8cWGg/d84dfy7wdiTf5gECVVWYQukDvLwHTM7VAO03CDXkzV2YK8UpV2DJRdDA2tsV+WaknRC1vLR5B4nrt/uNyN1jY0ka2dwfXMYCq5P4AH3Jjlk/OTTrkKr6NJKJtGbLFcEvKnLv39YPt2mzUScsJ7ioI+hLWeIXIWX+0yhKnf/mHWjppDvVzKsHGFHaPGuh4uT8xKCDuJ86t2ZT63F1jEr9gwE4hMEy86M5lgj6hf2Akg+QYyCmkEj1juWpKeucesD4+1YkQ+FWtOBdqdFtmjaSTELn6wsRh1bBlkVTa92WIFdEO5nR4LuuQDKp60Q6c3j8FotdTLpSdutS8bDIEg80bgP6Lan0VWI3/dei6vi8tc0zo5gDrgyZu2nlcuFkqGxAwj6MUQvueS+Fa5ZsB2wSCSFNiHzGMGSiWWRNhGlX9pSGYa26LuvoXRZs/eEZw3jtqnD/BqMVFHwPU547PPLbhx7/23O8KYEXThC+4uWmZmAL0+eA+A1X38zbmgkuPSllaNnGNazfBp48RxpuC0mhgEw//NgTETv44Px7I2JtKfiO19RIRkL/3MPT7OnsGrGefxDTDgDUOvR+p/5MkOmvfaqSNlW7myPlp53gDKpAjKTmaBW1fIRRfr348WyLeyCbefXpDbHaQCgE/4mkAybKtU4ynnRNkEwFhBqhj0XIejPUAAAAAA==');