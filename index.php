<html>
 
<body>
<center>
<h2>Program 1</h2>
<p>Prime number program in PHP </p>
 
<?php
 
$num=29;
$LeastPrime=2;
 if($num<2)
  {
  echo"$num is less than 2 Smallest prime number is 2";
  }
  for($LeastPrime=2;$LeastPrime<$num;$LeastPrime++)
  {
  if($num%$LeastPrime==0)
  {
    echo"$num is not a prime number";
  break;
  }
  }
 if($num==$LeastPrime)
 {
 echo"$num is a Prime number";
 }
?>
</center>
</body>
</html>