@extends('admin.templates.base')


@section('mainContent')
    <main>
        <table>
            <thead>
                <td>
                    Tabella
                </td>
            </thead>
        </table>



        <div class="container">
            @foreach ($Comics as $link)
                <div class="container_fumetto">
                    <img src="{{ $link['thumb'] }}">
                    <span>{{ $link['series']}}</span>
                </div>
            @endforeach
        </div>
    </main>
@endsection
