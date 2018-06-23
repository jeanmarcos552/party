<?php require_once "includes/header.php"; ?>

<div id="wrapper">

    <?php require_once "sidebar.php"; ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Usuários</h1>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Lista de Usuários
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-users">
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
                                    <th scope="row"><?=$user->getCpf()?></th>
                                    <td><?=$user->getName()?></td>
                                    <td><?=$user->getMyinstagram()?></td>
                                    <td><?=$user->getIndicatedInstagram()?></td>
                                    <td><?=$user->getEmail()?></td>
                                    <td><?=$user->getPermission()?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once "includes/footer.php" ?>