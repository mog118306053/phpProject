<html>
    <head>
        <script language="javascript" type="text/javascript">
          function packageTotal() {
                //Prices here
            var x = 5;
            var y = 10;
            var p = x = y * 12;
            var b = y * 12;
               
            if (document.getElementById('basicProgram').checked){
                //Basic package is checked
                 document.calculator.total.value =b;
                   
            } else if (document.getElementById('proProgram').checked){
                 //Pro Package is checked
                 document.calculator.total.value = p;                   
           }              
}
</script>
</head>
    
<body>
    <!-- open HTML form . -->
    <form name="calculator">
        
        <!-- user fills out form. -->
        <br />
        <input type="radio" name="programType" id="basicProgram" value="Basic" /> Basic
        <input type="radio" name="programType" id="proProgram" value="Pro" checked /> Pro
        <!-- Result will be displayed. -->
        
        <br />
        Your Total Price is: <input type="text" name="total">
        
        <input type="button" value="Submit" onclick="javascript:packageTotal();">
    </form>
</body>
</html>

