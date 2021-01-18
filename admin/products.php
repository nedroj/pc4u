<div class="admin">
    <div class="col-md-8">
        <h1>Producten overzicht</h1>
        </div>
        <div class="col-md-4">
            <a href="?page=addproduct" class="btn btn-danger" role="button" style="margin-top: 5%;">voeg nieuw artikel toe</a>
        </div>
        <table>
            <tr>
                <th>Product</th>
                <th>Prijs</th>
                <th>Maincat</th>
                <th>Subcat</th>
                <th>lengte</th>
                <th>notitie</th>
                <th>Image1</th>
                <th>Image2</th>
                <th>Image3</th>
                <th>Hoogte</th>
                <th>Breedte</th>
                <th>Gewicht</th>
                <th>Stock</th>
                <th>Edit</th>
                <th>Verwijderen</th>
            </tr>
            <?php
            $query = "SELECT * FROM producten  ORDER BY productID";
            $result = mysqli_query($conn, $query);
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?= $row['productNaam'] ?></td>
                    <td><?= $row['productPrijs'] ?></td>
                    <td><?= $row['maincatNaam'] ?></td>
                    <td><?= $row['subcatNaam'] ?></td>
                    <td><?= $row['productLengte'] ?></td>
                    <td><?= $row['productNote'] ?></td>
                    <td><?= $row['productImage1'] ?></td>
                    <td><?= $row['productImage2'] ?></td>
                    <td><?= $row['productImage3'] ?></td>
                    <td><?= $row['productHoogte'] ?></td>
                    <td><?= $row['productBreedte'] ?></td>
                    <td><?= $row['productGewicht'] ?></td>
                    <td><?= $row['productStock'] ?></td>
                    <td><a href=" <?= "?id=" . $row['productID'] . "&page=editproduct" ?>"><img
                                src="images/gastenboek_icon.jpg" height="30px"></a></td>
                    <td><a href=" <?= "?id=" . $row['productID'] . "&page=removeproduct" ?>"><img
                                src="images/thrash.jpg" height="30px"></a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>