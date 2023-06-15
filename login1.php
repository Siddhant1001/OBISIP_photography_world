<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
    <body>  
        <div id = "frm">  
            <h1><b>Login</b></h1>  
            <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
              
            <p>  
                    <label> UserName: </label>  
                    <input type = "text" id ="user" name  = "user" />  
                </p>  
                <p>  
                    <label> Password: </label>  
                    <input type = "password" id ="pass" name  = "pass" />  
                </p> 
               
                <p>     
                    <input type =  "submit" id = "btn" value = "Login" />  
                  
</div>
            </form>  
        </div>  
        <!-- // validation for empty field    -->
        <script>  
                function validation()  
                {  
                    var id=document.f1.user.value;  
                    var ps=document.f1.pass.value;  
                    if(id.length=="" && ps.length=="") {  
                        alert("User Name and Password fields are empty");  
                        return false;  
                    }  
                    else  
                    {  
                        if(id.length=="") {  
                            alert("User Name is empty");  
                            return false;  
                        }   
                        if (ps.length=="") {  
                        alert("Password field is empty");  
                        return false;  
                        }  
                    }                             
                }  
            </script>  
            
    </body>     
    </html>  