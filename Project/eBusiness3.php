<!DOCTYPE html>
<html>
    <head>
        <title> eBusiness3 </title>
        <link rel="stylesheet" type="text/css" href="css/eBusinessCss.css"/>
        <style>
              .button { background-color: white;
                              border: none;
                              padding: 15px 32px;
                              text-align: center;
                              color: black;
                              text-decoration: none;
                              display: inline-block;
                              font-size: 16px;
                              margin: 4px 2px;
                              cursor: pointer;                     
                    }
        </style>
    </head>
    <body>
        <div class="ebus3"
    <!-- //Starting the session to get the variable from last page-->
    <center>
 <?php
 
 session_start () ;
 $totalValue2 = $_POST ['txtTotal'];
 $fullNameValue= $_POST ['txtName'];
 echo "The name is : ".$fullNameValue.".";
 echo "<br></br>";
 echo "The total value is : ".$totalValue2."$";
 ?>
        <br></br>
        <a href="IndexMenu.html" class="button"> Return to Menu</a>
    </center>
        </div>
    </body>
</html>
