<!DOCTYPE html>
<html>
<head>
<script>
function validateForm() {
    var x = document.forms["myForm"]["name"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
}
 var x = document.forms["myForm"]["ssn"].value;
    if (x == "") {
        alert("Ssn must be filled out");
        return false;
    }
var x  = document.forms["myForm"]["ssn"].value;
var front = x.substr(0,7);
var back = x.substr(7,4);
if(front== '111-11-'&& 1111<= back<=1130)
return true;
else{alert("Ssn not correct");
        return false;}
}

</script>
</head>
<body>

<table align= "center" border="2" color = "#EEEE">
<tr><td><form align= "center" name ="myForm" action="form3.php" method="post" onsubmit="return validateForm()">
<h4>Welcome To Form 1098T Retrival Page</h4><br><br>
Last Name: <input type="text" name="name"><br><br><br>
SSN (Format XXX-XX-XXXX) : <input type="password"  name="ssn"><br><br>
<input type="submit">
<br>
<br>
</form></td></tr>
</table>

</body>
</html>
