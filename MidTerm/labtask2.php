<!DOCTYPE html>
<html>
<head>
    <title>Validation</title>
    <style>
        #button{
            color:white;
            background-color:blue;
        }

        </style>
</head>
<body>
<script>
    function data()
    {
    var a=document.getElementById("n1").value
    var b=document.getElementById("n2").value
    var c=document.getElementById("n3").value
    var d=document.getElementById("n4").value
    var e=document.getElementById("n5").value
    var showDiv=document.getElementById("output");
 
    if(a==""||b==""||c==""||d==""||e=="")
    {
        alert("all fields are mendatory");
        return false;
    }
    else if(isNaN(c))
    {
        alert("only numbers are allowed in phone number");
        return false;
    }
    else if(d!=e)
    {
        alert("enter same password");
        return false;
    }
    else{
        true;
    }
    showDiv.innerHTML = `
        <strong>Registration Successful!</strong><br><br>
        Name: ${a}<br>
        Email: ${b}<br>
        Phone Number: ${c}<br>
      `;
      return false;
 
    }
</script>
<h1>Participant Registration</h1>
    <form onsubmit="return data()">
        <table>
        <td>
            <tr>
                Full Name:
 </tr><br>
 <tr>
    <input type="text" id="n1">
 </tr>
 </td><br><br>
 <td>
            <tr>
                Email:
 </tr><br>
 <tr>
    <input type="email" id="n2">
 </tr>
 </td><br><br>
 <td>
            <tr>
                Phone Number:
 </tr><br>
 <tr>
    <input type="text" id="n3">
 </tr>
 </td><br><br>
 <td>
            <tr>
                Password:
 </tr><br>
 <tr>
    <input type="password" id="n4">
 </tr>
 </td><br><br>

 <tr>
                Confirm Password:
 </tr><br>
 <tr>
    <input type="password" id="n5">
 </tr>
 </td><br><br>

<input type="submit", value="Register" id="button">
</table>
 </form>
   <div id="output"></div>
   
   <br><br><br><br><br><br>
<h1>Activity selection</h1>

<form>
<table>
        <td>
            <tr>
                Activity Name:
 </tr><br>
 <tr>
    <input type="text" id="n6">
 </tr>
 </td><br>
 <td>
</table>
<input type="submit", value="Add Activity" id="button">
</form>




 
</body>
</html>
