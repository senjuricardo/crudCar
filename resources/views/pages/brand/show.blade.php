@extends('master.main')

@section('content')
<div class="col-4 mx-auto mt-4">
    <h1>Show Brand</h1>
    <form method="POST" action="{{ url('brands/' . $brand->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group ">

            <label for="name">ID</label>
            <input
                class="form-control"
                type="text"
                id="id"
                name="id"
                autocomplete="id"
                value="{{$brand->id}}"
                required
                disabled
                aria-describedby="nameHelp">

            <label for="name">Name</label>
            <input
                class="form-control"
                type="text"
                id="name"
                name="name"
                autocomplete="brand"
                value="{{ $brand->name }}"
                disabled
                aria-describedby="nameHelp">

            <label for="name">cars</label>
            @foreach($brand->cars as $car)
                <input
                class="form-control"
                type="text"
                id="name"
                name="name"
                autocomplete="brand"
                value="{{ $car ->registration }}"
            disabled
            aria-describedby="nameHelp">
            @endforeach

            <label for="name">Created at</label>
            <input
                class="form-control"
                type="text"
                id="name"
                name="name"
                autocomplete="brand"
                value="{{ $brand->created_at }}"
                disabled
                aria-describedby="nameHelp">

            <label for="name">Updated at</label>
            <input
                class="form-control"
                type="text"
                id="name"
                name="name"
                autocomplete="brand"
                value="{{ $brand->updated_at }}"
                disabled
                aria-describedby="nameHelp">


        </div>
    </form>
</div>
@endsection
