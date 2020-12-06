<?php 
   include "dbcontroller.php";
include("payment_view11.php");

?>
 <head>
    
<style>
 th{
			height: 40px;
			background-color: brown;
			color: white;
            text-align: center;
		}
        td{
            text-align: center;
            height: 60px;
        }
        INPUT[TYPE=SUBMIT],INPUT[TYPE=RESET]
{
	background-color:#CCFF66;
	COLOR:BLACK;
	HEIGHT:35pX;
	WIDTH:100PX;
    border-radius:8px;
}
    
    </style>
 </head>
	<!--user--->
	

<link rel="stylesheet" href="file:///F|/css/print.css" type="text/css">
<script>
    function fun()
    { 
       var a=document.getElementById('a');
       a.style.visibility='hidden';
       window.print();
      
           }
    </script>
		<?php
		if(isset($_POST['search']))
{
    $txtStartDate=$_POST['txtStartDate'];
    $txtEndDate=$_POST['txtEndDate'];
	//echo $txtStartDate;
	
    $query="select * from booking where checkin between'$txtStartDate'and'$txtEndDate' and status='0' order by checkin";
    $tbl=mysqli_query($con,$query);
    
if($tbl==null){
   echo "<div style='position:relative;top:150px;color:blue;left:620px;'>NO STUDENTS JOINED BETWEEN THESE DATES...</div>";
}
	else{
        ?>
	
<!--
<img src="123.png" height="150" width="200" style="position:relative;top:20px;left:200px;">
<div style="position:relative;top:-90px;left:450px;"><b>MAGIC MIRROR<br>
							Kakkanad,Ernakulam<br>
							682016<br>
							Telephone : +91 9020996500<br>
							Email : <a class="mail" href="mailto:mail@example.com">magicmirror@gmail.com</a></b></div>
		<h1 style="position:relative;left:580px;top:-40px;color:blue"><u>MAGIC MIRROR</u></h1>
-->
		<br>
		<br>
		<br>

<div style="position:relative;left:350px;top:-60px">
		<label>
			<font color="green">Date From : </font>
		</label>   <?php echo $txtStartDate;?>
		<br><br>
		<label>
			<font color="green">Date To:</font>
		</label>   <?php echo $txtEndDate;?>
</div>
<br>
<u><h2 style="position:relative;left:550px;top:-50px;">PAYMENT REPORT</h2>	</u>

<table class="table table-striped" style="position:relative;left:300px;top:50px;width:75%">
					<thead>
						<tr>
						<th style="font-size:15px;"><b>NAME</b></th>
                        
						<th style="font-size:15px;"><b>CHECKIN</b></th>
                            <th style="font-size:15px;"><b>CHECKOUT</b></th>
                            <th style="font-size:15px;"><b>PAYMENT</b></th>
						<th></th>
						
                        </tr>

						</thead>
					<tbody>
						<?php
        $sum=0;
						while($fetch=mysqli_fetch_array($tbl))
						{
                                 $sum=$sum+$fetch['payment1'];
                            
							?>
						<tr>
							
							<td style="font-size:15px;"><?php echo $fetch['f_name']?></td>
                            
							
							<td style="font-size:15px;"><?php echo $fetch['checkin']?></td>
                            <td style="font-size:15px;"><?php echo $fetch['checkout']?></td>
							<td style="font-size:15px;"><?php echo $fetch['payment1']?></td>
							
							</tr>
							
					
								<?php
                        }
    
mysqli_close($con);
						?>
					</tbody>
    <td></td><td style="font-size:15px;" align="center"><a target="_blank" href="Codementor html to pdf/index.php">Booking Detals &nbsp;&nbsp;<i class="fa fa-download"></i></a>
                                  
                                    </td><td></td><td> <p> Total amount=        <?php   echo $sum;?></p></td>
				</table>

                                  
                                    
					

<!--
				<table border="1" style="position:relative;width:1200px;left:50px;top:-40px;">
					<thead>
						<tr>
-->
<!--
								<th> </th>
							
							<th> </th>
                            <th></th>
-->
                            
							
							
							
<!--
						</tr>
					</thead>
-->

					<?php
					
//					for($i=0;$i<count($tbl);$i++)
					{
//						for($j=0;$j<count($tbl[$i]);$j++)
						{
						}
					?>
<!--					<tbody><tr>-->
<!--
						<td><?php echo $tbl[$i][1];?></td>
						
						<td><?php echo $tbl[$i][3];?></td>
						
						<td><?php echo $tbl[$i][2];?></td>
						<td><?php echo $tbl[$i][4];?>
						
						</td>
				
                        <td><?php echo $tbl[$i][7];?></td>
-->
<!--						</tr>-->
					<?php 
					}
	

					?>
										
<div style="position:relative;left:950px;top:400px">
	<label>Signature</label>
</div>
<div style="position:relative;left:600px;top:450px">
<input type="submit" name="sub" id="a" value="Print" onclick="fun();" size="500"/>
</div>
						<?php
}
}
					     ?>

<!--					</tbody>-->
				
<!--				</table>-->