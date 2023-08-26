<?php 
include("./includes/header.php");
?>

    <body>
        <header class="main_header">
            <?php include("./includes/navigation.php") ?>
            <h1 class="band_name band_name_large">2youK | STORE</h1>
        </header>

        <section class="container container_section">
            <h2 class="section_header">MUSIC</h2>
            <div class="shop_items"> <!-- shop items container -->

                <?php
                $query = "SELECT * FROM store WHERE item_type = 'music' AND item_status = 'published'";
                $select_music = mysqli_query($connection, $query);
                while($row = mysqli_fetch_assoc($select_music)){
                    $item_name = $row['item_name'];
                    $item_img = $row['item_img'];
                    $item_price = $row['item_price'];
                    ?>
                    <div class="shop_item"> <!-- Album wrapper -->
                        <span class="shop_item_title"><?=$item_name?></span>
                        <img class="shop_item_img" src="./images/<?=$item_img?>">
                        <div class="shop_item_details">
                            <span class="shop_item_price"><?=$item_price?>€</span>
                            <button class="btn btn_primary shop_item_btn" type="button">ADD TO CART</button>
                        </div>
                    </div>
                <?php } ?>

            </div> <!-- shop items container -->
        </section>

        <section class="container container_section">
            <h2 class="section_header">MERCH</h2>
            <div class="shop_items">

                <?php 

                $query = "SELECT * FROM store WHERE item_type = 'merch' AND item_status = 'published'";
                $select_merch = mysqli_query($connection, $query);
                while($row = mysqli_fetch_assoc($select_merch)){
                    $merch_name = $row['item_name'];
                    $merch_img = $row['item_img'];
                    $merch_price = $row['item_price'];
                    ?>
                    <div class="shop_item"> <!-- Merch wrapper -->
                        <span class="shop_item_title"><?=$merch_name?></span>
                        <img class="shop_item_img" src="./images/<?=$merch_img?>">
                        <div class="shop_item_details">
                            <span class="shop_item_price"><?=$merch_price?>€</span>
                            <buttonn class="btn btn_primary shop_item_btn" type="button">ADD TO CART</buttonn>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </section>

        <!-- Cart section -->
        <section class="container content_section">
            <h2 class="section_header">CART</h2>
            <div class="cart_row">
                <span class="cart_item cart_header cart_column">ITEM</span>
                <span class="cart_price cart_header cart_column">PRICE</span>
                <span class="cart_quantity cart_header cart_column">QUANTITY</span>
            </div>
            <div class="cart_items">
                <!-- <div class="cart_row">
                    <div class="cart_item cart_column">
                        <img class="cart_item_image" src="./images/Shirt.png" width="100">
                        <span class="cart_item_title">T-Shirt</span>
                    </div>
                    <span class="cart_price cart_column">19.99€</span>
                    <div class="cart_quantity cart_column">
                        <input class="cart_quantity_input" type="number" value="1">
                        <button class="btn btn_danger" type="button">REMOVE</button>
                    </div>
                </div>

                <div class="cart_row">
                    <div class="cart_item cart_column">
                        <img class="cart_item_image" src="./images/Album 3.png" width="100">
                        <span class="cart_item_title">Album 3</span>
                    </div>
                    <span class="cart_price cart_column">9.99€</span>
                    <div class="cart_quantity cart_column">
                        <input class="cart_quantity_input" type="number" value="2">
                        <button class="btn btn_danger" type="button">REMOVE</button>
                    </div>
                </div> -->
            </div>

            <div class="cart_total">
                <strong class="cart_total_title">Total</strong>
                <span class="cart_total_price">0.00€</span>
            </div>
            <button class="btn btn_primary btn_purchase" type="button" role="button">PURCHASE</button>
        </section>
            
        
        <?php include("./includes/footer.php") ?>