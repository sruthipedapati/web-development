	<html>
    <head><title>next</title>
        <style type="text/css">
            body{
                background-color: aqua;
                text-align: center;
                margin-top:20%; 
            }
            input{
                width: 80px;
                height: 40px;
            }
            #lg{
                background-color: green;
                color: aliceblue;
                border: none;
            }
            #rg{
                background-color: crimson;
                color: aliceblue;
                border: none;
            }
            input:hover
            {
               opacity: 0.8;
            }
        </style>
               </head>
    <body>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="employees";

	$u_name=$_POST["uname"];
	$u_email=$_POST["mail"];
    $u_ps=$_POST["ps"];
	$con=new mysqli($servername,$username,$password,$dbname);
	if($con->connect_error){
		echo "Connection failed";
	}
	$stmt=$con->prepare("insert into regs values(?,?,?)");
	$stmt->bind_param("sss",$u_name,$u_email,$u_ps);
	
$stmt->execute();
        {
            echo "<h1>Registration completed</h1>";
            echo "<br>";
            echo "<h2>Go to login page</h2>";
          
        }
}
?><div class="bt">
        <a href="login.html"><input type="button" id="lg" value="login"></a>
        <a href="reg.html"><input type="button" id="rg" value="back"></a></div>
        </body>
