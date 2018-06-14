
<?php require_once __DIR__ ."/../includes/header.php" ?>

<section>
    <!-- <h1>REACH YOUR BALANCE <br>/WURM2018</h1> -->
    <button type="button" class="lightClick" data-toggle="modal" data-target=".bd-example-modal-lg">Comprar</button>

    <div id="myModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <ul id="section-tabs">
                        <li class="current active"><span>1.</span> Seus dados</li>
                        <!-- <li><span>2.</span> Seus dados</li> -->
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

                    <!-- <div id="fieldsets">
                        <fieldset class="current">
                            <div class="sk-folding-cube" style="display: none;">
                                    <div class="sk-cube1 sk-cube"></div>
                                    <div class="sk-cube2 sk-cube"></div>
                                    <div class="sk-cube4 sk-cube"></div>
                                    <div class="sk-cube3 sk-cube"></div>
                            </div>
                            <div id="video">
                                <video >
                                    <source src="assets/video/wurmvideo.mp4" type="video/mp4">
                                </video>
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

                    </div> -->
                </form>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ ."/../includes/footer.php" ?>