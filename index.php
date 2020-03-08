<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>5*</title>

    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="MyStyle.css">
</head>
<body class="container">
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
<form action="script.php" method="POST" class="content">
    <p>Введите страну:<br>
        <input type="text" name="land" /></p>
    <p>Введите площадь:<br>
        <input type="text" name="square" /></p>
    <p>Введите количество проживающих:<br>
        <input type="text" name="population" /></p>
    <input type="submit" value="Отправить"/>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</body>
</html>