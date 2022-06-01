<table class="table">
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">brand</th>
        <th scope="col">Registration</th>
        <th scope="col">Year of Manufacture</th>
        <th scope="col">Color</th>
        <th scope="col">created_at</th>
        <th scope="col">updated_at</th>

        <th scope="col">Actions</th>

    </tr>
    </thead>
    <tbody>
    @foreach($cars as $car)
        <tr>
            <th scope="row">{{$car->id}}</th>
            <td>{{$car->brand->name}}</td>
            <td>{{$car->registration}}</td>
            <td>{{$car->year_of_manufacture}}</td>
            <td>{{$car->color}}</td>
            <td>{{$car->created_at}}</td>
            <td>{{$car->updated_at}}</td>
            <td>  <a class="btn btn-success" href="{{url('cars/' . $car->id)}}">Show</a>
                <a class="btn btn-primary" href="{{url('cars/' . $car->id . '/edit')}}">Edit</a>
                <form action="{{url('cars/' . $car->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form> </td>
        </tr>
    @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-center">{{ $cars->links() }}



