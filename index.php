<?php include "conn.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Lab 3 </title>
</head>
<body>
<h1> Лабороторна робота </h1>
<form action="1.php" method="get">
    <p><strong> Книги видавництва</strong>
            <select name="publisher">
                <?php
                    $sql = "SELECT DISTINCT publisher FROM $db.LITERATURE";
                    $sql = $dbh->query($sql);
                    foreach ($sql as $cell) {
                        echo "<option> $cell[0] </option>";
                    }
                ?>
            </select>
        <button>ОК</button>
    </p>
</form>

<form action="2.php" method="get">
<p><strong>Книжки, журнали та газети, опубліковані за вказаний часовий період</strong>
        <select name="year_min">
            <?php
                $sql = "SELECT DISTINCT year FROM $db.LITERATURE";
                $sql = $dbh->query($sql);
                foreach ($sql as $cell) {
                    if($cell[0] == 0)
                        continue;
                    else
                        echo "<option> $cell[0] </option>";
                }
                $sql = "SELECT DISTINCT year(date) FROM $db.LITERATURE";
                $sql = $dbh->query($sql);
                foreach ($sql as $cell) {
                    if($cell[0] == 0)
                        continue;
                    else
                        echo "<option> $cell[0] </option>";
                }
            ?>
        </select>
        <select name="year_max">
            <?php
                $sql = "SELECT DISTINCT year FROM $db.LITERATURE";
                $sql = $dbh->query($sql);
                foreach ($sql as $cell) {
                    if($cell[0] == 0)
                        continue;
                    else
                        echo "<option> $cell[0] </option>";
                }
                $sql = "Select distinct year(date) from $db.LITERATURE";
                $sql = $dbh->query($sql);
                foreach ($sql as $cell) {
                    if($cell[0] == 0)
                        continue;
                    else
                        echo "<option> $cell[0] </option>";
                }
                ?>
        </select>
    <button>ОК</button>
</p>
</form>
<form action="3.php" method="get">
<p><strong> Книги автора: </strong>
        <select name="author">
            <?php
                $sql = "SELECT DISTINCT name FROM $db.author";
                $sql = $dbh->query($sql);
                foreach ($sql as $cell) {
                    echo "<option> $cell[0] </option>";
                }
            ?>
        </select>
    <button>ОК</button>
</p>
</form>
</body>
</html>