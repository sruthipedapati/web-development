<html>
    <head><style type="text/css">
        body{
            text-align: center;
            background-color: beige;
        }
        </style></head>
    <body><?php
$flage=0;
$servername="localhost";
$username="root";
$password="";
$dbname="employees";
$u_email=$_POST["email"];
$u_ps=$_POST["ps"];
//create connection
$con=new mysqli($servername,$username,$password,$dbname);
$sql="select email,password from regs";

$result=$con->query($sql);
if($result->num_rows>0)
{
    
    while($row=$result->fetch_assoc())
    {
        if(($u_email==$row["email"])&&($u_ps==$row["password"]))
        {
            echo "<h1>login successfull</h1>";
             echo "<h1>welcome</h1>";
            $flage=1;
            break;
        }
        
    }
    }
if($flage==0){
        echo "<h1>mail and password are not matched</h1>";
        }

?>
        
    </body>
</html>