<?php
require_once 'gora.php';
?>
<main>
<div class="row">
    <div class="col-xl-9 col-l-9 col-md-9 col-s-12 col-xs-12 sidebarleft">
        <?php
            $id = $_GET['id'];
            $query = "SELECT * FROM artykuly WHERE id=$id";
            $result = $db->query($query);
            while($row = mysqli_fetch_row($result))
            {
        ?>

        <div class="artyk">
            <div class="artyk-title">
                <?php echo $row['1']; ?>
            </div>
            <div class="artyk-img">
                <img src="foto/<?php echo $row[5];?>">
            </div>
            <div class="artyk-content">
                <?php echo $row['2']; ?>
            </div>
            <div class="artyk-autor">
                <?php echo $row['4']; ?>
            </div>
            <div class="artyk-data">
                <?php echo $row['3']; ?>
            </div>
        </div>

        <?php
        }
        ?>
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