@extends('plantillas.ptienda')
@section('titulo', 'Mis compras')
@section('contenido')
<div class="page-head_agile_info_w3l page-head_agile_info_w3l-2">

</div>
<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">
        <div class="container">
            <ul class="w3_short">
                <li>
                    <a href="{{ route('inicio') }}">Inicio</a>
                    <i>|</i>
                </li>
                <li>Mis compras</li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
<div class="table-responsive">
    <table class="table table-condensed">
        <thead>
            <tr>
                <th style="width:10px">#</th>
                <th>Codigo Factura</th>
                <th>Hora y fecha de transacción</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Total</th>
                <th>Comprador</th>
                <th>Vendido por</th>
                
                

            </tr>
        </thead>
        <tbody>
            @foreach ($facturacion as $key => $value)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $value->codigoLetra}} {{ $value->codigoFactura}} </td>
                    <td>{{ $value->fecha}}</td>
                    <td>{{ $value->nombreProducto }}</td>
                    <td>{{ $value->cantidad }}</td>
                    <td>{{ $value->precio }}</td>
                    <td>{{ $value->precioTotal }}</td>
                    <td>{{ $value->name}}</td>
                    <td>{{ $value->nombreEmpresa }}</td>
                    
                </tr>
            @endforeach

        </tbody>
        
    </table>
    {{$facturacion -> links()}}
  </div>
</div>
@endsection