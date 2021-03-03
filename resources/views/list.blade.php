@extends('layout')


@section('title', 'Listado de tickets y emails')


<div class="container">

<div>
<h3> Lista de emails </h3>

        <div class="tabla_dos">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach($emails as $item)
                    <tr>
                        <td>{{ $item->email }}</td>
                    <tr>
                @endforeach
                </tbody>
        </div>
        </table>
        </div>

        <div>
        <h3> Lista de tickets</h3>

          <div class="tabla_dos">
          <table class="table table-bordered table-hover">
              <thead>
              <tr>
                  <th>Codigo</th>
              </tr>
              </thead>
              <tbody>
              @foreach($tickets as $item)
                  <tr>
                      <td>{{ $item->ticket }}</td>
                  <tr>
              @endforeach
              </tbody>
            </div>
          </table>
        </div>

</div>

<style type="text/css">
<!--
.tabla_uno{
width:600px;
margin: 2%;
position:relative;
float: left;
height: auto;
margin-right: 10px;
}
.tabla_dos{
width:500px;
margin: 2%;
position:relative;
float: left;
height: auto;
}
.alert{
  width:600px;
}
</style>
