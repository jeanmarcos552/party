<button type="button" class="lightClick" data-toggle="modal" data-target=".bd-example-modal-lg">Comprar</button>

<div id="myModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <ul id="section-tabs">
                    <!-- <li class="current active"><span>1.</span> Login</li> -->
                    <li class="current active"><span>1.</span> Seus dados</li>
                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form id="signup" method="POST" action="<?=$url?>">

                <div id="fieldsets">
                    <!--<fieldset class="current instagram-login">
                        next
                    </fieldset>-->

                    <fieldset class="current">
                        <label class="ui search">
                            <span>Comprador, quem te indicou?</span>
                            <input class="prompt" name="insta" type="text" placeholder="@instagram do amigo(a)" autocomplete="off">
                            <div class="results"></div>
                        </label>

                        <label>
                            <span>Comprador, digite aqui seu <b>E-mail:</b></span>
                            <input type="email" name="email" placeholder="E-mail do comprador" class="prompt-others"  autocomplete="off">
                        </label>

                        <label>
                            <span>Comprador, digite aqui seu <b>CPF:</b></span>
                            <input type="text" name="cpf" placeholder="CPF do comprador" class="prompt-others" autocomplete="off">
                        </label>
                        <div id="results" style="color: red;"></div>
                    </fieldset>

                    <!-- <a class="btn" id="back"><i class="fas fa-arrow-alt-circle-left"></i> Voltar</a>
                    <a class="btn" id="next">Próximo <i class="fas fa-arrow-alt-circle-right"></i></a> -->

                    <input type="submit" class="btn-submit" value="Enviar">
                </div>
            </form>
        </div>
    </div>
</div>