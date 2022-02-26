

<?php 
 //$x=  " What is your name " ;
// $X= " What is your name " ;
 //echo " What is your name " ;
 // echo  " <BR/>What is your name ";
 // echo $x.$X;
  
  $a=$_POST ["x1"];
  $b=$_POST ["x2"];
  $c=$_POST ["x3"];
  
  $con=mysql_connect('localhost','root','');
   mysql_select_db('bank'); 
  
  $q="insert into account values('$a','$b','$c')"; 
  $s="delete from account where account_number='$a'";
  $t="select* from account";
  if(isset($_POST['x4']))
  {
  $r=mysql_query($q);
    header("location:page1.php");
  }
if(isset($_POST['x5']))
  {
  $r=mysql_query($s);
     header("location:page1.php");
  }
 if(isset($_POST['x6']))
  {
	 
  $r=mysql_query($t);
  
  echo'<table  style="background-color: ;" border=1>';
  echo'<tr> <td> account_number </td> <td> branch_name </td> <td> balance </td> </tr>';
  while($row=mysql_fetch_array($r))
  {
   echo'<tr>';
   
	  echo'<td>'.$row[0].'</td>';
	  echo'<td>'.$row[1].'</td>';
	  echo'<td>'.$row[2].'</td>';

   echo'</tr>';
	  
  }
  echo'</table>';
  
  }
  
mysql_close($con);


    
 // echo "<BR/>the sum of " .$a. "and" .$b. "is" .$c;
?>
