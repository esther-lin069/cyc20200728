<?php
    $scores = [100,98,55,90];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul><?php
            for( $i = 1 ; $i < 3 ; $i++){
                echo "<li> $i </li>";
            }
        ?>
        <hr>
        <?php for( $i = 1 ; $i < 5 ; $i++){?>
            <li><?= $i ?></li>
        <?php }?>
        <hr>
        <?php foreach($scores as $score){?>
            <li><?= $score ?></li>
        <?php }?>
        <hr>
        <?php
            foreach($scores as $score){
                if($score < 60)
                    echo ("<li style='color:red;'>$score</li>");
                else
                    echo "<li> $score </li>"; 
            }            
        ?>
        <hr>
        <?php foreach($scores as $score){?>
            <li class="<?=(($score > 60)? "" :"faild" )?>"><?= $score ?></li>
        <?php }?>


    </ul>
</body>
<style>
.faild{
    color:red;
}
</style>
</html>