@extends('layouts.frontend')

@section('contenido_body')

        <!-- Start Outter Wrapper -->
<div class="outter-wrapper">
    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=zuFdaUvznmlA.k_T9fFAVsO_U" width="640" height="480"></iframe>
</div>
<!-- End Outter Wrapper -->

<!-- Start Outter Wrapper -->
<div class="outter-wrapper body-wrapper">
    <div class="wrapper ad-pad clearfix">

        <div class="col-3-4">
            <h1>Escribenos</h1>

            <div id="mensaje-enviado" style="display: none;">

                <div class="block-header" style="padding-top: 0;">
                    <h3 class="title">Tu mensaje ha sido enviado.</h3>
                    <div class="description">En breve nos estaremos comunicando contigo.</div>
                </div>

            </div>

            <!-- Start Form -->
            {!! Form::open(['method' => 'POST', 'route' => 'home.contacto.post', 'id' => 'contactForm']) !!}

                <table class="tableless">
                    <tr><td>{!! Form::text('nombre', null, ['placeholder' => 'Nombre (requerido)']) !!}</td></tr>
                    <tr><td>{!! Form::email('email', null, ['placeholder' => 'Email (requerido)']) !!}</td></tr>
                    <tr><td>{!! Form::textarea('mensaje', null, ['placeholder' => 'Mensaje (requerido)']) !!}</td></tr>
                </table>

                <div class="g-recaptcha home" data-sitekey="{{ env('RE_CAP_SITE') }}"></div>

                <a class="btn-2" href="#" id="formContactoSubmit">Enviar mensaje</a>

                <div class="progressForm col-xs-6">
                    <i class="fa fa-2x fa-circle-o-notch fa-spin"></i>
                </div>

            {!! Form::close() !!}

            <div id="response"></div>

            <!-- Finish Main Content -->
        </div>

        <!-- Start Main Sidebar  -->
        <aside class="col-1-4 last">
            <div class="widget">
                <h3>Encuentranos en</h3>
                <ul class="widget-list list-1">
                    <li><a href="#">facebook.com/OrangeBikePeru</a></li>
                    <li>Av. Perú 3893 - SMP</li>
                </ul>
            </div>
        </aside>
        <!-- Finish Sidebar -->

    </div>
</div>

@stop

@section('contenido_footer')
{{-- RECAPTCHA --}}
{!! HTML::script('https://www.google.com/recaptcha/api.js') !!}

{{-- CONTACTO --}}
<script>

    $(document).on("ready", function(){

        $('.progressForm .fa').hide();

        $("#formContactoSubmit").on("click", function(e){

            e.preventDefault();

            var form = $("#contactForm");
            var url = form.attr('action');
            var data = form.serialize();

            $('.progressForm .fa').show();

            $.post(url, data, function(result){
                $('.progressForm .fa').hide();
                $(".contact-content").addClass('alert').addClass('alert-success').text(result.message);
                form.slideUp();
                $('#mensaje-enviado').slideDown();
                form[0].reset();
            }).fail(function(result){
                $('.progressForm .fa').hide();
                console.log(result);
                $(".contact-content").text("Se produjo un error al enviar el mensaje. Intentelo de nuevo más tarde.");

                if(result.status === 422){

                    var errors = result.responseJSON;

                    errorsHtml = '<div class="alert alert-danger"><ul>';
                    $.each( errors, function( key, value ) {
                        errorsHtml += '<li>' + value[0] + '</li>';
                    });
                    errorsHtml += '</ul></di>';

                    $('.contact-content').html(errorsHtml);

                };

            });

        });

    });

</script>
@stop