@extends('master.main')


@section('content')
    <h1>EDIT Brand</h1>

    @component('components.brands.brands-edit',[
            'brand'=>$brand
    ])
    @endcomponent
@endsection

