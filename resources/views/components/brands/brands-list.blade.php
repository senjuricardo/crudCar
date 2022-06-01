<table class="table">

    @if (session('status'))
        dd(session('status')
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
        <th scope="col">name</th>
        <th scope="col">Cars</th>
        <th scope="col">created_at</th>
        <th scope="col">updated_at</th>

        <th scope="col">Actions</th>

    </tr>
    </thead>
    <tbody>
    @foreach($brands as $brand)
        <tr>
            <th scope="row">{{$brand->id}}</th>
            <td>{{$brand->name}}</td>
            <td>@foreach($brand->cars as $car)
                {{$car ->registration}} <br>
            @endforeach</td>

            <td>{{$brand->created_at}}</td>
            <td>{{$brand->updated_at}}</td>
            <td>  <a class="btn btn-success" href="{{url('brands/' . $brand->id)}}">Show</a>
                <a class="btn btn-primary" href="{{url('brands/' . $brand->id . '/edit')}}">Edit</a>
                <form action="{{url('brands/' . $brand->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form> </td>
        </tr>
    @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-center">{{ $brands->links() }}



