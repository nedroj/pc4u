<div class="userinfo">
    <h1>Gegevens</h1>
    <?php
    $query = "SELECT * FROM users WHERE email = '{$_SESSION['email']}'";
    $result = mysqli_query($conn, $query);
    while ($row = $result->fetch_assoc()) {
    ?>
        <ul style="list-style: none">
            <li><p>Naam:</li> &nbsp;<?= $row['voornaam'] ?></p>
            <li><p>Tussenvoegsel:</li>&nbsp; <?= $row['tussenvoegsel'] ?></p>
            <li><p>Achternaam:</li>&nbsp; <?= $row['achternaam'] ?></p>
            <li><p>Email:</li>&nbsp; <?= $row['email'] ?></p>
            <li><p>Telefoonnummer:</li>&nbsp; <?= $row['telefoon'] ?></p>
            <li><p>adres:</li>&nbsp; <?= $row['adres'] ?></p>
            <li> <p>postcode:</li>&nbsp; <?= $row['postcode'] ?></p>
            <li><p>woonplaats:</li>&nbsp; <?= $row['woonplaats'] ?></p>
            </ul>
            <?php
        }
        ?>
    </table>
</div>
<hr>
<div class="userorderinfo">
    <h1>Bestellingen</h1>
    <table>
        <tr>
            <th>Order ID</th>
            <th>Product Name</th>
            <th>Prijs</th>
            <th>status</th>
            <th>Bestel Datum</th>
        </tr>
        <?php
        $query = "SELECT * FROM orders WHERE email = '{$_SESSION['email']}'";
        $result = mysqli_query($conn, $query);
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?= $row['orderID'] ?></td>
                <td><?= $row['productNaam'] ?></td>
                <td><?= $row['prijs'] ?></td>
                <td><?= $row['status'] ?></td>
                <td><?= $row['bestelDatum'] ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
<hr>
<div class="userrepairinfo">
    <h1>Reparaties</h1>
    <table>
        <tr>

        </tr>
    </table>
</div>