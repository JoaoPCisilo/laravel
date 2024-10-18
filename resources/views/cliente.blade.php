<h1>Página do Cliente</h1>
@if(10 > 4)
<p>Resposta Verdadeira</p>
@endif

<p>{{$numero}}</p>
@if ($numero > 0)
<p>Número positivo</p>
@elseif ($numero == 0)
    <p>Número nulo</p>
@else 
    <p>Número negativo</p>
@endif

<p>Exemplo do FOR</p>
@for ($i = 0; $i < count($lanches); $i++)
    <p> {{$lanches[$i]}} - {{$i}} </p>
@endfor

<p>Exemplo do FOREACH</p>
@foreach ($lanches as $lanche)
    <p> {{$loop->index}} </p>
    <p> {{$lanche}} </p>
@endforeach

<p>Exemplo do PHP</p>
@php
    $nome = 'BATATA FRITA';
    echo $nome;
@endphp

<a href="/">Voltar para home</a>