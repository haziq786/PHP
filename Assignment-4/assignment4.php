<?php
$m=$_GET['mdhash'];
$a=md5($m);

$n=$_GET['sname'];
$b=number_format($n,2,",",".");

$o=$_GET['ascii'];
$c=ord($o);

$p=$_GET['str1'];
$p1=$_GET['str2'];
$d=rtrim($p, $p1);

$q1=$_GET['sen1'];
$q2=$_GET['sen2'];
$q3=$_GET['sen3'];
$e=str_replace($q2, $q3, $q1);

$r=$_GET['sentence1'];
$f=strlen($r);

$s1=$_GET['strcasecmp1'];
$s2=$_GET['strcasecmp2'];
$g=strcasecmp($s1, $s2);

$t1=$_GET['strr1'];
$s2=$_GET['strr2'];
$h=strrpos($t1, $s2);

$u1=$_GET['sub1'];
$u2=$_GET['sub2'];
$i=substr($u1, $u2);

$v=$_GET['upr'];
$j=strtolower($v);

$w=$_GET['bin1'];
$k=bin2hex($w);

$x1=$_GET['ch1'];
$x2=$_GET['ch2'];
$l=chop($x1,$x2);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>answers</title>
	<link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
</head>
<body>
	<style>
		body{
			background: url(https://hdfreewallpaper.net/wp-content/uploads/2016/10/scenery-wallpaper-backgrounds.jpg);
			background-repeat: no-repeat;
			background-size: 140rem 71rem;
		}
		input{
			width: 200px;
			height: 30px;
			background-color: #ffff80;
			

		}
		.outr{
			background-color: #666699;
			width: 55rem;
			padding:20px 0px 10px 20px;
			margin: 150px 0px 0px 600px;
			font-family: 'Acme';
			font-size: 40px;
			opacity: 75%;
			border: 4px dotted #52527a;
		}
	</style>
	<form>
		<div class="outr">
            <div>Converted into MD5: <input type="text" name="output" value="<?php echo($a); ?>"></div>
            <div>Your salary is: <input type="text" name="output" value="<?php echo($b); ?>"></div>
            <div>ASCII value of: <input type="text" name="output" value="<?php echo($o); ?>">is written as: <input type="text" name="output" value="<?php echo($c); ?>"></div>
            <div>The new trimmed string: <input type="text" name="output" value="<?php echo($d); ?>"></div>
            <div>The sentence after replacement: <input type="text" name="output" value="<?php echo($e); ?>"></div>
            <div>Length of the sentence is: <input type="text" name="output" value="<?php echo($f); ?>"></div>
            <div>If output [0], word present: <input type="text" name="output" value="<?php echo($g); ?>"></div>
            <div>Position of: <input type="text" name="output" value="<?php echo($s2); ?>">is: <input type="text" name="output" value="<?php echo($h); ?>"></div>
            <div>String after words removed: <input type="text" name="output" value="<?php echo($i); ?>"></div>
            <div>Lowercase Form: <input type="text" name="output" value="<?php echo($j); ?>"></div>
            <div>Hexa form of: <input type="text" name="output" value="<?php echo($w); ?>">is: <input type="text" name="output" value="<?php echo($k); ?>"></div>
            <div>String after Chopped: <input type="text" name="output" value="<?php echo($l); ?>"></div>
        </div>
</form>
</body>
</html>