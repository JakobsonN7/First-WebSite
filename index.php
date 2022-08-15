<?php
require_once 'gora.php';

    $query = "SELECT * FROM artykuly ORDER BY id DESC  LIMIT 10";
    $result = $db->query($query);
//    $art= mysqli_fetch_assoc($result);
 //   var_dump( $art['tytul']);
    //$result = mysqli_query($db, $query) or die("Problemy z odczytem danych!");
    //   var_dump($result);
    

        ?>
<main>
	<div class="row">
        <div class="col-xl-9 col-l-9 col-md-9 col-s-12 col-xs-12 sidebarleft">
    <?php    while($row = mysqli_fetch_row($result))   { ?>
            <a href="artykul.php?id=<?php echo $row['0']; ?>">
                <div class="art">
                    <div class="art-title">
                        <h1><?php echo $row['1']; ?></h1>
                    </div>
                    <div class="art-content">
                        <?php echo $row['4']; ?><br>
                        <?php echo $row['3']; ?>
                    </div>
                    <div class="art-img">
                        <img src="foto/<?php echo $row[5];?>">
                    </div>
                </div>
            </a>
<?php }?>
            
            <div style="clear: both;"></div>
        </div>
        <?php
        require_once 'prawo.php';
        ?>
    </div>
</main>
<?php
require 'dol.php';
exit();
?>