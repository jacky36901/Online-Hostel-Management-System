<?php
session_start();
if(!isset($_SESSION['sess']))
{
header("location:../index.php");
}
include "dbcontroller.php";

//$re="select * from registration where f_name='$a'";
//$re4=mysqli_query($con,$re);


$re1="select * from booking";
$re41=mysqli_query($con,$re1);



?>
<!doctype>

<html>
<head>
    <title>jsPDF</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<style>
        button
        {
             border-radius: 5px;
            width=10px;
            color:white;
            background-color:dodgerblue;
        }
		@CHARSET "UTF-8";
		.page-break {
			page-break-after: always;
			page-break-inside: avoid;
			clear:both;
		}
		.page-break-before {
			page-break-before: always;
			page-break-inside: avoid;
			clear:both;
		}
	</style>
 </head>
<body>
	
<div id="html-2-pdfwrapper" style='position: absolute; left: 20px; top: 50px; bottom: 0; overflow: auto; width: 600px'>

<!--
		<h1>Html2Pdf</h1>
		<p>
			This demo uses Html2Canvas.js to render HTML. <br />Instead of using an HTML canvas however, a canvas wrapper using jsPDF is substituted. The <em>context2d</em> provided by the wrapper calls native PDF rendering methods.
		</p>
		<p>A PDF of this page will be inserted into the right margin.</p>

		<h2>Colors</h2>
		<p>
			<span style='color: red'>red</span> <span style='color: rgb(0, 255, 0)'>rgb(0,255,0)</span> <span style='color: rgba(0, 0, 0, .5)'>rgba(0,0,0,.5)</span> <span style='color: #0000FF'>#0000FF</span> <span style='color: #0FF'>#0FF</span>
		</p>
-->
<center><h2><u>Booking Info</u></h2></center>
    <?php 
    $sum=0;
    while($row1=mysqli_fetch_array($re41))
     
{ 
    $sum=$sum+$row1['payment1'];
                                    $a=$row1['room'];
                                    $b=$row1['category'];
                    $sql1="SELECT * FROM rooms where room_id='$a'";
                    $result1=mysqli_query($con,$sql1);
                    $tt3=mysqli_fetch_array($result1);
                    $room=$tt3['room'];
                                $sql2="SELECT * FROM category where cat_id='$b'";
                                $result2=mysqli_query($con,$sql2);
                                $tt4=mysqli_fetch_array($result2);
                                $category=$tt4['category'];
    ?>
    <div style='text-align: left;color:red;'><br>
    Booking ID : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $row1['book_id']?>&nbsp;
    </div>
    
    <div style='text-align: left'><br>
       
    Name : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $row1['f_name']?>&nbsp;
    </div>
    <div style='text-align: left'><br>
       
    Room : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $tt3['room']?>&nbsp;
    </div>
    <div style='text-align: left'><br>
       
    Category : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $tt4['category']?>&nbsp;
    </div>
    <div style='text-align: left'><br>
       
    Check-In: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $row1['checkin']?>&nbsp;
    </div>
     <div style='text-align: left'><br>
       
    Check-Out : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $row1['checkout']?>&nbsp;
    </div>
     <div style='text-align: left'><br>
       
    Payment : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $row1['payment1']?>&nbsp;
    </div>
    <br>
    <div style='text-align: left'><br>
       
   ------------------------------------------------------------------------------------------------------------- &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
    </div>
    
    <?php
}
    ?>  

