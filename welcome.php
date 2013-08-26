<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IHT Result 2014</title>
<script src="./lib/jquery-1.4.4.min.js" type="text/javascript" charset="utf-8"></script>
<script src="./src/jquery.maskedinput.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
        $.mask.definitions['~'] = "[+-]";
        $("#roll").mask("999999",{completed:function(){alert("completed!");}});
        $("#phone").mask("(999) 999-9999");
        $("#phoneExt").mask("(999) 999-9999? x99999");
        $("#iphone").mask("+33 999 999 999");
        $("#tin").mask("99-9999999");
        $("#ssn").mask("999-99-9999");
        $("#product").mask("a*-999-a999", { placeholder: " " });
        $("#eyescript").mask("~9.99 ~9.99 999");
        $("#po").mask("PO: aaa-999-***");
		$("#pct").mask("99%");

        $("input").blur(function() {
            $("#info").html("Unmasked value: " + $(this).mask());
        }).dblclick(function() {
            $(this).unmask();
        });
    });
	
</script>
<style type="text/css">
body {
	background:#036;
	font:100% Helvetica, Arial, sans-serif;
	padding-top:10px;
	background-color: #CDF0C1;
}

h1 { color:#fff; }

#container { margin:0 auto; width:600px; }

#search_box { 
	background:-moz-linear-gradient(top, #ffd73a, #ffa500); 
	background:-webkit-gradient(linear, 0 0, 0 100%, from(#ffd73a), to(#ffa500)); 
	border:1px solid #d28703; 
	border-radius:5px; 
	-moz-border-radius:5px;
	-webkit-border-radius:5px; 
	-moz-box-shadow:inset 0 1px #ffff90, inset 0 -2px 5px #ffd05d, 0 0 0 4px rgba(255,255,255,0.65);
	-webkit-box-shadow:inset 0 1px #ffff90, inset 0 -2px 5px #ffd05d, 0 0 0 4px rgba(255,255,255,0.65);
	padding:9px;
	width:570px;
}

#search_box .wrapper { 
	background:#fff; 
	border:1px solid #d28703;
	-moz-border-radius:2px;
	-webkit-border-radius:2px;
	-moz-box-shadow:inset 0 1px 2px rgba(0,0,0,.3), 0 1px #ff0; 
	-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,.3), 0 1px #ff0; 
	height:50px;
	padding-left:10px; 
	position:relative;
}

#search_box input,
#search_box input:focus { border:none; color:#333; outline:none; font:bold 24px Helvetica, Arial, sans-serif; margin:12px 0; width:510px; }
#search_box button {
	/*background:-moz-linear-gradient(top, #453e26, #000);
	background:-webkit-gradient(linear, 0 0, 0 100%, from(#453e26), to(#000));*/
	background:#060;
	border:1px solid #000;
	-moz-border-radius:2px;
	-webkit-border-radius:2px;
	-moz-box-shadow:inset 0 -2px 3px #193544, inset 0 1px #907817, 0 1px 1px rgba(0,0,0,4);
	-webkit-box-shadow:inset 0 -2px 3px #193544, inset 0 1px #907817, 0 1px 1px rgba(0,0,0,.4);
	cursor:pointer;
	height:45px;
	position:absolute;
	right:2px; 
	top:2px;
	width:85px;
	text-align:center;
	color:#FFF;
	padding:3px;
	font-size:18px;
}

