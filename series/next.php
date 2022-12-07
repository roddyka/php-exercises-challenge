
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
        $series_list = $series->NextSerieForTheWeek();
        // print_r($series_list);
    ?>  
    <div class="mother">
    <h3>Next to will Air</h3>
    <a href="index.php">Click to back to all series List</a>
    <div class="movies">
        <div class="item">TITLE</div>
        <div class="item">CHANNEL</div>
        <div class="item">GENDER</div>
        <div class="item">WEEK DAY</div>
        <div class="item">SHOW TIME</div>
    </div>
        <?php  foreach ($series_list as $value) {
            // echo $value['title']."<br>";
            $day = numberToDayString($value['week_day']);
        ?>
            <div class="movies">
                <div class="item"><?php echo $value['title'];?></div>
                <div class="item"><?php echo $value['channel'];?></div>
                <div class="item"><?php echo $value['gender'];?></div>
                <div class="item"><?php echo $day['string'];?></div>
                <div class="item"><?php echo $value['show_time'];?></div>
            </div>
        <?php } ?>
    </div>
</body>
</html>

