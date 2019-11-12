$(document).ready(function () {

    // máscaras
    $('input[name="cep"]').mask("99999-999");
    $('input[name="cpf"]').mask("999.999.999-99");
    $('input[name="cnpj"]').mask('00.000.000/0000-00', { reverse: true });
    var SPMaskBehavior = function (val) {

        var mask = "";

        if (val.replace(/\D/g, '').substring(0,4) == "0800")
        {
            mask = '0000 000 0000';
        }
        else
        {
            if (val.replace(/\D/g, '').length === 11)
            {
                mask = '(00) 00000-0000';
            }
            else
            {
                mask = '(00) 0000-00009';
            }
        }

        return mask;
    },
    spOptions = {
        onKeyPress: function (val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
    };
    $('input[name="telefone"], input[name="telefone2"]').mask(SPMaskBehavior, spOptions);

});

// scroll suave para elemento na página
function scrollMenu(menu) {
    $('body, html').animate({ scrollTop: $('#'+menu).offset().top - 75}, 1500);
}
