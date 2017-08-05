<?php
session_start();
include("hover.php")
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="vote.js"></script>
<style>

.cls{
	width: 645px;
	height: 573px;
	margin-top: 60px;
	background: url(im/img/ballot.png);
	margin-left: 375px;
	position: absolute;
	font-size: 18px;
	font-family: Georgia, "Times New Roman", Times, serif
	font-style:italic;
	left: 0px;
	}
	.dls
	{
	font-size: 20px;
	font-family: Georgia, "Times New Roman", Times, serif
	font-style:italic;
	margin-left: 20px;
	width: 250px;
	color: #fff;
	position: absolute;
	height: 423px;
	margin-top: 40px;
	left: 86px;
	top: 21px;
		}
		.kls{
	margin-left: 170px;
	width: 250px;
	position: absolute;
	height: 500px;
	margin-top: 40px;
	left: 35px;
	top: -48px;
	font-size: 20px;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-style: italic;
			}
			.main
			{
	position: absolute;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-style: italic;
	text-align: center;
	left: 161px;
	color: #FF3;
	-webkit-text-stroke: 1px black;
	top: -5px;
				}
				.sub{
	position: absolute;
	border: 5px 5px 5px 5px;
	width: 52px;
	height: 25px;
	left: 257px;
	top: 540px;
					}
		
</style>
</head>

<body>
<div class="cls">
<div class="main">
<h1>Registration Form</h1>
</div>
<form method="post" name='registration' onsubmit="return validateform();">
<div class="dls">
<p><b>First Name</b></p>
<p><b>Surname</b></p>
<p><b>Birthday</b></p>
<p><b>Gender</b></p>
<p><b>Address</b></p>
<p><b>Country</b></p>
<p><b>State</b></p>
<p><b>City</b></p>
<p><b>Mobile Number</b></p>
<p><b>ID Number</b></p>
<p><b>ID Type</b></p>
<div class="kls">
  <p>:<input type="text" name="firstname" placeholder="first name" required="required" style="width:200px; height:15px" />
  </p> 
  <p>:<input type="text" name="lastname" placeholder="surname" required="required" style="width:200px; height:15px" /></p> 
 <p>:<select name="Day" name="Day" style=" height:20px"></p>
  <p>:<option value="Day" >Day</option>
  <?php
for ($i=1;$i<=31;$i++)
{
?>
  <option value="<?php echo $i; ?>"/><?php echo $i; ?>
  <?php
}
?>
  </select>
  <select name="Month" name="Month" style=" height:20px">
  <option value="Month">Month</option>
  <option value="Jan">Jan</option>
  <option value="Feb">Feb</option>
  <option value="Mar">Mar</option>
  <option value="Apr">Apr</option>
  <option value="May">May</option>
  <option value="Jun">Jun</option>
  <option value="Jul">Jul</option>
  <option value="Aug">Aug</option>
  <option value="Sep">Sep</option>
  <option value="Oct">Oct</option>
  <option value="Nov">Nov</option>
  <option value="Dec">Dec</option>
  
  </select>
  <select name="Year"  name="Year" style=" height:20px"  >
  <option value="Year">Year</option>
  <?php
for($i=1930;$i<=2017;$i++)
{
	?>
  <option value="<?php echo $i; ?>"/><?php echo $i; ?>
  <?php
}
?>
  </select></p>

<p>:<input type="radio" value="female" style="height:10px"  name="gender" />Female &nbsp; &nbsp;<input type="radio"  value="male" name="gender"  style="height:15px; font-size:12px" />Male</p>
<p>:<input type="text" placeholder="address" name="address" required="required" style="width:200px; height:15px"  /></p>
<p>:<select name="country" class="countries" id="countryId" style="width:200px; height:20px">
<option value="Select Country">Select Country</option>
</select></p>
<p>:<select name="state" class="states" id="stateId" style="width:200px; height:20px">
<option value="Select State">Select State</option>
</select></p>
<p>:<select name="city" class="cities" id="cityId" style="width:200px; height:20px">
<option value="Select City">Select City</option>
</select></p>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://iamrohit.in/lab/js/location.js"></script>
<p>:<select name="pin" style=" height:20px">
<option value="+91">+91</option>
</select>
<input type="text" name="numbers" placeholder="mobile number"  required="required" style="width:150px; height:15x"/></p>
<p>:<input type="text" placeholder="id number"  required="required" name="id"  style="width:200px; height:15px" />
</p>
<p>:<select name="idtype" style="width:200px; height:20px">
    <option value="idtype" name="idtype">Id type</option>
    </p>
    <?php
$idtype=array("Pan Card Number","Driving License Number","Adhar Card Number","Voter Id Card Number");
for($i=0;$i<4;$i++)
{
	?>
    <option value="<?php echo $idtype[$i];?>"/>    
    <?php echo $idtype[$i];?>
    <?php
}
?>
  </select>
  <br />
</p>
</div>
</div>
<div class="sub"><b><input type="submit" value="Submit" name="submit" style="background: #4A9BF4; color:#FFF; text-align:center; width:100px; height:30px"/></b></div>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{

	$firstname=$_POST["firstname"];
	$lastname=$_POST["lastname"];
	$day=$_POST["Day"];
	$month=$_POST["Month"];
	$year=$_POST["Year"];
	$dob=$day.$month.$year;
	$gender=$_POST["gender"];
	$address=$_POST["address"];
	$countryId=$_POST["country"];
	$stateId=$_POST["state"];
	$cityId=$_POST["city"];
	$number=$_POST["numbers"];
	$idnumber=$_POST["id"];
    $idtype=$_POST["idtype"];
	

mysql_connect("localhost","root","")or die("invalid");;
mysql_select_db("voting")or die("database is not present");
$ds=mysql_query("select * from votes");
$ds1=mysql_num_rows($ds);
$bool=true;

while($row=mysql_fetch_array($ds))
{
	$id1=$row["idnumber"];
	if($id1==$idnumber)
	{
		
		echo"<script>alert('details already exsists')</script>";
		$bool=false;
		header("location:voting.php");
		}
	}
	if($bool)
	{
		mysql_query("insert into votes values('$firstname','$lastname','$dob','$gender','$address','$stateId','$countryId','$number','$idtype','$idnumber','$cityId')") or die("inavalid entry");
		
		}

}
?>
</form>

</body>
</html>