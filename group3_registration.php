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
<?php
session_start();
if(isset($_SESSION['logged_in']))
{
    if($_SESSION['logged_in'] == 'true')
    {
        if($_SERVER['REQUEST_METHOD'] == 'GET')
        {
            $f=0;
            foreach ($_GET as $key => $value) {
                if($key == 'event')
                {
                    $f = 1;
                }
            }
            if($f == 0)
            {
                exit;
            }
            require "database_connection.php";
            $sql = "SELECT * FROM `events`";
            $result = mysqli_query($connect, $sql);
            $flag = 0;
            while($r = mysqli_fetch_assoc($result))
            {
                $event_name = $r['event_name'];
                $event = $_GET['event'];
                if($event == $event_name)
                {
                    $flag = 1;
                }
            }
            if($flag == 0)
            {
                exit;
            }
        }
    }
    else
    {
        header("location: login.php");
    }
}
else
{
    header("location: login.php");
}

?>
<style>
    body {
    background-image: url('images-event/bg/3.jpg');
    background-repeat:no-repeat;
    background-attachment: fixed;
    background-size: cover;
}
#div1 {
    opacity: 1;
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
<body>
    <div class="registration-form" id="div1">
        <form action="group3_registration_validation.php" method="post">
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
                         <?php echo $event ?>
                         </center>
                    </strong>
                     </h3>
                    </p>
            </div>
            <div>
                <p id="p2">
                    <strong>
                        <center>
                            Select Your Team Member
                        </center>
                    </strong>
                </p>
            </div>
            <div>
                <p id="p2">
                    <strong>
                        Member 2
                    </strong>
                </p>
                <div class="form-group">
                    <input type="text" name="uid_member2" class="form-control item" id="userid member2" placeholder="User id" maxlength="20">
                </div>
                <p id="p2">
                    <strong>
                        Member 3
                    </strong>
                </p>
                <div class="form-group">
                    <input type="text" name="uid_member3" class="form-control item" id="userid member3" placeholder="User id" maxlength="20">
                </div>
                <div class="form-group">
                <input type="hidden" name="event" value="<?php echo $event ?>">
                </div>
                </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block register" id="submit">
                    Register
                </button>
            </div>
        </form>
    </div>
</body>
</html>
