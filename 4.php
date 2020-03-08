<!DOCTYPE html>
<html>
<head>
    <title>Four</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="MyStyle.css">
</head>
<body>
<h2>Четвертое задание</h2>
<header class="header">
    <div class="container">
        <div class="header_body">
            <a hre="#" class="header_logo">
                <img src="images/logo.jpg" alt="логотип">
            </a>
            <nav class="header_menu">
                <ul class="header_list">
                    <li><a href="1.php" class="header_link">1</a></li>
                    <li><a href="2.php" class="header_link">2</a></li>
                    <li><a href="4.php" class="header_link">4</a></li>
                    <li><a href="index.php" class="header_link">5*</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<div class="content">
    <?php

    $arr = range(1, 100);
    //$arr = array(1, 1, 2, 3, -51, 12, 12, 12, -51);
    shuffle($arr);
    $k = 0;
    for ($i = 0; $i < count($arr) - 1; $i++) {
        if ($arr[$i] == $arr[$i + 1])
        {
            $k++;
        }
    }
    print_r($arr);

    echo $k; ?>
</div>
</body>
</html>