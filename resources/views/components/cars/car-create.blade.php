
<div class="col-4 mx-auto mt-5">
    <form method="POST" action="{{ url('cars') }}">
        @csrf
        <div class="form-group">

            <label for="cars">Choose a brand:</label>
            <select name="brand_id" id="brand_id">
                @foreach($brands as $brand)
                    <option

                    value="{{$brand->id}}">{{ $brand->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="name">Registration</label>
            <input
                type="text"
                id="registration"
                name="registration"
                autocomplete="name"
                placeholder="Type you registration"
                class="form-control
            @error('address') is-invalid @enderror"
                value="{{ old('registration') }}"
                required
                aria-describedby="nameHelp">
            <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
            @error('address')
            <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name">Year of Manufacture</label>
            <input
                type="date"
                id="year_of_manufacture"
                name="year_of_manufacture"
                autocomplete="name"
                placeholder="Type your description"
                class="form-control
            @error('description') is-invalid @enderror"
                required>
            <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
            @error('description')
            <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="name">Color</label>
            <textarea
                type="text-area"
                id="color"
                name="color"
                autocomplete="name"
                placeholder="Type your description"
                class="form-control
            @error('description') is-invalid @enderror"
                required> </textarea>
            <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
            @error('description')
            <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
            @enderror
        </div>


        <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
    </form>
</div>
