@extends('admin.templates.base')

@section('mainContent')

    <h1>Insert new film</h1>

    <form action="{{ route('houses.store') }}" method="post">
        @csrf   <!-- direttiva importante da inserire -->
        {{-- guardare file per vedere spiegazione route --}}
        {{-- in php artisan route:list --- POST  | houses | houses.store| App\Http\Controllers\HousesController@store | web  --}}
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title">   <!-- name deve corrispondere al nome della colonna del database -->
        </div>

        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description">
        </div>

        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price">
        </div>

            <button>Save</button>
    </form>
@endsection