<br>
    <p> Total amount=        <?php   echo $sum;?><br><br>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <button onclick="generate()">Print</button>
		
		
		<!--<h1 style='page-break-before: always; margin-top:100px;'>Page Two</h1>
		<p>
			This demo uses Html2Canvas.js to render HTML. <br />Instead of using an HTML canvas however, a canvas wrapper using jsPDF is substituted. The <em>context2d</em> provided by the wrapper calls native PDF rendering methods.
		</p>

		<p>A PDF of this page will be inserted into the right margin.</p>

		<h2>Colors</h2>
		<p>
			<span style='color: red'>red</span> <span style='color: rgb(0, 255, 0)'>rgb(0,255,0)</span> <span style='color: rgba(0, 0, 0, .5)'>rgba(0,0,0,.5)</span> <span style='color: #0000FF'>#0000FF</span> <span style='color: #0FF'>#0FF</span>
		</p>
		
		<h1 style='page-break-before: always; margin-top:100px;'>Yet Another Page</h1>
		<h2>Text Alignment</h2>
		<div style='text-align: left'>left</div>
		<div style='text-align: center'>center</div>
		<div style='text-align: right'>right</div>
		<h2>Look here</h2>
		<p>
			This demo uses Html2Canvas.js to render HTML. <br />Instead of using an HTML canvas however, a canvas wrapper using jsPDF is substituted. The <em>context2d</em> provided by the wrapper calls native PDF rendering methods.
			This demo uses Html2Canvas.js to render HTML. Instead of using an HTML canvas however, a canvas wrapper using jsPDF is substituted. The <em>context2d</em> provided by the wrapper calls native PDF rendering methods.
		</p>
		<p>A PDF of this page will be inserted into the right margin.</p>

		<h2>Colors</h2>
		<p>
			<span style='color: red'>red</span> <span style='color: rgb(0, 255, 0)'>rgb(0,255,0)</span> <span style='color: rgba(0, 0, 0, .5)'>rgba(0,0,0,.5)</span> <span style='color: #0000FF'>#0000FF</span> <span style='color: #0FF'>#0FF</span>
		</p>

		<h2>Text Alignment</h2>
		<div style='text-align: left'>left</div>
		<div style='text-align: center'>center</div>
		<div style='text-align: right'>right</div>
		<p>
			This demo uses Html2Canvas.js to render HTML. <br />Instead of using an HTML canvas however, a canvas wrapper using jsPDF is substituted. The <em>context2d</em> provided by the wrapper calls native PDF rendering methods.
		</p>
		<p>A PDF of this page will be inserted into the right margin.</p>

		<h2>Colors</h2>
		<p>
			<span style='color: red'>red</span> <span style='color: rgb(0, 255, 0)'>rgb(0,255,0)</span> <span style='color: rgba(0, 0, 0, .5)'>rgba(0,0,0,.5)</span> <span style='color: #0000FF'>#0000FF</span> <span style='color: #0FF'>#0FF</span>
		</p>

		<h2>Text Alignment</h2>
		<div style='text-align: left'>left</div>
		<div style='text-align: center'>center</div>
		<div style='text-align: right'>right</div>-->
		
		
</div>

<script src='dist/jspdf.min.js'></script>

<script>
var base64Img = null;
imgToBase64('octocat.jpg', function(base64) {
    base64Img = base64; 
});

margins = {
  top: 70,
  bottom: 40,
  left: 30,
  width: 550
};

generate = function()
{
	var pdf = new jsPDF('p', 'pt', 'a4');
	pdf.setFontSize(18);
	pdf.fromHTML(document.getElementById('html-2-pdfwrapper'), 
		margins.left, // x coord
		margins.top,
		{
			// y coord
			width: margins.width// max width of content on PDF
		},function(dispose) {
			headerFooterFormatting(pdf, pdf.internal.getNumberOfPages());
		}, 
		margins);
		
	var iframe = document.createElement('iframe');
	iframe.setAttribute('style','position:absolute;right:0; top:0; bottom:0; height:100%; width:650px; padding:20px;');
	document.body.appendChild(iframe);
	
	iframe.src = pdf.output('datauristring');
};
function headerFooterFormatting(doc, totalPages)
{
    for(var i = totalPages; i >= 1; i--)
    {
        doc.setPage(i);                            
        //header
        header(doc);
        
        footer(doc, i, totalPages);
        doc.page++;
    }
};

function header(doc)
{
    doc.setFontSize(30);
    doc.setTextColor(40);
    doc.setFontStyle('normal');
	
    if (base64Img) {
       doc.addImage(base64Img, 'PNG', margins.left, 10, 100,40);        
    }
	    
    doc.text("Booking Details", margins.left + 200, 40 );
	doc.setLineCap(2);
	doc.line(3, 70, margins.width + 43,70); // horizontal line
};

// You could either use a function similar to this or pre convert an image with for example http://dopiaza.org/tools/datauri
// http://stackoverflow.com/questions/6150289/how-to-convert-image-into-base64-string-using-javascript
function imgToBase64(url, callback, imgVariable) {
 
    if (!window.FileReader) {
        callback(null);
        return;
    }
    var xhr = new XMLHttpRequest();
    xhr.responseType = 'blob';
    xhr.onload = function() {
        var reader = new FileReader();
        reader.onloadend = function() {
			imgVariable = reader.result.replace('text/xml', 'image/jpeg');
            callback(imgVariable);
        };
        reader.readAsDataURL(xhr.response);
    };
    xhr.open('GET', url);
    xhr.send();
};

function footer(doc, pageNumber, totalPages){

    var str = "Page " + pageNumber + " of " + totalPages
   
    doc.setFontSize(10);
    doc.text(str, margins.left, doc.internal.pageSize.height - 20);
    
};

 </script>
</body>
</html>
