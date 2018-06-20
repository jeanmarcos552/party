<?php require_once __DIR__ . "/includes/header.php"; ?>

<p class="btn-success"> Total: <?=count($users)?></p>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#cpf</th>
            <th scope="col">name</th>
            <th scope="col">Instagram</th>
            <th scope="col">Instagram indicado</th>
            <th scope="col">email</th>
            <th scope="col">Permissão</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($users as $user) { ?>
            <tr>
                <th scope="row"><?=$user['cpf']?></th>
                <td><?=$user['name']?></td>
                <td><?=$user['my_instagram']?></td>
                <td><?=$user['indicated_instagram']?></td>
                <td><?=$user['email']?></td>
                <td><?=$user['description']?></td>
            </tr>
        <?php } ?>

    </tbody>
</table>

<?php require_once __DIR__ . "/includes/footer.php"; ?>