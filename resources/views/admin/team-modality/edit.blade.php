@extends('layouts.admin')

@section('contenido_admin_title')
    Modalidad - Editar
@stop

@section('contenido_admin')

<div class="row">
    <!--row starts-->
    <div class="col-lg-12">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <button class="close" data-close="alert"></button>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif

        <!--basic form starts-->
        <div class="portlet box blue-hoki">

            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i>Modalidad - Editar
                </div>
            </div>

            <div class="portlet-body form">
                {!! Form::model($tag, ['route' => ['admin.team-modality.update', $tag->id], 'method' => 'PUT', 'class' => 'form-horizontal form-bordered']) !!}

                    <div class="form-group">
                        {!! Form::label('titulo', 'Titulo', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('descripcion', 'Descripción', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'rows' => '3',
                            'onkeydown' => 'limitText(this.form.descripcion,this.form.countdown,220);',
                            'onkeyup' => 'limitText(this.form.descripcion,this.form.countdown,220);']) !!}
                            <span class="help-block">Caracteres permitidos:
                                    <strong>
                                        <input name="countdown" type="text" style="border:none; background:none;" value="220" size="3" readonly id="countdown">
                                    </strong>
                                </span>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('publicar', 'Publicar', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            <label class="checkbox-inline">
                                {!! Form::radio('publicar', '1', null,  ['id' => 'publicar']) !!} Si
                            </label>
                            <label class="checkbox-inline">
                                {!! Form::radio('publicar', '0', null,  ['id' => 'publicar']) !!} No
                            </label>
                        </div>
                    </div>

                    <!-- Form actions -->
                    <div class="form-group">
                        <div class="col-md-12 text-right">
                            {!! Form::submit('Guardar', ['class' => 'btn btn-responsive btn-primary btn-md']) !!}
                            <a href="{{ route('admin.team-modality.index') }}" class="btn btn-responsive btn-default btn-md">Cancelar</a>
                        </div>
                    </div>

                {!! Form::close() !!}
            </div>
        </div>

    </div>
    <!--md-6 ends-->

</div>

@stop

@section('contenido_footer')
@stop