<div class="admin">
    <h1>Gebruikers overzicht</h1>
    <table>
        <tr>
            <th>Rechten</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Verwijderen</th>
        </tr>
        <?php
        $query = "SELECT * FROM users ORDER BY ID";
        $result = mysqli_query($conn, $query);
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?= $row['rechten'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><a href=" <?="?id=" . $row['ID'] . "&page=edituser"?>"><img
                            src="images/gastenboek_icon.jpg" height="30px"></a></td>
                <td><a href=" <?= "?id=" . $row['ID'] . "&page=removeuser" ?>"><img
                            src="images/thrash.jpg" height="30px"></a></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <?php
    echo"$message";
    ?>
</div>