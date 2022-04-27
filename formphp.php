<?php

$host= "localhost";

$user="root";

$pass="";

$db="userinfo";

$conn = mysqli_connect($host,$user,$pass,$db);

if($conn)
{
    //echo "success";
}
else{
    //echo "fail";
}

if(isset($_POST['submit'])){

    //print_r($_POST);
    
    $name=$_POST['name'];
    
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    
    $query1="INSERT INTO `userinformation`(`name`, `email`, `contact`) VALUES ('$name','$email','$contact')";
    
    
    
    
    $res1=mysqli_query($conn,$query1);
    //echo($query1);
    //echo '<br>'
    //echo($res1)
    
    echo('<script>alert("Registered successfully now please login")</script>');
    
    
    //echo('<script>window.location="login.html"</script>');
    
    }
    else{
        echo('<script>alert("Not right way")</script>');
    
        echo('<script>window.location="index.html"</script>');
    
    
      
    
    }
    session_start();



?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
      <?php echo $_POST['name']; ?>
        
    </body>
    </html>