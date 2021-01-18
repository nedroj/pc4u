<div class="admin">
    <h1>test winkelwagen</h1>
</div>
<?php
$product_array = $conn->Query("SELECT * FROM producten ORDER BY productID ASC");
if (!empty($product_array)) {
    foreach ($product_array as $key => $value) {
        ?>
        <div class="product-item">
            <form method="post" action="winkelwagen.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                <div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
                <div><strong><?php echo $product_array[$key]["name"]; ?></strong></div>
                <div class="product-price"><?php echo "$" . $product_array[$key]["price"]; ?></div>
                <div><input type="text" name="quantity" value="1" size="2"/><input type="submit" value="Add to cart" class="btnAddAction"/></div>
            </form>
        </div>
    <?php }
} ?>

