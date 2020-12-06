<?php 
 include "dbcontroller.php";
include("payment_view11.php");

?>
 <head>
<style>
 table{
                   border-radius: 1em;
                   width: 80%;
	               height: 150px;
                   margin-left:0px;
                   
               }
               th {
   background-color: black;
    color:antiquewhite;
    height: 40px;
}
    input,select{
		border: 2px solod red;
		border-radius: 5px;
		width:150px;
    }

body
    {
        background-image:url(ad7.jpg);
        height: 800px;
    }
    </style>
 </head>
	<!--user--->

	<br><br><br><br><br><br><br><br>
    <body>
        
    <div style="position:relative;left:520px;top:0px;border:groove;width:500px;height:150px;" >
        <h2>Search Here</h2>
    <form method="post" action="print_cust1.php">
		<table style="position:relative;top:20px;left:40px;height:100px;width:400px;">
            
        <tr><td><font color="red">FROM:</font> </td>
		<td><input type="date" name="txtStartDate"></td>
		</tr>
			<tr><td> <font color="red">TO:</font></td>
		<td> <input type="date" name="txtEndDate"></td>
		</tr>
      <tr>
		<td><input type="submit" name="search" value="search"></td>
		</tr>
       </table>
		</form>
		</div> 
		