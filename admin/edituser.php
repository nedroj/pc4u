<div>

    <form name="myForm" class="well form-horizontal" method="post" id="contact_form">
        <fieldset>
            <?php
            $query = "SELECT * FROM users WHERE ID = $id";
            $result = mysqli_query($conn, $query);
            while ($row = $result->fetch_assoc()) {
            ?>
            <!-- Form Name -->
            <div class="col-md-12">
                <h1>bewerken product</h1>
            </div>

            <!-- product naam input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Voornaam:</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <input name="product" value="<?= $row['voornaam'] ?>" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <button type="submit" name="adminEditUser" value="editproduct" class="btn btn-warning">bewerken</button>
                    <input type="hidden" name="id" value=<?= $_GET['id'] ?>>
                </div>
            </div>


    </form>
    <?php
    }
    ?>
</div>