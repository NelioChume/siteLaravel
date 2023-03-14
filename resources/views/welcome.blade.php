@extends('layouts.main')

@section('title', 'NAC Events')

@section('content')
        <h1> Algum tema </h1>
         <img src="/img/strategy-meeting-agenda.jpg" alt="Banner" />
        @if(10 < 5)
            <p> True </p>
        @endif

         <p>{{ $nome }}</p>
          
        @if($nome == "Nelio")
            <p> O nome eh Nelio </p>
        @elseif($nome == "Chume")
            <p> O nomee eh {{ $nome }} e ele tem {{ $idade }} anos, e trabalha como {{ $profissao }}  </p>
        @else
            <p> O nome nao eh Nelio </p>
        @endif
            <p>Valor - Indice </p>
        @for($i = 0; $i < count($arr); $i++)
            <p> {{ $arr[$i] }} - {{ $i }} </p>
        @endfor

        @php
            echo 'Ibrahimovic'; 
        @endphp

@endsection
