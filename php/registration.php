<?php
$vnaam = trim($_POST['voornaam']);
$tsvoeg = trim($_POST['tussenvoegsel']);
$anaam = trim($_POST['achternaam']);
$email = trim($_POST['email']);
$tele = trim($_POST['telefoon']);
$pass = trim($_POST['password']);
$adres = trim($_POST['adres']);
$postcode = trim($_POST['postcode']);
$woonplaats = trim($_POST['woonplaats']);

?>
<form action="login.php" class="login" method="post">
    <table>
        <tr>
            <td>Voornaam: </td>
            <td>
                <input type="text" name="voornaam" value="" />
            </td>
        </tr>
        <tr>
            <td>Tussenvoegsel :</td>
            <td>
                <input type="text" name="tussenvoegsel"  value="" />
            </td>
        </tr>
        <tr>
            <td>Achternaam :</td>
            <td>
                <input type="text" name="achternaam" value=""/>
            </td>
        </tr>
        <tr>
            <td>Email: </td>
            <td>
                <input type="email" name="email" value=""/>
            </td>
        </tr>
        <tr>
            <td>Telefoon nummer: </td>
            <td>
                <input type="tel" name="telefoon" value=""/>
            </td>
        </tr>
        <tr>
            <td>Password:</td>
            <td>
                <input type="password" name="password" value=""/>
            </td>
        </tr>
        <tr>
            <td>Adres: </td>
            <td>
                <input type="text" name="adres" value=""/>
            </td>
        </tr>
        <tr>
            <td>Postcode: </td>
            <td>
                <input type="text" name="postcode" value=""/>
            </td>
        </tr>
        <tr>
            <td>Woonplaats: </td>
            <td>
                <input type="text" name="woonplaats" value=""/>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="submit" value="Login" />
            </td>
        </tr>
    </table>
</form>

