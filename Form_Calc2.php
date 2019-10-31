<html>
  <head>
    <meta charset="utf-8">
      <title>四則運算</title>
  </head>
  <body>
  <?php
    $number1=$_POST["number1"];
    $number2=$_POST["number2"];
	$operator=(int)$_POST["operator"];
	
 	switch($operator){				
	  case "1":
		$result=$number1+$number2;
		break;
	  case "2":
		$result=$number1-$number2;
		break;
	  case "3":
		$result=$number1*$number2;
		break;
	  case "4":
	    if($number2 == 0)
		  header("Location:calcform_error_page.html");
		else{
		  $result=(double)$n1/$n2;
		  break;
		}
	}
    
    if($operator == 1)
      	$result2=$number1+$number2;
	if($operator == 2)
      	$result2=$number1-$number2;
	if($operator == 3)
      	$result2=$number1*$number2;
	if($operator == 4)
      	$result2=$number1/$number2;
	
    echo "<h1>使用switch的計算結果: " . ($result) . "</h1><p>";
	echo "<h1>使用if的計算結果: " . ($result2) . "</h1><p>";
  ?>
    <p>
    <a href="Form_Calc2.html"><button type="button">回上頁</button></a></p>
  </body>
</html>