<?php
if (!array_key_exists('page', $_GET)) {
    $_GET['page'] = 'index';
}
$page = $_GET['page'];
if (!array_key_exists('mode', $_GET)) {
    $_GET['mode'] = 'index';
}
$mode = $_GET['mode'];
if (!array_key_exists('id', $_GET)) {
    $_GET['id'] = 'index';
}
$id = $_GET['id'];
//code to get logedin
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = hash("sha512", $_POST['password']);

    $sql = ("SELECT * FROM users WHERE email='$email' AND password='$password'");
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    if ($row) {
        // Load code below if both username
        // and password submitted are correct
        $_SESSION['rechten'] = $row["rechten"];
        $_SESSION['email'] = $row['email'];
        $_SESSION['id']=$row['ID'];
        // Set session variable
        header("Location: http://jhdev.nl/pc4u");
        exit;
    } else {
        $message = 'gebruikersnaam en wachtwoord komen niet overeen';
    }


}
//code adding new user
if (isset($_POST['registreren'])) {
    $vnaam = trim($_POST['voornaam']);
    $tsvoeg = trim($_POST['tussenvoegsel']);
    $anaam = trim($_POST['achternaam']);
    $email = trim($_POST['email']);
    $tele = trim($_POST['telefoon']);
    $pass = hash("sha512", $_POST['password']);
    $adres = trim($_POST['adres']);
    $postcode = trim($_POST['postcode']);
    $woonplaats = trim($_POST['woonplaats']);
    $rechten = $_POST['rechten'];

    $sql = ("SELECT * FROM users WHERE email = '{$email}' ");
    $result = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($result);

    if ($count == 0) {
        $query = "INSERT INTO users (voornaam, tussenvoegsel, achternaam, email, telefoon, password, adres, postcode, woonplaats, rechten)
        VALUES ('$vnaam', '$tsvoeg',' $anaam', '$email', '$tele', '$pass', '$adres', '$postcode', '$woonplaats', '$rechten')";
        if ($conn->query($query)) {
            header("Location: http://pc4u.jhdev.nl");
        } else {
            echo $conn->error;
        }
    } else {
        $message = 'user already in use';
    }
}
//user info
if ($page == 'account') {

}
//admin part
//products management
if ($page == 'addproduct') {
    if (isset($_POST['addproduct'])) {
        $productnaam = trim($_POST['product']);
        $prijs = trim($_POST['prijs']);
        $maincatnaam = trim($_POST['maincatnaam']);
        $subcatnaam = trim($_POST['subcatnaam']);
        $length = trim($_POST['length']);
        $note = trim($_POST['note']);
        $image1 = trim($_POST['image1']);
        $image2 = trim($_POST['image2']);
        $image3 = trim($_POST['image3']);
        $hoogte = trim($_POST['hoogte']);
        $breedte = trim($_POST['breedte']);
        $gewicht = trim($_POST['gewicht']);
        $stock = trim($_POST['stock']);

        $query = "INSERT INTO producten (productNaam, productprijs, maincatNaam, subcatNaam, productLengte, productNote, productImage1, productImage2, productImage3, productHoogte, productBreedte, productGewicht, productStock)
          VALUES ('$productnaam', '$prijs',' $maincatnaam', '$subcatnaam', '$length', '$note', '$image1', '$image2', '$image3', '$hoogte', '$breedte', '$gewicht','$stock')";
        if ($conn->query($query)) {
            header("Location: http://jhdev.nl/pc4u/?page=products");
            return;
        } else {
            echo $conn->error;
        }
    }
}
if (isset($_POST['editproduct'])) {
    if (!empty($_POST)) {
        $productnaam = trim($_POST['product']);
        $prijs = trim($_POST['prijs']);
        $maincatnaam = trim($_POST['maincatnaam']);
        $subcatnaam = trim($_POST['subcatnaam']);
        $length = trim($_POST['length']);
        $note = trim($_POST['note']);
        $image1 = trim($_POST['image1']);
        $image2 = trim($_POST['image2']);
        $image3 = trim($_POST['image3']);
        $hoogte = trim($_POST['hoogte']);
        $breedte = trim($_POST['breedte']);
        $gewicht = trim($_POST['gewicht']);
        $stock = trim($_POST['stock']);


        $query = "UPDATE producten SET productNaam ='$productnaam', productprijs ='$prijs', maincatNaam ='$maincatnaam', subcatNaam='$subcatnaam', productLengte='$length', productNote='$note', productImage1='$image1', productImage2='$image2',productImage3='$image3', productHoogte='$hoogte', productBreedte='$breedte', productGewicht='$gewicht', productStock='$stock'  WHERE productID = " . $_GET['id'];
        if ($conn->query($query)) {
            header("Location: http://jhdev.nl/pc4u/?page=products");
            return;
        } else {
            echo $conn->error;
        }
    }
}
if ($page == 'removeproduct') {
    if (isset($_POST['removeproduct'])) {
        $query = "DELETE FROM producten WHERE productID = " . $_GET['id'];
        if ($conn->query($query)) {
            header("Location: http://jhdev.nl/pc4u/?page=products");
        } else {
            echo $conn->error;
        }
    }
}
//user management
if ($page == 'users') {

}
if (isset($_POST['edituser'])) {
    if (!empty($_POST)) {
        $vnaam = trim($_POST['voornaam']);
        $tsvoeg = trim($_POST['tussenvoegsel']);
        $anaam = trim($_POST['achternaam']);
        $email = trim($_POST['email']);
        $tele = trim($_POST['telefoon']);
        $adres = trim($_POST['adres']);
        $postcode = trim($_POST['postcode']);
        $woonplaats = trim($_POST['woonplaats']);

        $query = "UPDATE users SET voornaam = '$vnaam', tussenvoegsel = '$tsvoeg', achternaam = '$anaam', email = '$email', telefoon = '$tele', adres = '$adres', postcode = '$postcode', woonplaats = '$woonplaats' WHERE ID = " . $_SESSION['id'];
        if ($conn->query($query)) {
            header("Location: http://jhdev.nl/pc4u/?page=account");
            $_SESSION['email'] = $email;
            return;
        } else {
            echo $conn->error;
        }
    }
}
// Admin edit user
if (isset($_POST['adminEditUser'])) {
    if (!empty($_POST)) {
        $vnaam = trim($_POST['voornaam']);

        $query = "UPDATE users SET voornaam = '$vnaam' WHERE ID = " . $_SESSION['id'];
        if ($conn->query($query)) {
            header("Location: http://jhdev.nl/pc4u/?page=account");
            $_SESSION['email'] = $email;
            return;
        } else {
            echo $conn->error;
        }
    }
}
//admin remove user
if (isset($_POST['adminRemoveUser'])){

}
//orders management
if ($mode == 'orders') {

}
if ($mode == 'editorders') {

}
if ($mode == 'removeorders') {

}
//maintenance management
if ($mode == 'maintenance') {

}
if ($mode == 'editmaintenance') {

}
if ($mode == 'removemaintenance') {

}
if (isset($_POST['mail'])) {
    //check email waardes
    if ((empty($_POST['naam']) || empty($_POST['email']) || empty($_POST['comment'])) && !isset($_POST['fake'])) {
        $report = "Please fill out the complete form..";
    } else {
        //mail sender
        $fName = $_POST['naam'];
        $to = $_POST['email'];
        $message = $_POST['comment'];
        $subject = "pc4u test";

        //mail for the mailer
        $msg1 = "Dear " . $fName . ' ' . "\r\n \r\nEmail has been received\r\n \r\nYours Sincerely,\r\nPc4u";
        $headers = 'From: noreply@pc4u.jhdev.nl' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

        $mail = mail($to, $subject, $msg1, $headers);

        //mail receiver
        //enter here the email from the receiver
        $my = 'jordenhesse@hotmail.com';
        //mail structure for the receiver
        $msg2 = "Hello Pc4u,\r\n \r\n" . "\r\n" . $message . "\r\n \r\nYours Sincerely,\r\n" . $fName;
        $headers = 'From:' . $to . "\r\n" . 'X-Mailer: PHP/' . phpversion();

        $mail = mail($my, $subject, $msg2, $headers);
        if ($mail) {
            $report = "Thank you for using our mail form";
        } else {
            $report = "Mail sending failed.";
        }
    }
}