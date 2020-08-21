<?php
$scoreList = [100,95,55,90];

//test
// $obj = (object)["test" => 100];
// //obj = {"score":100} 這樣的寫法不行
// echo $obj->test;

$viewModel = [];

foreach($scoreList as $score){
    $student = (object)["score" => $score, "style" => "pass"];
    if($score < 60){
        $student->style = "faild";
    }
    $viewModel[] = $student;
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($viewModel as $student){?>
        <li class="<?= $student->style?>"><?= $student->score?></li>
        <?php } ?>
    </ul>
</body>

<style>
    .pass{

    }
    .faild{
        color:red;
    }
</style>
</html>