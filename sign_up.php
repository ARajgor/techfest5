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
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $user_name = $_POST['user_name'];
        $name = $_POST['name'];
        $college_name = $_POST['college_name'];
        $mail = $_POST['mail'];
        $phone_number = $_POST['phone_number'];
        $passcode = $_POST['password'];
        $passcode2 = $_POST['password2'];

        $name = str_replace("<","&lt;","$name");
        $name = str_replace(">", "&gt;", "$name");
        $college_name = str_replace("<","&lt;","$college_name");
        $college_name = str_replace(">", "&gt;", "$college_name");
        $mail = str_replace("<","&lt;","$mail");
        $mail = str_replace(">", "&gt;", "$mail");
        $user_name = str_replace("<","&lt;","$user_name");
        $user_name = str_replace(">", "&gt;", "$user_name");
        $passcode = str_replace("<","&lt;","$passcode");
        $passcode = str_replace(">", "&gt;", "$passcode");
        $passcode2 = str_replace("<","&lt;","$passcode2");
        $passcode2 = str_replace(">", "&gt;", "$passcode2");

        $name = str_replace("=","&eq;","$name");
        $name = str_replace("\'", " ", "$name");
        $name = str_replace("\"", " ", "$name");

        $college_name = str_replace("=","&eq;","$college_name");
        $college_name = str_replace("\'", " ", "$college_name");
        $college_name = str_replace("\"", " ", "$college_name");

        $mail = str_replace("=","&eq;","$mail");
        $mail = str_replace("\'", " ", "$mail");
        $mail = str_replace("\"", " ", "$mail");

        $user_name = str_replace("=","&eq;","$user_name");
        $user_name = str_replace("\'", " ", "$user_name");
        $user_name = str_replace("\"", " ", "$user_name");

        $passcode = str_replace("=","&eq;","$passcode");
        $passcode = str_replace("\'", " ", "$passcode");
        $passcode = str_replace("\"", " ", "$passcode");

        $passcode2 = str_replace("=","&eq;","$passcode2");
        $passcode2 = str_replace("\'", " ", "$passcode2");
        $passcode2 = str_replace("\"", " ", "$passcode2");
        
        $flag = 0;

        if($passcode != $passcode2)
        {
            echo  '<script type ="text/JavaScript">
             alert("password not match")
            </script>'; 

            $flag = 1;
        }

        include "database_connection.php";
        $sql = "SELECT * FROM `user`";
        $result = mysqli_query($connect, $sql);
        $row = mysqli_num_rows($result);
        if($row != 0)
        {
            while($r = mysqli_fetch_assoc($result))
            {
                $username = $r['user_id'];
                if($username == $user_name)
                {
                    echo  '<script type ="text/JavaScript">
                    alert("this username in already exist")
                   </script>'; 
    
                   $flag = 1;
                }
            }
        }

        if($flag == 0)
        {
            include "database_connection.php";
            $sql = "INSERT INTO `user` ( `user_id`, `name`, `college`, `mail`, `phone_number`, `password`) VALUES ( '$user_name', '$name', '$college_name', '$mail', '$phone_number', '$passcode')";
            $result = mysqli_query($connect, $sql);
            $sql = "INSERT INTO `event_purchased` ( `user_id`, `number_of_purchase`) VALUES ('$user_name', '0')";
            $result = mysqli_query($connect, $sql);

            session_start();
            $_SESSION['logged_in'] = "true";
            $_SESSION['user_id'] = $user_name;
            $_SESSION['name'] = $name;
            $_SESSION['phone_number'] = $phone_number;
            $_SESSION['mail'] = $mail;
            $_SESSION['college'] = $college_name;

            header("location: index.php");
        }

    }
?>

<body>
    <div class="registration-form" id="div1">
        <form action="sign_up.php" method="post" id="form">
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
                            Create account
                         </center>
                    </strong>
                     </h3>
                    </p>
            </div>
            <div class="form-group">
                <input type="text" name="user_name" class="form-control item" id="user name" placeholder="User_name" maxlength="20" required>
            </div>
            <div class="form-group">
                <input type="text" name="name" class="form-control item" id="Full name" placeholder="Full name" maxlength="50" required>
            </div>
            <div class="form-group">
                <input type="text" name="college_name" class="form-control item" id="college_name" placeholder="College" maxlength="100" required>
            </div>
            <div class="form-group">
                <input type="email" name="mail" class="form-control item" id="email" placeholder="Email" maxlength="50" required>
            </div>
            <div class="form-group">
                <input type="number" name="phone_number" class="form-control item" id="phone-number" max="9999999999" min="1000000000" placeholder="Phone Number" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control item" id="password" placeholder="Create password" maxlength="20" required>
            </div>
            <div class="form-group">
                <input type="password" name="password2" class="form-control item" id="password2" placeholder="Confirm password" maxlength="20" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block register" id="submit">
                    Sign up
                </button>
            </div>
        </form>
    </div>
</body>
</html>

