@extends('admin.templates.base')

@section('mainContent')

    <div class="container">
            <div>
                <p>{{ $Comics['id']}}</p>
                <span>{{ $Comics['title']}}</span>
            </div>
    </div>
@endsection
