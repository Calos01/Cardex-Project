<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name_category') }}
            {{ Form::text('name_category', $catalogo->name_category, ['class' => 'form-control' . ($errors->has('name_category') ? ' is-invalid' : ''), 'placeholder' => 'Name Category']) }}
            {!! $errors->first('name_category', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>