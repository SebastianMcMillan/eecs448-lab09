<?php
    error_reporting(E_ALL);
    ini_set("display_errors",1);
    echo "<table>";

    for($row = 0; $row <= 100; $row++){
        echo ("<tr>");
        for($col = 0; $col <= 100; $col++){
            if($row == 0 && $col == 0){
                echo ("<td></td>");
            }
            else if($row == 0 && $col != 0){
                echo("<td>" . $col . "</td>");
            }
            else if($row != 0 && $col == 0){
                echo("<td>" . $row . "</td>");
            }
            else{
                echo("<td>" . $row * $col . "</td>");
            }
        }
        echo ("</tr>");
    }

    echo ("</table>");
?>