<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('catalogo_id') }}
            {{-- aca agrgamos el $catalogos q hicimos con el pluck y cambiamos a Form::select --}}
            {{ Form::select('catalogo_id', $catalogos, $producto->catalogo_id, ['class' => 'form-control' . ($errors->has('catalogo_id') ? ' is-invalid' : ''), 'placeholder' => 'Catalogo Id']) }}
            {!! $errors->first('catalogo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_ingreso') }}
            {{ Form::date('fecha_ingreso', $producto->fecha_ingreso, ['class' => 'form-control' . ($errors->has('fecha_ingreso') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Ingreso']) }}
            {!! $errors->first('fecha_ingreso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_salida') }}
            {{ Form::date('fecha_salida', $producto->fecha_salida, ['class' => 'form-control' . ($errors->has('fecha_salida') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Salida']) }}
            {!! $errors->first('fecha_salida', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('marca') }}
            {{ Form::text('marca', $producto->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('presentacion') }}
            {{ Form::text('presentacion', $producto->presentacion, ['class' => 'form-control' . ($errors->has('presentacion') ? ' is-invalid' : ''), 'placeholder' => 'Presentacion']) }}
            {!! $errors->first('presentacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('lote') }}
            {{ Form::number('lote', $producto->lote, ['class' => 'form-control' . ($errors->has('lote') ? ' is-invalid' : ''), 'placeholder' => 'Lote']) }}
            {!! $errors->first('lote', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_vencimiento') }}
            {{ Form::date('fecha_vencimiento', $producto->fecha_vencimiento, ['class' => 'form-control' . ($errors->has('fecha_vencimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Vencimiento']) }}
            {!! $errors->first('fecha_vencimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('resp_ingreso') }}
            {{ Form::text('resp_ingreso', $producto->resp_ingreso, ['class' => 'form-control' . ($errors->has('resp_ingreso') ? ' is-invalid' : ''), 'placeholder' => 'Resp Ingreso']) }}
            {!! $errors->first('resp_ingreso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('resp_salida') }}
            {{ Form::text('resp_salida', $producto->resp_salida, ['class' => 'form-control' . ($errors->has('resp_salida') ? ' is-invalid' : ''), 'placeholder' => 'Resp Salida']) }}
            {!! $errors->first('resp_salida', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_sin_igv') }}
            {{ Form::number('precio_sin_igv', $producto->precio_sin_igv, ['class' => 'form-control' . ($errors->has('precio_sin_igv') ? ' is-invalid' : ''), 'placeholder' => 'Precio Sin Igv']) }}
            {!! $errors->first('precio_sin_igv', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('area') }}
            {{ Form::text('area', $producto->area, ['class' => 'form-control' . ($errors->has('area') ? ' is-invalid' : ''), 'placeholder' => 'Area']) }}
            {!! $errors->first('area', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant_entrada') }}
            {{ Form::number('cant_entrada', $producto->cant_entrada, ['class' => 'form-control' . ($errors->has('cant_entrada') ? ' is-invalid' : ''), 'placeholder' => 'Cant Entrada']) }}
            {!! $errors->first('cant_entrada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant_salida') }}
            {{ Form::number('cant_salida', $producto->cant_salida, ['class' => 'form-control' . ($errors->has('cant_salida') ? ' is-invalid' : ''), 'placeholder' => 'Cant Salida']) }}
            {!! $errors->first('cant_salida', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        {{-- <div class="form-group">
            {{ Form::label('saldo') }}
            {{ Form::number('saldo', $producto->saldo, ['class' => 'form-control' . ($errors->has('saldo') ? ' is-invalid' : ''), 'placeholder' => $producto->saldo, 'readonly' => 'true'])}}
            {!! $errors->first('saldo', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
