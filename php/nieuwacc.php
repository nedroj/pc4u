<?php
?>
<div class="col-md-9">
    <form method="post" class="registerForm" enctype="multipart/form-data">
        <table>
            <tr>
                <td class="tekst">Voornaam: </td>
                <td class="input">
                    <input type="text" name="voornaam" required/>
                </td>
            </tr>
            <tr>
                <td class="tekst">Tussenvoegsel :</td>
                <td class="input">
                    <input type="text" name="tussenvoegsel"/>
                </td>
            </tr>
            <tr>
                <td class="tekst">Achternaam :</td>
                <td class="input">
                    <input type="text" name="achternaam" required/>
                </td>
            </tr>
            <tr>
                <td class="tekst">Email: </td>
                <td class="input">
                    <input type="email" name="email" required/>
                </td>
            </tr>
            <tr>
                <td class="tekst">Telefoon nummer: </td>
                <td class="input">
                    <input type="tel" name="telefoon" />
                </td>
            </tr>
            <tr>
                <td class="tekst">Password:</td>
                <td class="input">
                    <input type="password" name="password" required/>
                </td>
            </tr>
            <tr>
                <td class="tekst">Adres: </td>
                <td class="input">
                    <input type="text" name="adres" required/>
                </td>
            </tr>
            <tr>
                <td class="tekst">Postcode: </td>
                <td class="input">
                    <input type="text" name="postcode" required/>
                </td>
            </tr>
            <tr>
                <td class="tekst">Woonplaats: </td>
                <td class="input">
                    <input type="text" name="woonplaats" required/>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="aanmaken"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><a href="http://jhdev.nl/pc4u">annuleren</a></td>
            </tr>
            <input type="hidden" name="rechten" value="1">
        </table>
        <p>
            <?php
            echo $message;
            ?>
        </p>
    </form>
</div>