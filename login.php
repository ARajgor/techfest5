<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css_files/registration_form_css.css">
</head>


<style>
    body {
    background-image: url('images-event/bg/3.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}
#div1 {
    opacity: 0.9;
}
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
}

.registration-form {
    padding: 50px 0;
}

.registration-form form {
    background-color: #191C24;
    max-width: 600px;
    margin: auto;
    padding: 50px 70px;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    border-bottom-left-radius: 30px;
    border-bottom-right-radius: 30px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
}

#image {
    font-size: 40px;
    color: white;
    height: 110px;
    width: 110px;
}

.registration-form .item {
    border-radius: 20px;
    margin-bottom: 25px;
    padding: 10px 20px;
}

.registration-form .register {
    border-radius: 30px;
    padding: 10px 20px;
    font-size: 18px;
    font-weight: bold;
    background-color: #8e04d9;
    border: none;
    color: white;
    margin-top: 20px;
}

#p1 {
    text-align: center;
    font-size: small;
    font-style: italic;
}

#p2 {
    text-align: left;
    font-size: medium;
}

p {
    text-align: center;
    font-size: large;
}

.form-group {
    color: #495057;
}

strong {
    color: #8e04d9;
}

@media (max-width: 456px) {
    .registration-form form {
        padding: 50px 20px;
    }
    .registration-form .form-icon {
        width: 70px;
        height: 70px;
        font-size: 30px;
        line-height: 70px;
    }
}
</style>

<?php
session_start();
session_unset();
session_destroy();

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $user_name = $_POST['user_name'];
        $passcode = $_POST['password'];

        $user_name = str_replace("<","&lt;","$user_name");
        $user_name = str_replace(">", "&gt;", "$user_name");
        $passcode = str_replace("<","&lt;","$passcode");
        $passcode = str_replace(">", "&gt;", "$passcode");

        $user_name = str_replace("=","&eq;","$user_name");
        $user_name = str_replace("\'", " ", "$user_name");
        $user_name = str_replace("\"", " ", "$user_name");

        $passcode = str_replace("=","&eq;","$passcode");
        $passcode = str_replace("\'", " ", "$passcode");
        $passcode = str_replace("\"", " ", "$passcode");


            include "database_connection.php";
            $sql = "SELECT * FROM `user` WHERE user_id = '$user_name'";
            $result = mysqli_query($connect, $sql);
            $row = mysqli_num_rows($result);
            if($row != 0)
            {
                while($r = mysqli_fetch_assoc($result))
                {
                    $pass = $r['password'];
                    if($pass == $passcode)
                    {
                        echo  '<script type ="text/JavaScript">
                        alert("login successfull")
                       </script>'; 
    
                       session_start();
                       $_SESSION['logged_in'] = "true";
                       $_SESSION['user_id'] = $user_name;
                       $_SESSION['name'] = $r['name'];
                       $_SESSION['phone_number'] = $r['phone_number'];
                       $_SESSION['mail'] = $r['mail'];
                       $_SESSION['college'] = $r['college'];

                       header("location: index.php");

                    }
                    else
                    {
                        echo  '<script type ="text/JavaScript">
                        alert("password incorrect")
                       </script>'; 
                    }
                }
            }
            else
            {
                echo  '<script type ="text/JavaScript">
                alert("user not exist")
               </script>'; 
            }

    }
?>

<body>
    <div class="registration-form" id="div1">
        <form action="login.php" method="post" id="form">
        <div class="form-group">
                <center>
                <img src="img/ppsu_logo.png" alt="something wrong" id="image">
                </center>
            </div>
             <div class="form-group">
             <p>
                     <h3>
                     <strong> 
                         <center>
                            Log in
                         </center>
                    </strong>
                     </h3>
                    </p>
            </div>
            <div class="form-group">
                <input type="text" name="user_name" class="form-control item" id="user name" placeholder="User name" maxlength="20" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control item" id="password" placeholder="Password" maxlength="20" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block register" id="submit">
                    Log in
                </button>
            </div>
        </form>
    </div>
</body>
</html>

