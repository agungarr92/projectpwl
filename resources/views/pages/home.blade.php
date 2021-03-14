@extends('layouts.app')
@section('title', 'Halaman Home')
@section('content')
    Ini adalah halaman home <br/>
    Hello, {!! $name[0] !!} <br/>

    <x-alert thema="success" closeable="true"> 
        Ini adalah alert
    </x-alert>

    <br/>

    @foreach($fruits as $fruit)
        @if($loop->first)
        Ini adalah perulangan pertama <br/>
        @endif
        {{ $fruit }} <br/>
        @if($loop->last)
        Ini adalah perulangan terakhir <br/>
        @endif
    @endforeach

    @php
        $no = 1;
    @endphp

    {{ $no }}
    {!! $fruits[2] !!}

@stop

@section('js')
    <script>
        console.log('Hello');
    </script>
@stop