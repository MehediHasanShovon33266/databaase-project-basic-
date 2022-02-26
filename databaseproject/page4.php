
<?php 
 //$x=  " What is your name " ;
// $X= " What is your name " ;
 //echo " What is your name " ;
 // echo  " <BR/>What is your name ";
 // echo $x.$X;
  
  $x=$_POST ["x1"];
  $y=$_POST ["x2"];
  
  
  $con=mysql_connect('localhost','root','');
   mysql_select_db('bank'); 
  
  $q="insert into depositor values('$x','$y')"; 
  $s="delete from depositor where account_number='$y'";
  $t="select * from depositor";
  if(isset($_POST['x3']))
  {
  $r=mysql_query($q);
    header("location:page3.php");
  }
if(isset($_POST['x4']))
  {
  $r=mysql_query($s);
     header("location:page3.php");
  }
 if(isset($_POST['x5']))
  {
  $r=mysql_query($t);
  echo'<table border=1>';
  echo'<tr> <td> customer_name </td> <td> account_number </td>';
  while($row=mysql_fetch_array($r))
  {
   echo'<tr>';
   
	  echo'<td>'.$row[0].'</td>';
	  echo'<td>'.$row[1].'</td>';
	 // echo'<td>'.$row[2].'</td>';

   echo'</tr>';
	  
  }
  echo'</table>';
  }
  
mysql_close($con);


    
 // echo "<BR/>the sum of " .$a. "and" .$b. "is" .$c;
?>
