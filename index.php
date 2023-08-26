<?php 
include("./includes/header.php");
?>

    <body>
        <header class="main_header">
            <?php include("./includes/navigation.php") ?>
            <h1 class="band_name band_name_large">2youK</h1>
            <div class="container">
                <button class="btn btn_header" type="button"><a target="_blank" href="https://www.mixcloud.com/2youkauke/">Get our Latest Album</a></button>
            </div>
            <!-- <button class="btn btn_header btn_play" type="button">&#9658</button> -->
            <iframe class="iframe" width="330px" height="60" src="https://www.mixcloud.com/widget/iframe/?hide_cover=1&mini=1&light=1&feed=%2F2youkauke%2Fthe-signs-of-grooving-gusto%2F" frameborder="0" ></iframe>        </header>
            <section class="content_section container">
                <h2 class="section_header">TOURS</h2>
                <div>

                    <?php 
                    $query = "SELECT * FROM performances WHERE status = 'PUBLISHED'";
                    $select_performances = mysqli_query($connection, $query);

                    while($row = mysqli_fetch_assoc($select_performances)){
                        $tour_date = $row['date'];
                        $tour_city = $row['city'];
                        $tour_arena = $row['place'];
                        ?>
                        <div class="tour_row">
                            <span class="tour_item tour_date"><?=$tour_date?></span>
                            <span class="tour_item tour_city"><?=$tour_city?></span>
                            <span class="tour_item tour_arena"><?=$tour_arena?></span> 
                            <a href="https://www.bilietai.lt/lit/search:dj/" target="_blank"><button class="btn tour_item tour_btn btn_primary" type="button">BUY TICKETS</button></a>
                        </div>
                    <?php } ?>

                </div>
            </section>
        
        <?php include("./includes/footer.php") ?>