<!DOCTYPE html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
///hidden sirve para acultar algo
?>

<html>
    
    <body>
        <form method="post" action="..//controllers/UsersControllers.php">
            <input type="hidden" name="action" value="update">
            <input type="text" name="inputId">
            <input type="text" name="inputUsername">
            <input type="text" name="inputPassword">
            <input type="submit" name="editar">
        </form>
    </body>
</html>
