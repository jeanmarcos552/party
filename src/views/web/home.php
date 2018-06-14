
<?php require_once __DIR__ ."/../includes/header.php" ?>

<section>
    <?php var_dump($user_info); ?>
    <a href="<?= $login_url ?>">Login with Instagram</a>

    <button type="button" class="lightClick" data-toggle="modal" data-target=".bd-example-modal-lg">Comprar</button>

    <div id="myModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <ul id="section-tabs">
                        <li class="current active"><span>1.</span> Seus dados</li>
                    </ul>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form id="signup" method="POST" action="<?=$url?>">
                    <label>
                        <span>Digite o Instagram do amigo que te indicou a <b>WURM</b></span>
                        <input type="text" name="insta" id="name5" placeholder="insta do amigo(a)" class="form-control" data-toggle="tooltip" data-placement="top" title="A indicação NÃO pode ser o seu próprio perfil do Instagram.">
                    </label>

                    <label>
                        <span>Comprador, digite aqui seu <b>E-mail:</b></span>
                        <input type="email" name="email" placeholder="E-mail do comprador" class="form-control" >
                    </label>

                    <label>
                        <span>Comprador, digite aqui seu <b>CPF:</b></span>
                        <input type="text" name="cpf" placeholder="CPF do comprador" class="form-control" >
                    </label>
                    <div id="results" style="color: red;"></div>
                    <input type="submit" class="btn" value="Enviar" style="display: block;">

                </form>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ ."/../includes/footer.php" ?>