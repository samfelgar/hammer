$('#nascimento').mask('00/00/0000');
$('.date').mask('00/00/0000');
$('#cpf').mask('000.000.000-00');
$('#cc_card').mask("0000 0000 0000 0000");
$('#valor').mask("#,##0.00", {reverse: true});
var SPMaskBehavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
}

var spOptions = {
    onKeyPress: function (val, e, field, options) {
        field.mask(SPMaskBehavior.apply({}, arguments), options);
    }
};

$('#telefone').mask(SPMaskBehavior, spOptions);
$('#celular').mask(SPMaskBehavior, spOptions);
