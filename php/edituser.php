<div>

    <form name="myForm" class="well form-horizontal" method="post" id="contact_form">
        <fieldset>
            <!-- Form Name -->
            <legend>Bewerken Account</legend>
            <?php
            $query = "SELECT * FROM users WHERE email = '{$_SESSION['email']}'";
            $result = mysqli_query($conn, $query);
            while ($row = $result->fetch_assoc()) {
                ?>
                <!-- product naam input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Voornaam:</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <input name="voornaam" value="<?= $row['voornaam'] ?>" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- product prijs input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Tussenvoegsel:</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <input name="tussenvoegsel" value="<?= $row['tussenvoegsel'] ?>" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- product main categorie input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Achternaam:</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <input name="achternaam" value="<?= $row['achternaam'] ?>" class="form-control"
                                   type="text">
                        </div>
                    </div>
                </div>

                <!-- product sub categorie input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Email:</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <input name="email" value="<?= $row['email'] ?>" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- product lengte input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Telefoon:</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <input name="telefoon" value="<?= $row['telefoon'] ?>" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- product hoogte input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Adres:</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <input name="adres" value="<?= $row['adres'] ?>" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- product breedte input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Postcode:</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <input name="postcode" value="<?= $row['postcode'] ?>" class="form-control" type="text">
                        </div>
                    </div>
                </div>
                <!-- product stock input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Woonplaats:</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <input name="woonplaats" value="<?= $row['woonplaats'] ?>" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                        <button type="submit" name="edituser" value="edituser" class="btn btn-warning">Bewerken</button>
                        <input type="hidden" name="id" value=<?= $_SESSION['ID'] ?>>
                    </div>
                </div>
                <?php
            }
            ?>
    </form>
</div>