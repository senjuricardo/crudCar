@extends('master.main')


@section('content')
    <h1>BRANDS</h1>


    @component('components.brands.brands-list',[
            'brands'=>$brands
    ])
    @endcomponent
@endsection
