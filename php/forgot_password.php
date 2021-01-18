<div id="login">
    <form class="login" method="POST">
        <table>
            <tr>
                <td>E-mail Address:</td>
                <td><input type="text" name="email" size="20"/></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="ForgotPassword" value=" Request Reset "/></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><a href="http://pc4u.jhdev.nl">annuleren</a></td>
            </tr>
        </table>
    </form>
    <div id="logTitel">
        <h3>Wachtwoord vergeten</h3>
    </div>
    <form action="?page=change" method="POST" class="loginForm">
        <table>
            <tbody>
            <tr>
                <td class="tekst">Email:</td>
                <td class="input">
                    <input type="text" class="loginTxtb" name="email" maxlength="100" required value="" placeholder="Email">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><a href="http://pc4u.jhdev.nl">annuleren</a></td>
            </tr>
            </tbody>
        </table>
        <div id="logFooter">
            <input type="submit" class="loginBtn" name="login" value="Login" class="loginButton">
        </div>
    </form>
</div>