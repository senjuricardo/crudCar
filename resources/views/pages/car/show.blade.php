@extends('master.main')


@section('content')
    <h1>Cars SHOW</h1>


    @component('components.cars.car-show',[
            'car'=>$car
    ])
    @endcomponent
@endsection
