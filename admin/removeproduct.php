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
                <h1>Verwijder producten</h1>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-6 control-label">Weet u zeker dat u <?= $row['productNaam'] ?> wilt verwijderen?</label>
                <div class="col-md-6">
                    <button type="submit" name="removeproduct" value="editproduct" class="btn btn-danger">verwijderen</button>
                    <input type="hidden" name="id" value=<?= $_GET['id'] ?>>
                </div>
            </div>
    </form>
    <?php
    }
    ?>
</div>