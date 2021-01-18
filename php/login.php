<?php
if (isset($_SESSION['rechten'])) {
    header('Location: http://jhdev.nl/pc4u/?page=account');
} else { ?>
    <div class="col-md-9">
        <?php
        echo "<p style='width: 100%;margin: auto; color: black';>{$message}</p>";
        ?>
    </div>
    <?php if ($message === "Gebruikersnaam en wachtwoord komen niet overeen.") {
        echo "<div id=\"loginError\">";
    } else {
        echo "<div id=\"login\">";
    }
    ?>
    <div id="logTitel">
        <h3>Login</h3>
    </div>
    <form method="post" class="loginForm" enctype="multipart/form-data">
        <table>
            <tbody>
            <tr>
                <td class="tekst">Email:</td>
                <td class="input">
                    <input type="text" class="loginTxtb" name="email" maxlength="100" required value=""
                           placeholder="Email" style="">
                </td>
            </tr>
            <tr>
                <td class="tekst">Wachtwoord:</td>
                <td class="input">
                    <input type="password" class="passwordTxtb" name="password" maxlength="50" required value=""
                           placeholder="Wachtwoord" style="">
                </td>
            </tr>
            </tbody>
        </table>
        <?php
        if ($message === "Gebruikersnaam en wachtwoord komen niet overeen.") {
            echo "<p>{$message}</p>";
        }
        ?>
        <div id="logFooter">
            <a href="?page=forgot_password">Wachtwoord vergeten?</a>
            <input type="submit" class="loginBtn" name="login" value="Login">
        </div>
    </form>
    <?php if ($message === "Gebruikersnaam en wachtwoord komen niet overeen.") {
        echo "</div>";
    } else {
        echo "</div>";
    }
    ?>


    <?php if ($message === "Email al in gebuik.") {
        echo "<div id=\"registratieError\">";
    } else {
        echo "<div id=\"registratie\">";
    }
    ?>
    <div id="logTitel">
        <h3>Registreren</h3>
    </div>
    <form method="post" class="registerForm" enctype="multipart/form-data">
        <table>
            <tr>
                <td class="tekst">Voornaam:</td>
                <td class="input">
                    <input type="text" class="registrerenTxtb" placeholder="Voornaam" name="voornaam" required/>
                </td>
            </tr>
            <tr>
                <td class="tekst">Tussenvoegsel:</td>
                <td class="input">
                    <input type="text" class="registrerenTxtb" placeholder="Tussenvoegsel" name="tussenvoegsel"/>
                </td>
            </tr>
            <tr>
                <td class="tekst">Achternaam :</td>
                <td class="input">
                    <input type="text" class="registrerenTxtb" placeholder="Achternaam" name="achternaam" required/>
                </td>
            </tr>
            <tr>
                <td class="tekst">Email:</td>
                <td class="input">
                    <input type="email" class="registrerenTxtb" placeholder="Email" name="email" required/>
                </td>
            </tr>
            <tr>
                <td class="tekst">Tel. nummer:</td>
                <td class="input">
                    <input type="tel" class="registrerenTxtb" placeholder="Tel. nummer" name="telefoon"/>
                </td>
            </tr>
            <tr>
                <td class="tekst">Wachtwoord:</td>
                <td class="input">
                    <input type="password" class="registrerenTxtb" placeholder="Wachtwoord" name="password" required/>
                </td>
            </tr>
            <tr>
                <td class="tekst">Adres:</td>
                <td class="input">
                    <input type="text" class="registrerenTxtb" placeholder="Adres" name="adres" required/>
                </td>
            </tr>
            <tr>
                <td class="tekst">Postcode:</td>
                <td class="input">
                    <input type="text" class="registrerenTxtb" placeholder="Postcode" name="postcode" required/>
                </td>
            </tr>
            <tr>
                <td class="tekst">Woonplaats:</td>
                <td class="input">
                    <input type="text" class="registrerenTxtb" placeholder="Woonplaats" name="woonplaats" required/>
                </td>
            </tr>

        </table>
        <div id="logFooter">
            <input type="submit" name="registreren" value="aanmaken" class="loginBtn">
            <input type="hidden" name="rechten" value="1">
        </div>
        <?php
        echo $message;
        ?>
    </form>

    <?php if ($message === "Email al in gebuik.") {
        echo "</div>";
    } else {
        echo "</div>";
    }
    ?>
    <?php
}
?>
