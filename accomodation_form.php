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
<body>
    <div class="registration-form" id="div1">
        <form action="pay_for_accomodation.php" method="post">
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
                             Accomodation
                         </center>
                    </strong>
                     </h3>
                    </p>
            </div>
            <div>
                <p id="p2">
                    <strong>
                        Person 1
                    </strong>
                </p>
            </div>
            <div class="form-group">
                <input type="text" name="name" class="form-control item" id="Full name" placeholder="Full name" maxlength="50" required>
            </div>
            <div class="form-group">
                <input type="email" name="mail" class="form-control item" id="email" placeholder="Email" maxlength="50" required>
            </div>
            <div class="form-group">
                <input type="number" name="phone_number" class="form-control item" id="phone-number" placeholder="Phone Number" min="1000000000" max="9999999999" required>
            </div>
            <div> 
                <p id="p2">
                    <strong>
                        Person 2
                    </strong>
                </p>
            
                <div class="form-group">
                    <input type="text" name="name_member2" class="form-control item" id="Full name member2" placeholder="Full name" maxlength="50" required>
                </div>
                <div class="form-group">
                    <input type="email" name="mail_member2" class="form-control item" id="email_member2" placeholder="Email" maxlength="50" required>
                </div>
                <div class="form-group">
                    <input type="number" name="phone_number2" class="form-control item" id="phone-number2" placeholder="Phone Number" min="1000000000" max="9999999999" required>
                </div>

                <div class="form-group">
                    <input type="hidden" name="amount" value="1300">
                </div>
            <div class="form-group">
                <p id="p1" style="color:white">
                    *note :  information about hotel and room will be provided <br>
                            in your mail or message on phone number<br>
                            You have to enter correct information<br>
                </p>
            </div>
            <div class="form-group">
            <input type="checkbox" id="checkbox" name="checkbox" value=" " required>
            <label for="checkbox" style="color:white"> I read all notes given above and I Agree.</label>
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
