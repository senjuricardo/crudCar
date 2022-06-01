@extends('master.main')
@section('content')

<div class="col-4 mx-auto mt-4">
    <h1>Show Car</h1>
    <form method="POST">
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
                value="{{$car->id}}"
                required
                disabled
                aria-describedby="nameHelp">

            <label for="name">Brand</label>
            <input
                class="form-control"
                type="text"
                id="id"
                name="id"
                autocomplete="id"
                value="{{$car->brand->name}}"
                required
                disabled
                aria-describedby="nameHelp">

            <label for="name">Registration</label>
            <input
                class="form-control"
                type="text"
                id="id"
                name="id"
                autocomplete="id"
                value="{{$car->registration}}"
                required
                disabled
                aria-describedby="nameHelp">

            <label for="name">Year of Manufacture</label>
            <input
                class="form-control"
                type="text"
                id="id"
                name="id"
                autocomplete="id"
                value="{{$car->year_of_manufacture}}"
                required
                disabled
                aria-describedby="nameHelp">

            <label for="name">Color</label>
            <input
                class="form-control"
                type="text"
                id="id"
                name="id"
                autocomplete="id"
                value="{{$car->color}}"
                required
                disabled
                aria-describedby="nameHelp">

            <label for="name">created_at</label>
            <input
                class="form-control"
                type="text"
                id="id"
                name="id"
                autocomplete="id"
                value="{{$car->created_at}}"
                required
                disabled
                aria-describedby="nameHelp">

            <label for="name">updated at</label>
            <input
                class="form-control"
                type="text"
                id="id"
                name="id"
                autocomplete="id"
                value="{{$car->updated_at}}"
                required
                disabled
                aria-describedby="nameHelp">
        </div>
    </form>
</div>
@endsection


