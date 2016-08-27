$(function () {
    var once = true;
    var count = 1;
    var twice = 0;

    $('body').on('mouseover', function () {

        $(':button').each(function () {
            if ($(this).attr('data-toggle') == 'modal') {
                $(this).on('click', function () {
                    once = true;
                    twice = 0;
                })

            } else if ($(this).attr('id') == 'excluir' && twice == 2) {
                twice = twice + 1;
                $(this).on('click', function () {

                    $($(this).attr('data-target')).remove()
                    count = count - 1
                    console.log($(this).attr('data-target'));
                })
            }
        })
        // showAndHide()
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

                $(this).mask('99/99/9999')
            } else if ($(this).attr('tipoinput') == "data-normal") {

                $(this).attr('placeholder', 'DD/MM/YYYY');

                $(this).mask('99/99/9999')

            } else if ($(this).attr('tipoinput') == "data-validade-cartao") {

                $(this).attr('placeholder', 'DD/MM/YYYY');

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

    function showAndHide(efect, speed) {

        $('div').each(function () {
            if ($(this).children('input').attr('hidden')) {
                if (efect == 'show') {
                    $(this).fadeIn(speed)

                } else {

                    $(this).hide(speed)
                }
            }
        })
    }

    function removeHide() {
        $('div').each(function () {
            if ($(this).hasClass('hide')) {
                $(this).removeClass('hide')
            }
        })

    }

    // $(':button').each(function () {
    //     if ($(this).attr('data-toggle') == 'modal') {
    //         $(this).on('click', function () {
    //             once = true;
    //         })
    //
    //     } else if ($(this).attr('id') == 'excluir') {
    //         $(this).on('click', function () {
    //
    //             $($(this).attr('data-target')).remove()
    //             count = count - 1
    //         })
    //     }
    // })

    $('.modal-content').on('mouseover', function () {

        if (once) {

            removeHide()

            showAndHide()
            once = false;

            $('#consulta').on('click', function () {

                showAndHide(null, 'slow')
                var cnpj = $($(this).attr('data-target')).cleanVal();
                var url = $(this).attr('href') + '/' + cnpj

                if (cnpj.length > 1) {

                    $.ajax({
                        url: url,
                        type: 'GET',
                        success: function (retorno) {
                            $(':input').each(function () {
                                if ($(this).attr('readonly')) {
                                    $(this).val('')
                                }
                            })
                            var json = $.parseJSON(retorno);
                            $.each(json, function (key, value) {

                                $(':input').each(function () {

                                    if ($(this).attr('id') == key && $(this).attr('id') != 'cnpj' && $(this).val() == "") {
                                        $(this).val(value)
                                        showAndHide('show', 'slow')
                                        $(this).attr('readonly', true)
                                    }
                                })


                            })
                        }
                    })
                }
            });
            $('#cnpj-btn-submit').on('click', function () {
                count = count + 1
                $('#cnpj-body-table').append('<tr id="cnpj-id-' + count + '"><th>' + count + '</th>')
                $.each($('#form-cnpj').serializeArray(), function (key, value) {
                    if (value.name == 'cnpj' || value.name == 'rz_social') {
                        $('<td>' + value.value + '</td>').appendTo('#cnpj-id-' + count)
                        console.log(value.name + value.value)
                    }

                })

                $('<td> <button type="button" class="btn btn-danger btn-xs" data-target="#cnpj-id-' + count + '" id="excluir"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></td> </tr>').appendTo('#cnpj-id-' + count)

                $('.close').trigger('click')

                return false;
            })


        }


    })

});