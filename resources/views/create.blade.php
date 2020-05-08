@extends('main')
@section('content')
    <div class="container mt-3">

        <form>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="name" class="form-control" id="name" aria-describedby="name" placeholder="Name" name="fname">

    </div>

            <div class="form-group">
                <label for="surname">SurName</label>
                <input type="surname" class="form-control" id="surname" aria-describedby="surname" placeholder="SurName" name="sur_name">

            </div>

            <div class="form-group">
        <label for="position">Position</label>
        <input type="position" class="form-control" id="position" placeholder="Position" name="pos">
    </div>

            <div class="form-group">
                <label for="num">Number</label>
                <input type="num" class="form-control" id="num" aria-describedby="num" placeholder="Number" name="num">

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
@endsection
