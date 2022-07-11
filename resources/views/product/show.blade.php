@extends('layouts.header')

@section('title')
    show page
@endsection

@section('content')
    <center>
        <h1>show page</h1>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">price</th>
                    <th scope="col">action</th>
                    <th scope="col">
                        <a href="{{ route('delete.all') }}" class="btn btn-info">Delete all</a>
                        <a href="{{ route('truncate') }}" class="btn btn-dark">truncate</a>
                    </th>
                </tr>
            </thead>

            @foreach ($products as $item)
            <tbody>
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}$</td>
                    <td>
                        <a href="{{ route('edit',$item->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('delete',$item->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>


            </tbody>
            @endforeach


        </table>

    </center>
@endsection
