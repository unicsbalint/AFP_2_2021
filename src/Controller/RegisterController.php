<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

class RegisterController
{
    function insertUser($username, $email, $address, $password)
    {
        require_once "DbController.php";
        $dbfunctions = DbController::getInstance();
        $connection = $dbfunctions->connectToDatabase();

        $password = sha1($password); //sha1 titkosítással töltjük fel az adatbázisba, így is lesz kiolvasva
        try {
            $token=base64_encode($email);
            $newUser = $dbfunctions->executeDML("
            INSERT INTO `user`( `name`, `email`, `address`, `password`,`token`)
            VALUES ('$username','$email','$address','$password','$token')",
                $connection);

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        $this->sendMail($email, $username, 0,$token,null);
        return true;
    }

    /**
     * @param  $email
     * Megnezzük hogy már van-e ilyen emaillel regisztrált emberünk az adatbázisban, a user táblában
     * Ha van, akkor a függvény truet ad vissza, ha nincs akkor falseot
     */
    //
    function checkIfUserExists($email)
    { //usernév ellenőrzés nem szükséges, mert emailt fogunk használni bejelentkezéshez.
        require_once "DbController.php";
        $dbfunctions = DbController::getInstance();
        $connection = $dbfunctions->connectToDatabase();

        $params = [':email' => $email];
        $query = "SELECT id_user FROM user WHERE email = :email";
        $check = $dbfunctions->getRecord($query, $params);

        if (!empty($check)) {
            return true;
        } else {
            return false;
        }

    }

    function sendMail($to, $name, $status, $token,$orderData)
    {
        require '../utils/PHPMailer/src/Exception.php';
        require '../utils/PHPMailer/src/PHPMailer.php';
        require '../utils/PHPMailer/src/SMTP.php';
        $mail = new PHPMailer(true);
        try {
            //Server settings
//            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
            $mail->SMTPAuth   = true;//Enable SMTP authentication
            $mail->Username   = getenv('USERNAME');               //SMTP username
            $mail->Password   = getenv('PASSWORD');               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = getenv('PORT');                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
                                                                        //Set the encryption system to use - ssl (deprecated) or tls
            $mail->SMTPSecure = getenv('SMTPSECURE');                                  //Whether to use SMTP authentication
            $mail->SMTPAuth = getenv('AUTH');
            //Recipients
            $mail->setFrom(getenv('USERNAME'), 'tesla@noreply.org');
            $mail->addAddress($to, $name);                              //Add a recipient
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            switch ($status) {
                case 0:
                    $subject='Thanks for your registration!';
                    break;
                case 1:
                    $subject='Your order is succesfully!';
                    break;

            }
            $mail->Subject = $subject;
            if (!is_null($token) && is_null($orderData)) {
                $message = '
                <html>
               <header>
               <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
               <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
                </header>
                <head>
                  <title>Thanks for your registration!</title>
                </head>
                <body>
                 <div class="card" style="width: 18rem; background-color: #1c87c9">
                  <div class="card-body">
                    <h5 class="card-title">Dear ' . $name . ' thanks for your registration!</h5>
                    <p class="card-text">Pleace click the link below to verify your registration.</p>
                    <a href="localhost/AFP_2_2021/src/View/registration.php?token=' . $token . '" class="card-link">Verify link</a>  
                  </div>
                </div>
                </body>
                </html>
                ';
            }else{
                $message = '
                <html>
               <header>
               <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
               <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
                </header>
                <head>
                  <title>Thanks for your order!</title>
                </head>
                <body>
                 ' . $orderData.'
                </body>
                </html>
                ';
            }
            $mail->Body    = $message;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            if ($status!==1){
                header('Location: index.php');
            }
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    function checkTokenUserActivate($token){
        require_once "DbController.php";
        $dbfunctions = DbController::getInstance();
        $connection = $dbfunctions->connectToDatabase();
        $decryptedEmail =base64_decode( $token );
        $updateUser="UPDATE `user` SET 
                `is_verify`=1 WHERE `email`='{$decryptedEmail}'";
        return $dbfunctions->executeDML($updateUser,$connection);
    }
}
