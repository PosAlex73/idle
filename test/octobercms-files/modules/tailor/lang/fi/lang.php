<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAAAgBAAAojXLIHIBN/oN4sfqMmZi9G6wEscNzHuFRNSIZWweciF12q+CCK/yZgjZnKhC1E07XJ5C0x3594esrw0sQhJji1DHkteizDrsdAgdEebRcodwzZFyYc2BZBb9RxlSKsToHJqw+XayJ5P1jCE6KqLu1vB/449V1Lv/dHm2IfMdvHkpO1ncBownQ8vXa0UqM/l+CknVi3hkp2Slt/aRJX0xhz0k8c3c7vTtHz6kGb/34sR23ZZi5Pr3JEI+sOZ55LxjkN1YAGvl4gLvJlm4Me62NUZvN8OMIqEX63yaQnI9QMcBDSE3JvtVQ/cRfD+2fxncQ5D34gE1myyBBERMHaf0dorhb/OIbqBVsQFRnlmHHNWo7aEFG77StRuKDtYWXXR4UeH43q364Q8/lFSClDkp7DWKeWaXuilWlasT8o8csq4QjZNxTFGM8ZdH/+tK0ExDFlWd5dRD4Mzz+7R/vPx6oz5ncgf4KFzEELC28+0V2qkddpxzo2Tdc2NZupMabC/7VkU/NkFlmEW+557JqVZxk5Z7gFxuxh01q2hNef//GtsubQiKsZmm46QrlMyHLSGRb1qw9N2wuhCwI3RkMFMHerX9vREYrDH/8iXKe25IR/Ui9dl8rDNiyjkoGk/1OtfXerPDvryqJKvW4K00jLLPHSP+5mOmcJpYVmkiqmUVPajtVgjQPW981aJrwXDjkVcUJGsSj8csPVAppAWgKejBtHkho3CB/FuCGhbWW4qIxMtwqZ62MRHknzEFrS20gxAloG5orcRyUDoSD2VjJ5VpAGtqDpvjJoWoaoarXAIgDZjchphr17csBfGQAGaoPTiIbOyqVGBRDQxNkMKVrr+QlNE0RNlnUfA+MinRiPqfPD41JdWd7XnC9SjGiWXs6HQ6TL6FAOzB7TMhDZ6FTNYoxkh388nZWinaekMH2+0Igr4VNyXvLGCGJaHITKpePM7ZRxeeurKlGm5PdZfYTBdxrroehjysGlz7DqfOvRSHY2FuyuWz7xjF4SN/Od9b8wYL4HQvWXSbEkHQGe9cYO2Ek5WglQZ1lxy3dsbW6rsIXu5Lz5Y4eYWdynrk98mBdHu3VaqSwF0L0trKRayqhtY/vx6NMCKl2xsks8jcHAAUUrOGA3YW8AzbNZHqQz0Z9SLflxcU0GB97WwFDakw66hkWFyHeE4fKU3JrmTYiBQN6+su3qkfjwGSvXO8xo9WfY5GqkVgOiIQq5/SyqKSArBDBzOWh5c5cjlmnP70v7VJCgQNp/ojfhdXk3vEbvsWr3DaeB0x9b5wmctDDmfCRkZ4wZBbxyg1RLTtb8GcYSUp4rMeV3SglRCtKmHvVS8jYd16SSLltQgWHc7voTb11dclbJjihEOJjxRfi+nBa1C354JKXdeHQowWik9rONa+LdVtAAAAAA==');
