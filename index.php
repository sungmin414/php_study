<?php
function print_title(){
    if (isset($_GET['id'])){
        echo $_GET['id'];
    } else {
        echo "Welcom";
    }
}
function print_description(){
    if(isset($_GET['id'])){
        echo file_get_contents("data/".$_GET['id']);
    } else {
        echo 'Hello, PHP';
    }
}
function print_list(){
    $list = scandir('./data');

    $i = 0;
    while ($i < count($list)) {
        if ($list[$i] != '.'){
            if ($list[$i] != '..'){
        echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
            }
        }
        $i = $i + 1;

    }

    /*
    echo "<li>$list[0]</li>\n";
    echo "<li>$list[1]</li>\n";
    echo "<li>$list[2]</li>\n";
    echo "<li>$list[3]</li>\n";
    echo "<li>$list[4]</li>\n";
    echo "<li>$list[5]</li>\n";
    */
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php
        print_title();
        ?>
    </title>
</head>
<body>
    <?php
        echo date('Y-m-d H:i:s');
    ?>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
    <?php
        print_list();
    ?>
    </ol>
    <h2>
        <?php
        print_title();
        ?>
    </h2>
    <?php
        print_description();
    ?>
</body>
</html>
