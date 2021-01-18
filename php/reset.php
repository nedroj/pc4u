<?php
$host = "localhost";
$username = "jhdevn1q";
$password = "1b2b3c4d5e";
$dbname = "jhdevn1q_pc4u";
try {
    $conn = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password);
}
catch(PDOException $ex)
{
    $msg = "Failed to connect to the database";
}
// Was the form submitted?
if (isset($_POST["ResetPasswordForm"])) {
    // Gather the post data
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $hash = $_POST["q"];

    // Use the same salt from the forgot_password.phtml file
    $salt = "498#2D83B631%3800EBD!801600D*7E3CC13";

    // Generate the reset key
    $resetkey = hash('sha512', $salt . $email);

    // Does the new reset key match the old one?
    if ($resetkey == $hash) {
        if ($password == $confirmpassword) {
            //has and secure the password
            $password = hash('sha512', $password);

            // Update the user's password
            $query = $conn->prepare('UPDATE users SET password = :password WHERE email = :email');
            $query->bindParam(':password', $password);
            $query->bindParam(':email', $email);
            $query->execute();
            $conn = null;
            echo "Your password has been successfully reset.";
            ?>
            <p><a href="http://pc4u.jhdev.nl/">Klik hier om naar inlog te gaan</a></p>
            <?php
        } else {
           $message = "Your password's do not match.";
        }
    } else {
        $message = "Your password reset key is invalid.";
    }
}
?>
<div class="message">
    <?php
    echo "$message";
    ?>
</div>
