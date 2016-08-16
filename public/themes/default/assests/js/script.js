$(function () {

    $('body').on('mouseover', function () {

        $(':input').each(function () {

            if ($(this).attr('tipoinput') == 'cpf') {
                $(this).attr('placeholder', '999.999.999-00');
                $(this).mask('999.999.999-99');
            } else if ($(this).attr('tipoinput') == 'cnpj') {
                $(this).attr('placeholder', '99.999.999/9999-00');
                $(this).mask('99.999.999/9999-00');
            } else if ($(this).attr('tipoinput') == "chassi") {
                $(this).attr('placeholder', '9AAAA99AA99999999');
                $(this).mask('XXXXXXXXXXXXXXXXX', {'translation': {X: {pattern: /[A-Za-z0-9]/}}})
                $(this).keyup(function () {
                    $(this).val($(this).val().toUpperCase())
                })
            } else if ($(this).attr('tipoinput') == "placa") {
                $(this).attr('placeholder', 'AAA-9999');
                $(this).mask('AAA-9999')
                $(this).keyup(function () {
                    $(this).val($(this).val().toUpperCase())
                })
            } else if ($(this).attr('tipoinput') == "ddd") {

                $(this).attr('placeholder', '(99)');
                $(this).mask('(99)')

            } else if ($(this).attr('tipoinput') == "cel") {

                $(this).attr('placeholder', '99999-9999');
                $(this).mask('99999-9999')

            } else if ($(this).attr('tipoinput') == "fone") {

                $(this).attr('placeholder', '9999-9999');
                $(this).mask('9999-9999')

            } else if ($(this).attr('tipoinput') == "data-nascimento") {

                $(this).attr('placeholder', 'DD/MM/YYYY');
                setDateP('#' + $(this).attr('id'), 'nascimento')
                $(this).mask('99/99/9999')
            } else if ($(this).attr('tipoinput') == "data-normal") {

                $(this).attr('placeholder', 'DD/MM/YYYY');
                setDateP('#' + $(this).attr('id'), null)
                $(this).mask('99/99/9999')

            } else if ($(this).attr('tipoinput') == "data-validade-cartao") {

                $(this).attr('placeholder', 'DD/MM/YYYY');
                setDateP('#' + $(this).attr('id'), 'valcartao')
                $(this).mask('99/99/9999')
            } else if ($(this).attr('tipoinput') == "cep") {

                $(this).attr('placeholder', '00000-000');
                $(this).mask('99999-999')
            } else if ($(this).attr('tipoinput') == "renavan") {

                $(this).attr('placeholder', '00000000000');
                $(this).mask('99999999999')
            } else if ($(this).attr('tipoinput') == "num-cartao") {

                $(this).attr('placeholder', '0000 0000 0000 0000');
                $(this).mask('9999 9999 9999 9999')
            }
            // console.log($(this).attr('data'));
        })
    });

    function getDataRedy(dados) {
        var dados = dados.replace('/','');
        dados = dados.replace('-','');
        dados = dados.replace(' ','');
        dados = dados.replace('.','');
        dados = dados.replace('.','');
        return dados
    }

    
    $('#consulta').on('click', function () {

        var cnpj = $($(this).attr('data-target')).val();
        var dados = {'cnpj': getDataRedy(cnpj)};

        $.ajax({
            data: dados,
            url: 'http://www.mettric.com.br/consulta/uriel.php',
            type: 'GET',
            success: function (retorno) {
                console.log(retorno)
            }
        })
    });


});