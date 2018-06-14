$(document).ready(function () {
    $("#back").hide();
    var selected;

    var project = {
        maskCpf: function (input) {
            $(input).mask('000.000.000-00', {reverse: true});
        },
        tooltip: function (id) {
            $(id).tooltip()
        }
    };

    project.maskCpf('input[name=cpf]');
    project.tooltip('[data-toggle="tooltip"]');


    function validadeCPF(strCPF) {
        var cpf = strCPF.replace(/[^\d]+/g,'');

        var Soma;
        var Resto;
        Soma = 0;
        if (cpf == "00000000000") return false;

        for (i=1; i<=9; i++) Soma = Soma + parseInt(cpf.substring(i-1, i)) * (11 - i);
        Resto = (Soma * 10) % 11;

        if ((Resto == 10) || (Resto == 11))  Resto = 0;
        if (Resto != parseInt(cpf.substring(9, 10)) ) return false;

        Soma = 0;
        for (i = 1; i <= 10; i++) Soma = Soma + parseInt(cpf.substring(i-1, i)) * (12 - i);
        Resto = (Soma * 10) % 11;

        if ((Resto == 10) || (Resto == 11))  Resto = 0;
        if (Resto != parseInt(cpf.substring(10, 11) ) ) return false;
        return true;
    }

    $("body").on("keyup", "form", function(e){
        if (e.which == 13){
            if ($("#next").is(":visible") && $("fieldset.current").find("input, textarea").valid() ){
                e.preventDefault();
                $("#back").fadeIn(3000);
                nextSection();
                return false;
            }
        }
    });

    $("#next").on("click", function(e){
        $("#back").fadeIn(1000);

        var chkArray = [];
        $("input:checked").each(function () {
            chkArray.push($(this).val());
        });

        selected = chkArray;

        console.log(JSON.stringify(selected));

        nextSection();
    });

    $("form").submit(function(){
        var $this = $(this);
        var $insta = $this.find('input[name=insta]');
        var $cpf = $this.find('input[name=cpf]');
        var $email = $this.find('input[name=email]');
        var $url = $this.attr("action");

        if ($email.val() !== '') {
            $($email).css('border', '1px solid green');
        }
        else{
            $($email).css('border', '1px solid red');
        }

        if ($cpf.val() !== '') {
            $($cpf).css('border', '1px solid green');

            if (validadeCPF($cpf.val()) !== true){
                $("#results").html("<p>cpf inválido!</p>");
                $($cpf).css('border', '1px solid red');
            }
            else{
                $("#results").remove();
            }
        }
        else {
            $($cpf).css('border', '1px solid red');
        }

        console.log($cpf.val(), $email.val())

        if ($cpf.val() !== '' && validadeCPF($cpf.val()) === true && $email.val() !== '') {
            $(".sk-folding-cube").show();

            $.ajax({
                method: "POST",
                url: $url + "api/v1/save",
                data: {
                    cpf: $cpf.val(),
                    instagram: $insta.val(),
                    email: $email.val(),
                }
            }).done(function(response) {
                $(".sk-folding-cube").hide();
                console.log(response);
                if (response === '200'){
                    location.href = 'https://www.eventbrite.com.br/e/wurm-tickets-46172290564#/tickets';
                }
                else{
                    alert("Dados inválidos!");
                }
            });
        }

        return false;

    });

    function goToSection(i){
        $("fieldset:gt("+i+")").removeClass("current").addClass("next");
        $("fieldset:lt("+i+")").removeClass("current");
        $("li").eq(i).addClass("current").siblings().removeClass("current");

        setTimeout(function(){
            $("fieldset").eq(i).removeClass("next").addClass("current active");

            if ($("fieldset.current").index() == 0){
                $("#back").fadeOut("slow");
            }

            if ($("fieldset.current").index() == 1){
                $("#next").hide();
                $("input[type=submit]").show();
            } else {
                $("#next").show();
                $("input[type=submit]").hide();
            }
        }, 80);
    }

    function nextSection(){
        var i = $("fieldset.current").index();
        if (i < 2){
            $("li").eq(i+1).addClass("active");
            goToSection(i+1);
        }
    }

    $("#back").on("click", function (e) {
        var $this = $(".current");
        var go = $this.index() - 1;

        if (go >= 0 ) {
            goToSection(go);
        }

    });

    $("li").on("click", function(e){
        var i = $(this).index();

        if ($(this).hasClass("active")){
            goToSection(i);
        }
    });

});
// $('#myModal').on('shown.bs.modal', function () {
//   $('#video video')[0].play();
// })
// $('#myModal').on('hidden.bs.modal', function () {
//   $('#video video')[0].pause();
// })

// $('#video video').click(function(){this.paused?this.play():this.pause();});