<form action="?page=reset" class="login" method="POST">
    <table>
        <tr>
            <td>E-mail Address:</td>
            <td><input type="text" name="email" size="20"/></td>
        </tr>
        <tr>
            <td>New Password:</td>
            <td><input type="password" name="password" size="20"/></td>
        </tr>
        <tr>
            <td>Confirm Password:</td>
            <td><input type="password" name="confirmpassword" size="20"/></td>
        </tr>
        <input type="hidden" name="q" value="<?php if (isset($_GET["q"])) {
            echo $_GET["q"];
        } ?>"/>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="ResetPasswordForm" value=" Reset Password "/></td>
        </tr>
    </table>
</form>