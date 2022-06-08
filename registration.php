<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User registration Form</title>
    <link rel="stylesheet" type ="text/css" href ="css/bootstrap.min.css">
</head>
<body>
    <div>
        <?php
        if(isset($_POST['create'])){
            $userName   =$_POST['userName'];
            $email      =$_POST['email'];
            $password   =$_POST['password']; 
            
            $sql = "INSERT INTO users (userName ,email ,password ) VALUES (?,?,?)";
            $stmtinsert = $db->prepare($sql);
            $result= $stmtinsert->execute([$userName,$email,$password]);
            if($result){
                echo 'successfully save .'; 
            }else{
                echo 'there was error!!';
            }

        }

        ?>
    </div>
    <div>
        <form action="registration.php" method ="post">
            <div class="container">
                <div class= "row">
                    <div class="col-sm-3">
                    <h1>Registration</h1>
                    <p>Input Correct values</p>
                    <hr class="mb-3">
                    <label for="userName">User Name</label>
                    <input class="form-control" type="text" name="userName" required>

                    <label for="email">Email Address</label>
                    <input class="form-control" type="email" name="email" required>

                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" required>
                    <hr class="mb-3">

                    <input class="btn btn-primary"type="submit" name="create" value="Sign Up"><br>
                    <a href="login.php">Log in</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>