h1 { margin-bottom:0; }
.read_article { color:#fff; display:block; font-size:12px; margin-bottom:30px; }
.printbtn{
	background:-moz-linear-gradient(top, #ffd73a, #ffa500); 
	background:-webkit-gradient(linear, 0 0, 0 100%, from(#ffd73a), to(#ffa500)); 
	position:fixed;
	top:50px;
	right:50px;
	font-size:17px;
	color:#000;
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
	padding:8px;
	cursor:pointer;
	width:150px;
	height:50px;
}
.error{
	background-color:#F00;
	color:#FFF;
	padding:5px;
	text-align:center;
	font-size:16px;
}
</style>
<style media="print" type="text/css">
#search_box {
	display:none;
}
.printbtn{
	display:none;
}
.error{
	display:none;
}
</style>
<style type="text/css" media="all">
.cssguycomments {background:#eee;border:#ddd;padding:8px;margin-bottom:40px;}
.cssguycomments p {font:normal 14px/18px verdana;}

table	{border-collapse:collapse;}
thead th {
	font:bold 13px/18px georgia;
	text-align:left;
	background:#006600;
	color:#333;
	padding:8px 16px 8px 8px;
	border-right:1px solid #fff;
	border-bottom:1px solid #fff;
}
thead th.null {
	background:#FC3;
	text-align: center;
	color:#000;
	border-bottom:1px solid #f3f0e4;
	border-right:1px solid #fff;
	font-size: 18px;
}
tbody th {
	font:bold 12px/16px Georgia, "Times New Roman", Times, serif;
	text-align:left;
	background:#EFF480;
	color:#000;
	padding:8px;
	border-bottom:1px solid #f3f0e4;
	border-right:1px solid #fff;
}
tbody td {
	font:bold 12px/16px Georgia, "Times New Roman", Times, serif;
	color:#333;
	padding:8px;
	border-right:1px solid #f3f0e4;
	border-bottom:1px solid #f3f0e4;
	background:#F3F59E;
}

tbody td.on {background:#f3f0e4;}
thead th.on {background:#f3f0e4;}
tbody th.on {background:#f3f0e4;}
</style>


<script type="text/javascript">
/*
	For functions getElementsByClassName, addClassName, and removeClassName
	Copyright Robert Nyman, http://www.robertnyman.com
	Free to use if this text is included
*/
function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function() {
      oldonload();
      func();
    }
  }
}

function getElementsByClassName(className, tag, elm){
	var testClass = new RegExp("(^|\\s)" + className + "(\\s|$)");
	var tag = tag || "*";
	var elm = elm || document;
	var elements = (tag == "*" && elm.all)? elm.all : elm.getElementsByTagName(tag);
	var returnElements = [];
	var current;
	var length = elements.length;
	for(var i=0; i<length; i++){
		current = elements[i];
		if(testClass.test(current.className)){
			returnElements.push(current);
		}
	}
	return returnElements;
}

function addClassName(elm, className){
    var currentClass = elm.className;
    if(!new RegExp(("(^|\\s)" + className + "(\\s|$)"), "i").test(currentClass)){
        elm.className = currentClass + ((currentClass.length > 0)? " " : "") + className;
    }
    return elm.className;
}

function removeClassName(elm, className){
    var classToRemove = new RegExp(("(^|\\s)" + className + "(\\s|$)"), "i");
    elm.className = elm.className.replace(classToRemove, "").replace(/^\s+|\s+$/g, "");
    return elm.className;
}

function makeTheTableHeadsHighlight() {
	// get all the td's in the heart of the table...
	var table = document.getElementById('rockartists');
	var tbody = table.getElementsByTagName('tbody');
	var tbodytds = table.getElementsByTagName('td');
	
	// and loop through them...
	for (var i=0; i<tbodytds.length; i++) {
	
	// take note of their default class name
		tbodytds[i].oldClassName = tbodytds[i].className;
		
	// when someone moves their mouse over one of those cells...
		tbodytds[i].onmouseover = function() {
	
	// attach 'on' to the pointed cell
			addClassName(this,'on');
			
	// attach 'on' to the th in the thead with the same class name
			var topheading = getElementsByClassName(this.oldClassName,'th',table);
			addClassName(topheading[0],'on');
			
	// attach 'on' to the far left th in the same row as this cell
			var row = this.parentNode;
			var rowheading = row.getElementsByTagName('th')[0];
			addClassName(rowheading,'on');
		}
	
	// ok, now when someone moves their mouse away, undo everything we just did.
	
		tbodytds[i].onmouseout = function() {
	
	// remove 'on' from this cell
			removeClassName(this,'on');
			
	// remove 'on' from the th in the thead
			var topheading = getElementsByClassName(this.oldClassName,'th',table);
			removeClassName(topheading[0],'on');

	// remove 'on' to the far left th in the same row as this cell
			var row = this.parentNode;
			var rowheading = row.getElementsByTagName('th')[0];
			removeClassName(rowheading,'on');
		}
	}
}
addLoadEvent(makeTheTableHeadsHighlight);
</script>
</head>

<body>

	<div id="container">

	  <h1><img src="iht_banner.png" alt="www.dghs.gov.bd" width="400px" height="91px" border="0"></h1>
      <hr>
      <div style="background-color:#FC0; color:#FFF; padding:5px; text-align:center; font-size:18px;">IHT Result 2013-2014</div><br>

      <?php
      if(isset($_POST['Result']))
	 {
		 $roll_n=$_POST['roll'];
		 //$d_type=gettype('$roll_n');
		 
		 if(($_POST['roll']=="______") || ($_POST['roll']==""))
		 { 
		 ?>
		 <div style="background-color:#F00; color:#FFF; padding:5px; text-align:center; font-size:16px;">Please enter your roll number.</div><br>
	  <?php
		 }
		 else
		 {
		include("auth.ck.php");
		$roll_ck=mysql_query("Select * from iht_result_2013 where roll_number_licts='$roll_n'");
		$roll_ck_row_num=mysql_num_rows($roll_ck);
		$roll_ck_row=mysql_fetch_assoc($roll_ck);
		if($roll_ck_row_num==0)
		{
	?>
    <div style="background-color:#F00; color:#FFF; padding:5px; text-align:center; font-size:20px;">This roll number is invalid.</div><br>
	<?php
	}
	if($roll_ck_row_num>1)
	       {
	?>
    <div style="background-color:#FC0; color:#FFF; padding:5px; text-align:center; font-size:20px;">System have a problem, Please contact with system <a href="hassan@mis.dghs.gov.bd">Admin.</a></div><br>
	<?php
	}
		 }
	 }
	?>
	  <form action="#" id="search_box" method="post">
	  <div class="wrapper">
	    <input type="text" id="roll" name="roll" placeholder="Write your roll number here......" />
				<button type="submit" class="search_btn" name="Result">Result</button>
		</div>
	  </form>
</div>
<?php 
if(isset($_POST['Result']) && ($roll_ck_row_num==1))
{
?>
<input type="button" class="printbtn" onclick="window.print()" value="Print your result"/>
<br>
<table width="600" align="center" id="rockartists">
	<thead>
		<tr>
			<th colspan="2" class="null">Your Result is Below</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th width="153">Roll No. </th>
			<td width="435" class="stones"><?php echo $roll_ck_row['roll_number_licts'];?></td>
		</tr>
		<tr>
			<th>Student Name </th>
			<td class="stones"><?php echo $roll_ck_row['student_name_licts'];?></td>
		</tr>
		<tr>
			<th>Test Score </th>
			<td class="stones"><?php echo $roll_ck_row['test_score_licts'];?></td>
		</tr>
		<tr>
			<th>Merit Score </th>
			<td class="stones"><?php echo $roll_ck_row['merit_score_licts'];?></td>
		</tr>
		<tr>
			<th>Merit Position </th>
			<td class="stones"><?php echo $roll_ck_row['merit_position_licts'];?></td>
		</tr>
            <!-- this is a comment -->
		
  <tr>
			<th>Alloted Institute </th>
			<td class="stones"><?php echo $roll_ck_row['iht_subject_licts'];?></td>
		</tr>
 <!--
            <tr>
			<th>Selected Subject </th>
			<td class="stones"><?php echo $roll_ck_row['select_subject_licts'];?></td>
		</tr>
  -->
        
		<tr>
			<th>Status </th>
			<td class="stones">
			<?php
			if($roll_ck_row['status_licts']=="")
			{ echo "Wait for MATS list."; }
			else
			{ echo $roll_ck_row['status_licts']; }
			?></td>
		</tr>
	</tbody>
</table>
<?php
}
//mysql_close($dbh);
?>
<div style="color:#006600; font-size:14px; text-align:center; height:30px; padding-top:100px;">Developed by <a href="http://liongang.com" target="_blank">Lion ICT Solutions</a></div>
</body>
</html>