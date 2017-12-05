@extends('layout')

@section ('contenido')
<h1>Saludos {{$nombre}}</h1>
<h1>Saludos <?php echo $nombre; ?></h1>

<ul>
  @forelse ($consolas as $consola)
      <li>{{$consola}}</li>
  @empty
    <p>No hay consolas</p>
  @endforelse
</ul>

@if (count($consolas)===1)
  <p>Tienes 1 consola</p>
@elseif (count($consolas)>1)
  <p>Tienes varias consolas</p>
@else
  <p>No tienes consolas</p>
@endif

<h1>Saludos para {{$nombre}}</h1>
{!! $html !!}
{!! $script !!}

{{-- Esta sinatxis la uso cuando estoy recibiendo un html, si uso "{{ }}" toma la variable como texto esta sintaxis debe usarse cuando  tenemos confianza de que el contenido que mostraremos es seguro --}}

@stop
