
<?php
session_start();
$fullNameValue = "" ;
$totalValue2="" ;
/*
 * Create a variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal']= $totalValue2 ;
/**
 * Allocate the mobile number to a text
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title> eBusiness 2 </title>
    <link rel="stylesheet" type="text/css" href="css/eBusinessCss.css"/>
</head>
<body>
    <div class ="form">
        <form name ="Details" method ="post" action= "eBusiness3.php">
            <center>
                <table cellspacing ="10">
                    <tr>
                        <td><b></b></td>
                        <td><b> Enter in your details below</b></td>
                    </tr>
       
                    <tr>
                         <td> Name </td>
                         <td><input type="text" id="txtName" name="txtName" value="" Required /> </td>
                    </tr>
       
                     <tr>
                         <td> Phone Number </td>
                         <td><input type="number" id="txtNum" name="txtNum" value="" Required /> </td>
                    </tr>
       
                    <tr>
                         <td> Password </td>
                         <td><input type="password" id="txtPassword" name="txtPassword" value="" pattern="[1234]{4}" Required/> </td>
                         <!-- Password = 1234 -->
                    </tr>
       
                    <tr>
                         <td><input type="Hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>" /> </td>
                    </tr>
       
                </table>
         </center>
       
       
            <center>  
        <input type="submit" name ="btnContinue" id="btnContinue" onclick="" value="Continue" />
       
            </center>
    </div>
</form>
    </body>
    </html>
