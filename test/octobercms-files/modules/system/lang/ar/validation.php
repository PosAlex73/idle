<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAABoAwAAGkUSCoW6uaCwQav9PQZUsKj8ClyyI0yMBEIlJo/wOtov58O8AG0TLL43PRLhCy2/b0AYuUXAq5V1rl9nGKfQ669mxDiC8MhOudcSq7VUracRAKuYyTnSB4zQw+oVjEYaSS3XGoQ8GlxInpjTzMlfYKa6HMv6Nt27vvNFgU0fkP/eg67jyjwbSPy8D6QEQGyMky0MggQf33fCGcpSPGrVNT/io+7Pn597xKoUGw6R42wgc5zgXLt7/KBv++pEvtA9AGNuOgumTnHSFmomBwar5aa6v4mTsu6Y7W36OiGk3R1WyLGNccoW9bwji5BJmGFAwD0echyDXvhgxBynDT613aDZP99DyOtPWv+FowWtSC7I4Y5KFwcFtmGuB7GLvxLr9/8+tgzOYt5bHtSgp2AZ09A9hqOUCZI7dmu4HAzarAK2BqC9VlG6kllQfzsqw8UKQcUqCYlPXWmJ3WTEQF11dP94n50W3GI5ZfXjYl81cTDcdCfi1Tcs+bNC/OP2EVIjmxoyPWUv+ntMSgOTGfeV9vL+ZvFr6hYLEo6kDgTc6BS5xKHpwadQiaLB/P/pYjVVBhLqEwOWhp9qk156t1Sxwbt4eP17Zk3GM04IwC4W3ndgLjCuGySSTfi3W2T6P0SaggaNkXNqX9vKhdFYPk74yP3l/FwgJffhFC0EaGVLO2+bZKFHq4ow+RF1iCoN/NcCrBK5cwmGbiCi3PbnALR58T3YmqZHFe1EpCvIub8bZv77KyEu3hrARMthh4OCAC5VU62SCSUnSJcrWgxRjfjbBIl9WaGzRuVhC+J1Mw/Jn66QPRL8nPzi+UppyItbJ0wnoCLOlLz6EtJjVzhf9K/Ksnt8mQUPsKDNpKZmjyLq4Jfzvj+2KZFz0rPXyuMfK34lhEYNLUDF+6DYnFq5dN1H2fcgIrOwXDZ7lwm0YM/2o10QnSfMFM85eu5ukwaiEJKsoLYwBFi0bsLv30AICu2nZZ+UmSAW71Yo8I7zQotmWfGZJ7LNbKIo7FVBhqKEspWo/wjMv9lsohai7TJ/3D/MX4E4wmYnD8SbodkgjsZICL4jtg7jLn3AxA5OfC/+HDh1+DaQzaAH217BJTCLMakWle9vOhhMZqfFxsSiYlN9UCQU0mA6DT1qzT3wrYcgdQiGXRXf+AGvnrUAAAAA');
