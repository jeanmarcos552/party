
<?php require_once __DIR__ ."/../includes/header.php" ?>

<section>
    <!-- <h1>REACH YOUR BALANCE <br>/WURM2018</h1> -->
    <button type="button" class="lightClick" data-toggle="modal" data-target=".bd-example-modal-lg">Comprar</button>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <ul id="section-tabs">
                        <li class="current active"><span>1.</span> Descrição</li>
                        <li><span>2.</span> Wurm</li>
                        <li><span>3.</span> Seus dados</li>
                    </ul>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form id="signup" method="POST" action="<?= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">

                    <div id="fieldsets">
                        <fieldset class="current">
                            <div class="sk-folding-cube" style="display: none;">
                                    <div class="sk-cube1 sk-cube"></div>
                                    <div class="sk-cube2 sk-cube"></div>
                                    <div class="sk-cube4 sk-cube"></div>
                                    <div class="sk-cube3 sk-cube"></div>
                            </div>
                            <p>
                                Você está comprando o <b>"lote beta"</b> ou <b>"lote teste",</b>
                                essa parte dos convites é voltada para pessoas que estão dispostas a
                                colaborar com as mudanças que vamos implementar.
                            </p>
                            <p>
                                O fluxo de compra pode ser um pouco diferente, talvez entremos em <b>contato com você </b>para saber sua opnião,
                                pode ser que mudemos algumas coisas nos lotes posteriores, etc. <br>
                            </p>

                            <p>
                                Temos desafios que só podemos superar com a ajuda dos nossos convidados
                                e já está passando da hora do mercado mudar novamente.
                            </p>
                        </fieldset>

                        <fieldset class="next">
                            <div class="row">
                                <?php foreach ($events as $key => $event): ?>
                                        <label class="contentBoolean">
                                            <input type="checkbox" name="<?= $key ?>" class="contentBoolean__checkbox" value="<?= $key ?>" />
                                            <div class="contentBoolean__content">
                                                <div class="imageAspectRatio">
                                                    <img src="./assets/img/<?= $event ?> " alt="<?= $key ?>" class="imageAspectRatio__image" />
                                                </div>
                                                <div class="contentBoolean__content">
                                                    <?= $key ?>
                                                </div>
                                            </div>
                                        </label>
                                <?php endforeach; ?>
                            </div>
                        </fieldset>

                        <fieldset class="next">
                            <label>
                                <span>Digite o Instagram do amigo que te indicou a <b>WURM</b></span>
                                <input type="text" name="insta" id="name5" placeholder="insta do amigo(a)" class="form-control" data-toggle="tooltip" data-placement="top" title="A indicação NÃO pode ser o seu próprio perfil do Instagram.">
                            </label>

                            <label>
                                <span>Comprador, digite aqui seu <b>CPF:</b></span>
                                <input type="text" name="cpf" placeholder="CPF do comprador" class="form-control" >
                            </label>
                            <div id="results" style="color: red;"></div>
                        </fieldset>

                        <a class="btn" id="back"><i class="fas fa-arrow-alt-circle-left"></i> Voltar</a>

                        <a class="btn" id="next">Próximo <i class="fas fa-arrow-alt-circle-right"></i></a>
                        <input type="submit" class="btn" value="Enviar">

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ ."/../includes/footer.php" ?>