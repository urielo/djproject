$(function () {
    var once = true;
    var count = 0;
    var countend = 0;
    var twice = 0;
    var counttel = 0;
    var countmail = 0;
    var countcontact = 0;


    $(document).ajaxStart(function () {
        $('body').prepend('<div class="bgloading" id="loading"></div>')
        $('.modal-content').prepend('<div class="bgloading" id="loading"></div>')
    })

    $(document).ajaxStop(function () {
        $('body').removeClass('bgloading')
        $('.bgloading').remove()
    });


    function validate_cnpj(val) {

        if (val.match(/^\d{2}\.\d{3}\.\d{3}\/\d{4}\-\d{2}$/) != null) {
            var val1 = val.substring(0, 2);
            var val2 = val.substring(3, 6);
            var val3 = val.substring(7, 10);
            var val4 = val.substring(11, 15);
            var val5 = val.substring(16, 18);

            var i;
            var number;
            var result = true;

            number = (val1 + val2 + val3 + val4 + val5);

            s = number;

            c = s.substr(0, 12);
            var dv = s.substr(12, 2);
            var d1 = 0;

            for (i = 0; i < 12; i++)
                d1 += c.charAt(11 - i) * (2 + (i % 8));

            if (d1 == 0)
                result = false;

            d1 = 11 - (d1 % 11);

            if (d1 > 9) d1 = 0;

            if (dv.charAt(0) != d1)
                result = false;

            d1 *= 2;
            for (i = 0; i < 12; i++) {
                d1 += c.charAt(11 - i) * (2 + ((i + 1) % 8));
            }

            d1 = 11 - (d1 % 11);
            if (d1 > 9) d1 = 0;

            if (dv.charAt(1) != d1)
                result = false;

            return result;
        }
        return false;
    }


    $('body').on('mouseover', function () {

        $(':button').each(function () {
            if ($(this).attr('data-toggle') == 'modal') {
                $(this).on('click', function () {
                    once = true;
                    twice = 0;
                })

            } else if ($(this).attr('id') == 'excluir') {
                $(this).on('click', function () {
                    $($(this).attr('data-target')).remove()
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

            } else if ($(this).attr('tipoinput') == "ddd") {

                $(this).attr('placeholder', '99');
                $(this).mask('99')

            } else if ($(this).attr('tipoinput') == "cel") {

                $(this).attr('placeholder', '99999-9999');
                $(this).mask('99999-9999')

            } else if ($(this).attr('tipoinput') == "fone") {

                $(this).attr('placeholder', '9999-9999');
                $(this).mask('9999-9999')

            }else if ($(this).attr('tipoinput') == "telcel") {

                $(this).attr('placeholder', '9999-9999');
                $(this).mask('9999-99999')

            } else if ($(this).attr('tipoinput') == "data-nascimento") {

                $(this).attr('placeholder', 'DD/MM/YYYY');

                $(this).mask('99/99/9999')
            } else if ($(this).attr('tipoinput') == "data-normal") {

                $(this).attr('placeholder', 'DD/MM/YYYY');

                $(this).mask('99/99/9999')


            } else if ($(this).attr('tipoinput') == "cep") {

                $(this).attr('placeholder', '00000-000');
                $(this).mask('99999-999')
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


    $(':button').each(function () {
        if ($(this).attr('data-toggle') == 'modal') {
            $(this).on('click', function () {
                once = true;
                var url = $(this).attr('href')
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function (retorno) {
                        $('.modal-content').html(retorno)
                        $('#cadastros').modal('show');
                        $('#cnpj-btn-enviar').hide()
                        $('.close').on('click',function () {
                            $('.modal-body').empty();
                        })
                        $('#close').on('click',function () {
                            $('.modal-body').empty();
                        })

                    }
                })
                return false

            })

        } else if ($(this).attr('id') == 'excluir') {
            $(this).on('click', function () {

                count = count - 1
            })
        }
    })

    $('.close').on('click', function () {
        $('.model-content').html('');
        twice = 0;
    })

    $('.modal-content').on('mouseover', function () {

        if (once) {

            removeHide()

            showAndHide()
            once = false;

            $('#consulta').on('click', function () {

                showAndHide(null, 'slow')
                var cnpj = $($(this).attr('data-target')).cleanVal();
                var url = $(this).attr('href') + '/' + cnpj
                if (!validate_cnpj($($(this).attr('data-target')).val())) {
                    $('.modal-body').prepend('<div class=" col-md-4 col-md-offset-4 alert-danger" id="msg-erro"> <small style="text-align: center;">CNPJ invalido! </small></div>')
                    $($(this).attr('data-target')).focus()
                } else {
                    $('#msg-erro').hide();

                    $('#cnpj-btn-enviar').show()

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
                }
            });
            $('#cnpj-btn-enviar').on('click', function () {
                count = count + 1

                $('#cnpj-body-table').append('<tr id="cnpj-id-' + count + '"><th>' + count + '</th>')

                $('.modal-content :input').each(function () {
                    if ($(this).attr('name')) {

                        // console.log($(this).attr('name') + ': ' + )

                        $('<input type="hidden" name=cnpj[' + count + '][' + $(this).attr('name') + '] value="' + $(this).val() + '">').appendTo('#cnpj-id-' + count)
                        if (count > 0) {
                            $('#cnpj-table').removeClass('hidden')
                            // $('#cnpj-table').show('slow')
                        } else {
                            $('#cnpj-table').hide('slow')

                        }
                        if ($(this).attr('name') == 'cnpj' || $(this).attr('name') == 'rz_social') {
                            $('<td>' + $(this).val() + '</td>').appendTo('#cnpj-id-' + count)

                        }

                        $('.modal-body').empty()
                    }
                })

                // $.each($('#form-cnpj').serializeArray(), function (key, value) {
                //     $('<input type="hidden" name=cnpj[' + count + '][' + value.name + '] value="' + value.value + '">').appendTo('#cnpj-id-' + count)
                //     if (count > 0) {
                //         $('#cnpj-table').removeClass('hidden')
                //         // $('#cnpj-table').show('slow')
                //     } else {
                //         $('#cnpj-table').hide('slow')
                //
                //     }
                //     if (value.name == 'cnpj' || value.name == 'rz_social') {
                //         $('<td>' + value.value + '</td>').appendTo('#cnpj-id-' + count)
                //
                //     }
                //
                // })

                $('<td> <button type="button" class="btn btn-danger btn-xs" data-target="#cnpj-id-' + count + '" id="excluir"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></td> </tr>').appendTo('#cnpj-id-' + count)

                $('.close').trigger('click')

                return false;
            })
            $('#end-btn-enviar').on('click', function () {
                countend = countend + 1

                $('#end-body-table').append('<tr id="end-id-' + countend + '"><th>' + countend + '</th>')

                $('.modal-content :input').each(function () {

                    if ($(this).attr('name')) {

                        $('<input type="hidden" name=endereco[' + countend + '][' + $(this).attr('name') + '] value="' + $(this).val() + '">').appendTo('#end-id-' + countend)

                        if (countend > 0) {
                            $('#end-table').removeClass('hide')
                        } else {
                            $('#end-table').hide('slow')

                        }
                        $('<td>' + $(this).val() + '</td>').appendTo('#end-id-' + countend)


                        $('.modal-body').empty()
                    }
                })


                $('<td> <button type="button" class="btn btn-danger btn-xs" data-target="#end-id-' + countend + '" id="excluir"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></td> </tr>').appendTo('#end-id-' + countend)

                $('.close').trigger('click')

                return false;
            })
            $('#contac-btn-enviar').on('click', function () {
                countcontact = countcontact + 1

                $('#contato-body-table').append('<tr id="conta-id-' + countcontact + '"><th>' + countcontact + '</th>')

                $('.modal-content :input').each(function () {

                    if ($(this).attr('name')) {

                        $('<input type="hidden" name=contato[' + countcontact + '][' + $(this).attr('name') + '] value="' + $(this).val() + '">').appendTo('#conta-id-' + countcontact)

                        if (countcontact > 0) {
                            $('#contato-table').removeClass('hide')
                        } else {
                            $('#contato-table').hide('slow')

                        }
                        if ($(this).attr('name') == 'nome_contato' || $(this).attr('name') == 'departamento') {

                            $('<td>' + $(this).val() + '</td>').appendTo('#conta-id-' + countcontact)
                        }


                        $('.modal-body').empty()
                    }
                })


                $('<td> <button type="button" class="btn btn-danger btn-xs" data-target="#conta-id-' + countcontact + '" id="excluir"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></td> </tr>').appendTo('#conta-id-' + countcontact)

                $('.close').trigger('click')

                return false;
            })
            $('#busca-cep').on('click', function () {
                var buscacep = $(this)
                var cep = ($($(this).attr('data-target-cep')).val()).replace('-', '')
                var settings = {
                    "async": true,
                    "crossDomain": true,
                    "url": "https://viacep.com.br/ws/" + cep + "/json/",
                    "method": "GET",
                    "dataType": "jsonp",
                }

                $.ajax(settings).done(function (response) {

                    if (!response.erro) {
                        $(buscacep.attr('data-target-logr')).val(response.logradouro)
                        $(buscacep.attr('data-target-muni')).val(response.localidade)
                        $(buscacep.attr('data-target-uf')).val(response.uf)
                        $(buscacep.attr('data-target-bair')).val(response.bairro)
                    }


                });
            })
            $('#add-tel').on('click', function () {
                counttel = counttel + 1

                var divtel = '<div class="col-md-5 col-xs-5 col-sm-5" id="tel-' + counttel + '"> <div class="row" >' +
                    '<div class="form-group form-group-sm col-md-3">' +
                    '<label for="" class="label label-default">DDD </label>' +
                    '<input class="form-control" id="tel-ddd-' + counttel + '" name="telefone][' + counttel + '][ddd]" type="text" tipoinput="ddd" value="">' +
                    '</div>' +
                    '<div class="form-group form-group-sm col-md-4">' +
                    '<label for="" class="label label-default">Numero</label>' +
                    '<input class="form-control" id="tel-num-' + counttel + '" name="telefone][' + counttel + '][numero]" type="text" tipoinput="telcel" value="">' +
                    '</div>' +
                    '<div class="input-group input-group-sm col-md-5">' +
                    '<label for="" class="label label-default">Tipo de telefone</label>' +
                    '<input class="form-control" id="tel-tipo-' + counttel + '" name="telefone][' + counttel + '][tipo]" type="text" value="">' +
                    '<span class="input-group-btn" style="padding-top: 20px;">' +
                    '<button type="button" class="btn btn-danger btn-xs" data-target="#tel-' + counttel + '" id="excluir" > <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button>' +
                    '</span>' +
                    '</div>' +
                    '</div>' +
                    '</div> '


                $($(this).attr('data-target')).append(divtel)
            })
            $('#add-mail').on('click', function () {
                countmail = countmail + 1

                var divmail = '<div class="col-md-7 col-xs-7 col-sm-7" id="mail-' + countmail + '">' +
                    '<div class="row">' +
                        '<div class="col-md-7 col-xs-7 col-sm-7">' +
                            '<div class="form-group form-group-sm">' +
                                '<label for="" class="label label-default">E-mail </label>' +
                                '<input class="form-control" id="email-' + countmail + '" name="email][' + countmail + '][email]" type="email" value="">' +
                            '</div>' +
                        '</div>' +
                        '<div class="col-md-5 col-xs-5 col-sm-5">' +
                            '<div class="input-group input-group-sm">' +
                                '<label for="" class="label label-default">Tipo de email</label>' +
                                '<input class="form-control" id="tipo-' + countmail + '" name="email][' + countmail + '][tipo]" type="text" value="">' +
                                '<span class="input-group-btn" style="padding-top: 20px;">' +
                                    '<button type="button" class="btn btn-danger btn-xs" data-target="#mail-' + countmail + '" id="excluir" > <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button>' +
                                '</span>' +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                            '</div>'


                $($(this).attr('data-target')).append(divmail)
            })


        }


    })

});