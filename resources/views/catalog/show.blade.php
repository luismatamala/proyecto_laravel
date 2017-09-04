@extends('layouts.master')

@section('content')
  <div class="row">

    <div class="col-sm-4">
      <img src="{{ $arr2['poster'] }}" style="height:200px">
    </div>

    <div class="col-sm-8">
      <h2>{{$arr2['title']}}</h2>
      <b>Año:</b>{{$arr2['year']}}<br>
      <b>Director:</b>{{$arr2['director']}}<br>
      <b>Resumen:</b>{{$arr2['synopsis']}}<br>
      <br>
      <b>Estado</b>
    </div>

  </div>
@stop
