@extends('layouts.app')

@section('template_title')
    Producto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Producto') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('productos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Catalogo</th>
										<th>Fecha Ingreso</th>
										<th>Fecha Salida</th>
										<th>Marca</th>
										<th>Presentacion</th>
										<th>Lote</th>
										<th>Fecha Vencimiento</th>
										<th>Resp Ingreso</th>
										<th>Resp Salida</th>
										<th>Precio Sin Igv</th>
										<th>Area</th>
										<th>Cant Entrada</th>
										<th>Cant Salida</th>
										<th>Saldo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            {{-- catalogo es la funcion del modelo Producto que trae la relacion
                                                foreign(HasOne) y nos permite traer el name_category del catalogo --}}
											<td>{{ $producto->catalogo->name_category }}</td>
                                            {{-- esto es para q en la tabla no me muestreel id de catalogo sino el name --}}

                                            <td>{{ $producto->fecha_ingreso }}</td>
											<td>{{ $producto->fecha_salida }}</td>
											<td>{{ $producto->marca }}</td>
											<td>{{ $producto->presentacion }}</td>
											<td>{{ $producto->lote }}</td>
											<td>{{ $producto->fecha_vencimiento }}</td>
											<td>{{ $producto->resp_ingreso }}</td>
											<td>{{ $producto->resp_salida }}</td>
											<td>{{ $producto->precio_sin_igv }}</td>
											<td>{{ $producto->area }}</td>
											<td>{{ $producto->cant_entrada }}</td>
											<td>{{ $producto->cant_salida }}</td>
											<td>{{ $producto->saldo}}</td>

                                            <td>
                                                <form action="{{ route('productos.destroy',$producto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('productos.show',$producto->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('productos.edit',$producto->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <script>

                                                </script>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                {!! $productos->links() !!}
            </div>
        </div>
    </div>

@endsection
