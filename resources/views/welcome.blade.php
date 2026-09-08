@extends('layout.master')
@section('title', 'Birmingham New Street Station')

@section('content')


    <!-- Lista dei Treni -->
    @foreach ($trains as $train)
        <x-tabella :train=$train />
    @endforeach
@endsection
