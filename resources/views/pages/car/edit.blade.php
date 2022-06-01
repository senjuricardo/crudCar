@extends('master.main')


@section('content')
    <h1>EDIT Car</h1>

    @component('components.cars.cars-edit',[
            'car'=>$car,
            'brands' => $brands

    ])
    @endcomponent
@endsection

