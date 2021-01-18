<div>

    <form name="myForm" class="well form-horizontal" method="post" id="contact_form">
        <fieldset>
            <?php
            $query = "SELECT * FROM producten WHERE productID = $id";
            $result = mysqli_query($conn, $query);
            while ($row = $result->fetch_assoc()) {
            ?>
            <!-- Form Name -->
            <div class="col-md-12">
                <h1>bewerken product</h1>
            </div>

            <!-- product naam input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Product:</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <input name="product" value="<?= $row['productNaam'] ?>" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- product prijs input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Prijs:</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <input name="prijs" value="<?= $row['productPrijs'] ?>" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- product main categorie input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Main categorie:</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <select id="maincat" name="maincatnaam" required>
                            <option value="" disabled selected hidden>Select your option</option>
                            <option>Desktop</option>
                            <option>Laptop</option>
                            <option>Geluid</option>
                            <option>Accesoire</option>
                        </select>
<!--                        <input name="maincatnaam" value="--><?//= $row['maincatNaam'] ?><!--" class="form-control" type="text">-->
                    </div>
                </div>
            </div>

            <!-- product sub categorie input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Sub categorie:</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <select id="subcat" name="subcatnaam" required>
                            <option value="" disabled selected hidden>Select your option</option>
                            <optgroup label="Desktop">
                                <option>compleet</option>
                                <option>behuizing</option>
                                <option>componenten</option>
                                <option>monitoren</option>
                            </optgroup>
                            <optgroup label="Laptop">
                                <option>notebook</option>
                                <option>chromebook</option>
                                <option>ultrabook</option>
                                <option>tablet</option>
                            </optgroup>
                            <optgroup label="Geluid">
                                <option>headset</option>
                                <option>headphone</option>
                                <option>stereo</option>
                            </optgroup>
                            <optgroup label="Accesoire">
                                <option>muizen</option>
                                <option>toetsenborden</option>
                                <option>oplader</option>
                                <option>muismatten</option>
                                <option>usb-sticks</option>
                                <option>externe-hdd</option>
                            </optgroup>
                        </select>
<!--                        <input name="subcatnaam" value="--><?//= $row['subcatNaam'] ?><!--" class="form-control" type="text">-->
                    </div>
                </div>
            </div>

            <!-- product lengte input-->

            <div class="form-group">
                <label class="col-md-4 control-label">lengte:</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <input name="length" value="<?= $row['productLengte'] ?>" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- product hoogte input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Hoogt:</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <input name="hoogte" value="<?= $row['productHoogte'] ?>" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- product breedte input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Breedte:</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <input name="breedte" value="<?= $row['productBreedte'] ?>" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- product gewicht input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Gewicht:</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <input name="gewicht" value="<?= $row['productGewicht'] ?>" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- product stock input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Vooraad:</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <input name="stock" value="<?= $row['productStock'] ?>" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- product notitie input-->

            <div class="form-group">
                <label class="col-md-4 control-label">notitie:</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <input name="note" value="<?= $row['productNote'] ?>" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- product 1st image input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Plaatje 1:</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <input name="image1" value="<?= $row['productImage1'] ?>" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- product 2st image input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Plaatje 2:</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <input name="image2" value="<?= $row['productImage2'] ?>" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- product 3st image input-->

            <div class="form-group">
                <label class="col-md-4 control-label">plaatje 3:</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <input name="image3" value="<?= $row['productImage3'] ?>" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <button type="submit" name="editproduct" value="editproduct" class="btn btn-warning">bewerken</button>
                    <input type="hidden" name="id" value=<?= $_GET['id'] ?>>
                </div>
            </div>


    </form>
    <?php
    }
    ?>
</div>