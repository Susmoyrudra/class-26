<?php
     include_once '../model/db_config.php';

    $sql = "SELECT * FROM sub_categories ORDER BY sub_cat_id DESC";
    $execute = mysqli_query($link,$sql);
    if($execute->num_rows>0){
        while($row=$execute->fetch_assoc()){
            echo '<tr>';
            //  echo '<td> '.'Edit'.'</td>'
             echo '<td class >'.$row['cat_type_name'].'</td>';
             echo '<td class >'.$row['cat_type_code'].'</td>';
               echo '<td> <a target ="__blank" href ="edit.php?id=".$row["sub_cat_id"].">'.'Edit'.'</a></td>';
               echo '<td> <a class="btn btn-primary " id ="'.$encryption.'" href="#">'.'Delete'.' </a> </td>';
                echo '</tr>';
        }
    }
?>
               
 