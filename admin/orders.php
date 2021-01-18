<div class="admin">
    <h1>Bestellingen overzicht</h1>
    <table>
        <tr>
            <th>Email</th>
            <th>Product</th>
            <th>Prijs</th>
            <th>OrderID</th>
            <th>BestelDatum</th>
            <th>Status</th>
            <th>Adres</th>
            <th>Woonplaats</th>
            <th>Telefoon</th>
            <th>Postcode</th>
            <th>Edit</th>
        </tr>
        <?php
        $query = "SELECT * FROM orders ORDER BY ID";
        $result = mysqli_query($conn, $query);
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?= $row['email'] ?></td>
                <td><?= $row['productNaam'] ?></td>
                <td><?= $row['prijs'] ?></td>
                <td><?= $row['orderID'] ?></td>
                <td><?= $row['bestelDatum'] ?></td>
                <td><?= $row['status'] ?></td>
                <td><?= $row['adres'] ?></td>
                <td><?= $row['woonplaats'] ?></td>
                <td><?= $row['telefoon'] ?></td>
                <td><?= $row['postcode'] ?></td>
                <td><a href=" <?= "?id=" . $row['ID'] . "&page=orders" . "&mode=edit" ?>"><img
                            src="images/gastenboek_icon.jpg" height="30px"></a></td>
            </tr>
            <?php
        }
        echo"$message";
        ?>
    </table>
</div>