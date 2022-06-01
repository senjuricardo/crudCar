@extends('master.main')


@section('content')
    <h1>Create Car</h1>

    @component('components.cars.car-create',[
         'brands' => $brands
    ])
    @endcomponent
@endsection
