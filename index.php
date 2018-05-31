<?php

require __DIR__ . "/vendor/autoload.php";
date_default_timezone_set("America/Sao_Paulo");

use  App\Controller\UserController;

$u = new UserController();
$u->index();
?>


<form method="post">
    <input type="text" name="cpf" placeholder="cpf">
    <input type="text" name="instagram" placeholder="instagram">
    <input type="text" name="participacoes" placeholder="participacoes">
    <input type="submit" value="salvar" name="salvar">
</form>


<!-- <table style="width:100%">
    <tr>
        <th>ID</th>
        <th>cpf</th>
        <th>Instagram</th>
    </tr>
    < ?php
    foreach ($users as $user): ?>
    <tr>
        <td>< ?= $user['id']?></td>
        <td>< ?= $user['cpf']?></td>
        <td>< ?= $user['instagram']?></td>
    </tr>
    < ?php endforeach; ?>


</table> -->

