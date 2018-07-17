$(function(){
    $("#pesquisa").onkeyup(function(){
        var pesquisa = $(this).val();

        if (pesquisa != ''){
            var dados = {
                palavra : pesquisa
            }
            $.post('processa/cadusuarios/busca_usuario.php', dados, function (retorna) {
                $(".reultado").html(retorna);
            });
        }else {
            $(".resultado").html('');
        }
    });
});

$('#checkboxall').change(function () {
    $('.checkboxid').prop("checked", $(this).prop("checked"))
})