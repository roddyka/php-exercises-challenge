<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/assets/css/style.css">
    <?php  
        require_once('./libs/Series.php'); 
        require_once('./libs/helper.php');
    ?>
</head>
<body> 
    <?php  
        $series = new Series();
        $series_list = $series->serieByTitle($_GET['title']);
    ?>  
    <div class="mother">
    <h3>You are looking for "<?php echo $_GET['title'];?>"</h3>
    <a href="index.php">Click to back to all series List</a>
    <div class="movies">
        <div class="item">TITLE</div>
        <div class="item">CHANNEL</div>
        <div class="item">GENDER</div>
        <div class="item">WEEK DAY</div>
        <div class="item">SHOW TIME</div>
    </div>
        <?php 
            $day = numberToDayString($series_list['week_day']);
        ?>
            <div class="movies">
                <div class="item"><?php echo $series_list['title'];?></div>
                <div class="item"><?php echo $series_list['channel'];?></div>
                <div class="item"><?php echo $series_list['gender'];?></div>
                <div class="item"><?php echo $day['string'];?></div>
                <div class="item"><?php echo $series_list['show_time'];?></div>
            </div>
        <?php ?>
    </div>
</body>
</html>

