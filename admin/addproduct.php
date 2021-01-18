<div>

    <form name="myForm" class="well form-horizontal" method="post" id="contact_form">
        <fieldset>
            <!-- Form Name -->
            <div class="col-md-12">
                <h1>Voeg nieuw product toe</h1>
            </div>

            <!-- product naam input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Product:</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <input name="product" placeholder="Product name" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- product prijs input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Prijs:</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <input name="prijs" placeholder="Prijs" class="form-control" type="text">
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
                    </div>
                </div>
            </div>

            <!-- product lengte input-->

            <div class="form-group">
                <label class="col-md-4 control-label">length:</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <input name="length" placeholder="Lengte" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- product hoogte input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Hoogt:</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <input name="hoogte" placeholder="hoogte" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- product breedte input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Breedte:</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <input name="breedte" placeholder="breedte" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- product gewicht input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Gewicht:</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <input name="gewicht" placeholder="gewicht" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- product stock input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Voorraad:</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <input name="stock" placeholder="voorraad" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- product notitie input-->

            <div class="form-group">
                <label class="col-md-4 control-label">notitie:</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <input name="note" placeholder="notitie" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- product 1st image input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Plaatje 1:</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <input name="image1" placeholder="plaatje 1" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- product 2st image input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Plaatje 2:</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <input name="image2" placeholder="plaatje 2" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- product 3st image input-->

            <div class="form-group">
                <label class="col-md-4 control-label">plaatje 3:</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <input name="image3" placeholder="plaatje 3" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <button type="submit" name="addproduct" value="editproduct" class="btn btn-warning">bewerken
                    </button>
                </div>
            </div>
    </form>
</div>