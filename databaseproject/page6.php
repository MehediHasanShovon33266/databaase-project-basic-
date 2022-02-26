
<?php
 //$x=  " What is your name " ;
// $X= " What is your name " ;
 //echo " What is your name " ;
 // echo  " <BR/>What is your name ";
 // echo $x.$X;
  

 $a=$_POST ["x1"];
  
  
// Create connection
 $con=mysql_connect('localhost','root','');
   mysql_select_db('bank'); 
   
  $w="select * from account,depositor where account.account_number='$a' And depositor.account_number='$a' "; // for showing single data from account and dispositor table
  $z="select * from account,depositor where account.account_number=depositor.account_number"; // for showing all data from account and dipositor table
   
if(isset($_POST['x2']))
  {
  $r=mysql_query($w);
   echo'<table border=1>';
    echo'<tr> <td> account_number </td> <td> branch_name </td> <td> balance </td> <td> customer_name </td> <tr/> ';
	
  
  while($row=mysql_fetch_array($r))
  {
   echo'<tr>';
   
	  echo'<td>'.$row[0].'</td>';
	  echo'<td>'.$row[1].'</td>';
	  echo'<td>'.$row[2].'</td>';
	  echo'<td>'.$row[3].'</td>';
	 // echo'<td>'.$row[4].'</td>';

	 // echo'<td>'.$row[2].'</td>';

   echo'</tr>';
	  
  }
  echo'</table>';
  }
     
  
 if(isset($_POST['x3']))
  {
  $r=mysql_query($z);
  echo'<table border=1>';
   echo'<tr> <td> account_number </td> <td> branch_name </td> <td> balance </td> <td> customer_name </td> </tr> ';
  
    
  while($row=mysql_fetch_array($r))
  {
   echo'<tr>';
   
	  echo'<td>'.$row[0].'</td>';
	  echo'<td>'.$row[1].'</td>';
	  echo'<td>'.$row[2].'</td>';
	  echo'<td>'.$row[3].'</td>';
	 // echo'<td>'.$row[4].'</td>';

	 // echo'<td>'.$row[2].'</td>';

   echo'</tr>';
	  
  }
  echo'</table>';
  }
  
mysql_close($con);


    
 // echo "<BR/>the sum of " .$a. "and" .$b. "is" .$c;
?>
