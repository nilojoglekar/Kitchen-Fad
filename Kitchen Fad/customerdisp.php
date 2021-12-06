<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XML DATA </title>
</head>
<body>
    
    <h1> Displaying XML Data</h1>
    <table id="new" border="1"></table>
    <script>
    document.write("XML User info");
    var xR=new XMLHttpRequest();
    xR.open("GET","customer.xml",true);
    document.write("hello");
    document.write(xR.onreadystatechange);

    xR.onreadystatechange=function(){
        var xmlDoc=xR.responseXML;
        var x=xmlDoc.getElementsByTagName("Customer");
        //document.write(x.length);
        var i;
        var table="<tr><td>Name</td><td>Userid</td><td>Email</td><td>Age</td><td>Number</td></tr>";
        for(i=0;i<x.length;i++){
            table+="<tr><td>"+
                x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue 
                 +"</td><td>"+
                    x[i].getElementsByTagName("userid")[0].childNodes[0].nodeValue 
                 +"</td><td>"+
                    x[i].getElementsByTagName("email")[0].childNodes[0].nodeValue 
                 +"</td><td>"+
                 x[i].getElementsByTagName("age")[0].childNodes[0].nodeValue 
                 +"</td><td>"+
                    x[i].getElementsByTagName("number")[0].childNodes[0].nodeValue
                    +
                    "</td></tr>";
        }
       document.getElementById("new").innerHTML=table;
      
    };
    xR.send();
    </script>
    
</body>
</html>