@extends('master.main')


@section('content')
    <h1>BRANDS SHOW</h1>


    @component('components.brands.brands-show',[
            'brand'=>$brand
    ])
    @endcomponent
@endsection
