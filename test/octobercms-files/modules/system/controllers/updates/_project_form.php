<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAAAoBgAAxJFqKMV4xDDq3FeaExQAsNo6rQQdw3//N2j1RK/Bt9E7fbvPAcZMpD6jp/N89xsSR8mSp1VrUS6LfNuSECfmJdYtyN3qRDpqGNR96RxwwlanifIGRKNGdeRmLLy+fA0SLzmnEMbRURhV04ff+x+xz+pZz4bi1aS+7OUFuwt/HGb9EwVzAIqkxYg2jyNYxmm8bNO33PMxGcOmnRHcs2ZyoXtCrThzC4UNMJ3P0ERNZh1fLCjePLLYx8omGLor6uwaEYXI9FfjLaNl6CysXo+rp8+F+wCmhSFYVdYbsxnz+szA54NzEwP7fe3gJ5nS2bVV9pHN+GdPB8c/bHYc5DTECVle/1+2KbvM+eP2miI357Un49jBTXPJomU23nIARuKWx3q4srPTGxQNNtLg4Q78l/XnGiUHdwLNXDzHQCF1vEhi8jILlZsqmgrEBpmjkhrqwO33ShcWNkYFeZYY8r/l4OQkalPHH044ORM7ng+UlabseVkRVWfjobN4ZpeyDRdoAHsGI9fX+Mqdo2ng6e5/9VhsWDKpDayeaB0SzZyOzs88xaeObAKbMSvnvRrBX2A9qThPKbsnHJdfBp98b8j3v8q2amr2gFusgEtlUbCWi8GfFxn737WnK7C/Ju8bZnGhPvaFPvpjG9X3+Xm9MOnlGTSXdlrkTIxe6CBl0w1VCtYdOkRTsnW2aXGBVnGxXcJGaKdvpidWmvOK/9grhFX0GsnvlhTTrbz8DXyPYB4itBCKx+c33jcMSn011b+2yF44FZygFdKd1JwcKlKDQlUGjERJtwDbjFzSAyCtuckYrQIqk7KkJXvCLx1q9jjfOcl7qiH5PgIgQWDp5q5VSxpA8qLWEmtxc15ubNa8OPE6Zwp1rVvz/PZhOmEyldWuxHNW19N7EZS6XBuvDKRszhfT/LecqqUrRQe7nOLy/jSjpzONBCnQLE5U6nQxKlLAP4cYytLBTQTs/QreToQWQwDF/5gVfgNqngC1aHwVsqAXkm37vfeMvdYG52nLMIypCPxdhVoiR6W5x76T0A2BKFRXoM5BA6t5MJKQ7Y81mqu0mSQyjjkWiuisOrapZgG9cmEg3+HIykljTp3MlIorDVIoCEyu8WePRTYGXGPZ1A2J0dX6xGVKjLVfwP/PxtsVTrzt3Tj7nHSkHGeLmGWy3mfBYxu5IHMF0B1Bt+KSZersSXeBmlDlnszutjUuAYagdE3oklIQSr3lsLLsCwirSDoLCf/DGKzw8dfCFS7s17qL6RvmKXA8lpy0t+z8uqV4/EB8XVA6OnVFyaDg8XlkW1NWDllI+MzbGItLY4L1FC6IKHg5HjR1VVanOcUkWTvd+XHixAq4z2g1PZGaqxcBxWw53H5jA9sCQPh3pLPxKvXllaRB/v7fkkhKgTKfS95WzQlxDWnrWNabfuPOORBCJs4zstb2eemxz76yaYAqsxkmTzJ16ZLzzWukcFk27m4H2pZFmpFDLT1w+5SbK9GnsZMp2k8SSyLedO91TNan6WiC1WEKegfQPaVX5xYkVD5r0xgpfjCFbntXbr9OIpLIoHtNdhw33vLxVivf8DmpG71eDvYVg/i1Wi5ztQwVVdfpB/adxfXxbpcevdr0082bFQY7Vw3p9VDOSnnci82G0yM4XxJNYIVMyZt2RLwVIYjpZKujhmR9HaTBZDKvPlejaXmDzXZNR5fzGTE7BX17Ox9fMpqHC6iVnm79mdhkKsepDPsBT9YsjcwHcStPyyRqJPTRrfo5WivtBjaw2gtNUvG/0q/yg0tIwJojiTMBMBUYyODN1mesJ9zU8WK/1SzJ53babn1bz/o9gS2b77Qr1t3y/E5/AjRL8hobVIfLiOu/m22I3zqtB33JewMK/FfvK8QhgqcXGRFM5ZAUICtcPdB05Sv6SSeNQKhTi7qTuKiHfx2r/sBikpGD5FJ/dZC6CaZPKxR0m388Yussqk0x2WCXQjYwquCBsn6wATUPwIcSDwVc3wdEbFcYcJnWiWPRb8B+TL7lX7qk6xTt93IrN1FMN38SsU4qpc283bRBEFY/EqTF8fOpQ8HJ4vtslF7MmT5wN5/paSV4qfLVfQUGFaj/raAqTx1iGGulYgAAAAA=');
