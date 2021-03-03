@extends('layout')

@section('title', 'Emails')

<h1>Detalle de Emails </h1>

      <div class="alert alert-info" role="alert">
      <h5>Los cupones tienen una vigencia de 5 meses</h5>
      </div>

<div class="tabla_uno">
<table class="table table-bordered table-striped table-hover table-sm">
    <thead>
    <tr>
        <th>Email</th>
        <th>Codigo de Ticket</th>
        <th>Estado</th>
    </tr>
    </thead>
    <tbody>
    @forelse($mail as $item)
        <tr>
            <td>{{ $item->email }}</td>
            <td>{{ $item->ticket }}</td>
            <td>{{(Carbon\Carbon::parse($item->expiration_date)->diffInDays() > 150) ? "Expirado" : "Vigente" }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="100%" style="text-align: center;">
                No se encontraron registros relacionados a el email ingresado
            </td>
        </tr>
    @endforelse
    </tbody>
    </div>

</table>

<a href="{{ route('lista') }}" target="_blank"><h3> Ir al listado de tickets y emails </h3></a>

<style type="text/css">
<!--
.tabla_uno{
width:600px;
position:relative;
float: left;
height: auto;
margin-right: 10px;
}
.tabla_dos{
width:600px;
position:relative;
float: left;
height: auto;
}
.alert{
  width:600px;
}
</style>
