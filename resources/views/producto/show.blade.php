@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? 'Show Producto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Catalogo Id:</strong>
                            {{ $producto->catalogo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Ingreso:</strong>
                            {{ $producto->fecha_ingreso }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Salida:</strong>
                            {{ $producto->fecha_salida }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $producto->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Presentacion:</strong>
                            {{ $producto->presentacion }}
                        </div>
                        <div class="form-group">
                            <strong>Lote:</strong>
                            {{ $producto->lote }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Vencimiento:</strong>
                            {{ $producto->fecha_vencimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Resp Ingreso:</strong>
                            {{ $producto->resp_ingreso }}
                        </div>
                        <div class="form-group">
                            <strong>Resp Salida:</strong>
                            {{ $producto->resp_salida }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Sin Igv:</strong>
                            {{ $producto->precio_sin_igv }}
                        </div>
                        <div class="form-group">
                            <strong>Area:</strong>
                            {{ $producto->area }}
                        </div>
                        <div class="form-group">
                            <strong>Cant Entrada:</strong>
                            {{ $producto->cant_entrada }}
                        </div>
                        <div class="form-group">
                            <strong>Cant Salida:</strong>
                            {{ $producto->cant_salida }}
                        </div>
                        <div class="form-group">
                            <strong>Saldo:</strong>
                            {{ $producto->saldo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
