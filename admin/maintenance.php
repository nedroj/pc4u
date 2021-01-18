<div class="admin">
    <h1>Reperaties overzicht</h1>
    <table>
        <tr>
            <th>Product</th>
            <th>ProductID</th>
            <th>Email</th>
            <th>Reden</th>
            <th>Datum</th>
            <th>Edit</th>
        </tr>
        <?php
        $query = "SELECT * FROM orders ORDER BY ID";
        $result = mysqli_query($conn, $query);
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?= $row['productNaam'] ?></td>
                <td><?= $row['productID'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['reden'] ?></td>
                <td><?= $row['ticketDatum'] ?></td>
                <td><a href=" <?= "?id=" . $row['ID'] . "&mode=editorder" . "&page=orders" ?>"><img
                            src="images/gastenboek_icon.jpg" height="30px"></a></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>