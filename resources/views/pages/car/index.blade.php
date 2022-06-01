@extends('master.main')


@section('content')
    <h1>Cars</h1>


    @component('components.cars.cars-list',[
            'cars'=>$cars
    ])
    @endcomponent
@endsection
