<html>

<head>
<style>
 body {background-color: powderblue;}
 input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #FF7F50;
}


</style>
</head>

<body>

<form action="page2.php" method="post" >
  <table align="center">
  <p>  
  </p>
  <br/>
   <tr>
        <td> Enter Account number </td> <td><input name="x1" type="text"> </td>
   </tr>
   <tr> 
       <td>Enter Branch name </td> <td><input name="x2" type="text"> <td/>
   </tr>
      <tr> 
	       <td>Enter balance  </td> <td><input name="x3" type="text"> <td/>
	  </tr>
           <tr>
		       <td> <input name="x4" type="submit" value="Insert"> 
			        <input name="x5" type="submit" value="Delete"> 
				    <input name="x6" type="submit" value="Display"> </td>
			</tr>
   
   
   </table>
     
</form>
 <a href="home.php"> Back To Home </a>
</body>

</html>