@include('includes.header')

<!-- IMPRIMIR POR PANTALLA -->
<h1>{{ $titulo }}</h1>
<h2><?= $listado[2] ?></h2>
<p>{{ date('Y') }}</p>

<!-- COMENTARIOS -->
<!-- Esto es un comentario HTML -->

<p>{{-- Esto es un comentario --}}</p>

<!-- MOSTRAR SI EXISTE -->
<!-- <?= isset($director) ? $director : 'No hay director' ?> -->
{{ $director ?? 'No hay director' }}

<!-- CONDICIONALES -->
@if($titulo && count($listado) >= 5)
<h1>El título existe y es este: {{ $titulo }} y el listado ES MAYOR A 5</h1>
@elseif($titulo)
<h1>El titulo existe y el listado NO ES MAYOR A 5</h1>
@else
<h1>El titulo no existe</h1>
@endif

<!-- BUCLES -->
@for($i = 0; $i <= 20; $i++)
    El numero es: {{$i}} </br>
@endfor
<hr>

<?php $contador = 1 ?>


@while($contador < 50)

    @if($contador % 2 == 0)
        Numero PAR = {{$contador}} <br>
    @endif
    <?php $contador++ ?>
@endwhile

<hr>

<!-- FOREACH -->
@foreach($listado as $pelicula)
    <p>{{ $pelicula }}</p>
@endforeach

@include('includes.footer')