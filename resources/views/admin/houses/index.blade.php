@extends('admin.templates.base')


@section('mainContent')
    <main>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>description</th>
                    <th>thumb</th>
                    <th>price</th>
                    <th>series</th>
                    <th>sale_date</th>
                    <th>type</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Comics as $item)
                    <tr>
                        <td>{{ $item->id}} </td>
                        <td>{{ $item->title}} </td>
                        <td>{{ $item->description}} </td>
                        <td>{{ $item->thumb}} </td>
                        <td>{{ $item->price}} </td>
                        <td>{{ $item->series}} </td>
                        <td>{{ $item->sale_date}} </td>
                        <td>{{ $item->type}} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection
