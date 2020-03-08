<?php
if (isset($_POST['land']) && isset($_POST['square']) && isset($_POST['population']))
{
    $land = $_POST['land'];
    $square = $_POST['square'];
    $population = $_POST['population'];
    $link = mysqli_connect("localhost", "omukhov", "123", "omukhov");


    //$sql = "INSERT INTO country ( name, square, population) VALUES  ( '$land', '$square', '$population')";
    $sql = "INSERT INTO country ( name, square, population) VALUES  (?, ?, ?)";
    $statement = $link->prepare($sql);
    $statement->bind_param("sss",    $land, $square, $population);
    $statement->execute();
    if (!empty($land) && !empty($square) && !empty($population))
    {
        $result = mysqli_query($link, "select * from country;");
        if($result) {
            // Определяем таблицу и заголовок
            echo "<table border=1>";
            echo "<tr><td>Страна</td><td>Площадь</td><td>Количество проживающих</td></tr>";
            // Так как запрос возвращает несколько строк, применяем цикл
            while($count = mysqli_fetch_array($result))
            {
                echo "<tr><td>".$count['name']."&nbsp;</td><td>".$count['square']."
    &nbsp </td><td>".$count['population']."&nbsp;</td></tr>";
            }
            echo "</table>";
        }
        else {
            echo "<p><b>Error: ".mysqli_error()."</b><p>";
            exit();
        }

        mysqli_close($link);
    }
    else{
        echo 'Введите все значения';
    }
}