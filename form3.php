<!DOCTYPE html>
<html>
<head>

<?php
$servername = "localhost";
$username = “username”;
$password = “password”;
$dbname = "student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT last_name, first_name,concat('XXX-XX-',substr(ssn,8,4)) AS ssn, address, city, state, zip_code, amt_billed, schlr_grant,fee_paid  FROM student_1098T where ssn = '".$_POST["ssn"]."' AND last_name = '".$_POST["name"]."' ";
$result = $conn->query($sql);
$result_final= ($result->fetch_array());
//if ( $_POST["ssn"]!= $result_final)
//{
//echo "no results found for the student";
//}
?>

<script type="text/javascript">

</script>
	

<style type="text/css">
    tab1 { padding-left: 16em; }
    table          { border-collapse: collapse;}
   .hide_all{
            border-style:hidden;
          }
    .hide_right{
            border-right-style:hidden;
          }
    .hide_top{
            border-top:none ;
          }
     th, td {
           border: 1px solid blue;
          }
</style>
</head>

<body>

<table >
	<caption align="top">Tax Form</caption>
    
   <tr align="left">
	<td rowspan="2" colspan="2" align="top">FILER’S name, street address, city or town, province or state,country, ZIP or 
            foreign postal code, and telephone
            number<br><br>
            COLU  COLLEGE<br>
            <br>
            7777 MERRIFIELD AVENUE<br>
            FAIRFAX, VA <br>
            22031<br>
            <tab1>777-333-2222 </tab1> 
        </td>

        <td  colspan="1">1 Payment received for qualified <br>  tuition and related expenses<br> $
        <?php
           echo " ".  $result_final["fee_paid"]. "<br>";
        ?>
        </td>

        <td rowspan="2">OMB No. 1545-1574<br> <h3>2016

        </h3> Form <b>1098-T</b></td>
        <td class="hide_right" class="hide_top" valign="middle" colspan="2" rowspan="2" ><h4>
            Tuition <br>Statement</h4>
        </td>

   </tr>
    
   <tr align="left">

	<td>2. Amounts billed for qualified <br>tuition and related expenses <br> $ 
        <?php
             echo " ". $result_final["amt_billed"]. "<br>";
        ?>
        </td>
   </tr>
    
   <tr align="left">
	<td align="left">FILER'S federal Identification No.<br>55-1112345</td>
	<td align="left">STUDENT'S social security number
        <?php
             echo "<br>". $result_final["ssn"]. "<br>";
        ?>
        </td>
	<td align="left" colspan="3" >3 If this box is checked, your educational institution has<br>changed its reporting method for 2014

<table border="1" align="right" width= "30px" height= "30px">
               <tr> <td></td></tr></table>
</td>
        <td rowspan ="5"><h4>
           Copy B<br>For Student</h4><br><br><br>This is important tax		
           information and is being		
           furnished to the Internal		
           Revenue Service.		</td>
   </tr>
    
   <tr align="left">
	<td align="left" colspan="2">STUDENT'S name
        <?php
            echo "<br> ". $result_final["first_name"]. " " . $result_final["last_name"] . "<br>";
        ?>
        </td>

	<td align="left">4 Adjustments made for a prior
            year		</td>
	<td align="left"  colspan="2">5 Scholarships or grants<br> $
        <?php
            echo " ".  $result_final["schlr_grant"]. "<br>";
        ?>
	</td>
   </tr>
    
   <tr align="left">
        <td colspan="2">Street address ( including apt. no)	
        <?php
            echo "<br>" . $result_final["address"]. "<br>";
        ?>
	</td>
        <td rowspan="2">6 Adjustments to scholarships or 			
                grants for a prior year			</td>
        <td rowspan="2" colspan="2">7 Checked if the amount in		
            box 1 or 2 includes 		
            amounts for an academic		
            period beginning		
            January-March 2015<br>
           <table border="1" align="right" width= "30px" height= "30px">
               <tr> <td></td></tr></table>
		</td>
   </tr>
    
   <tr align="left">
        <td colspan="2">City or town, state or province, country, and ZIP code or foreign postal code 
	<?php
           echo "<br>". $result_final["city"]." " . $result_final["state"]." " . $result_final["zip_code"]. "<br>";
        ?>
        </td>
   </tr>
    
   <tr align="left">
        <td>Service Provider/Acct. No. (see instr.)		</td>
        <td>8 Check if at least	
              half-time student
          <table border="1" align="right" width= "30px" height= "30px">
               <tr> <td></td></tr></table>
	</td>
        <td>9 Check if a graduate	
             student
         <table border="1" align="right" width= "30px" height= "30px">
               <tr> <td></td></tr></table>
	</td>
        <td colspan="2">10 Ins. Contract reimb./refund			</td>

   </tr>

</table>
<?php
$conn->close();
?>
<br>
<br>
<form  align= "center" name ="Form1" onsubmit = "window.print()" method="post" >
<input  value="Print" type="submit">
</body>
</html>

