@extends('layouts.header')

@section('title')
    show posts
@endsection

@section('content')
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            margin: 0;
            background: linear-gradient(45deg, #49a09d, #5f2c82);
            font-family: sans-serif;
            font-weight: 100;
        }

        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        table {
            width: 800px;
            border-collapse: collapse;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 15px;
            background-color: rgba(255, 255, 255, 0.2);
            color: #fff;
        }

        th {
            text-align: left;
        }

        thead {
            th {
                background-color: #55608f;
            }
        }

        tbody {
            tr {
                &:hover {
                    background-color: rgba(255, 255, 255, 0.3);
                }
            }

            td {
                position: relative;

                &:hover {
                    &:before {
                        content: "";
                        position: absolute;
                        left: 0;
                        right: 0;
                        top: -9999px;
                        bottom: -9999px;
                        background-color: rgba(255, 255, 255, 0.2);
                        z-index: -1;
                    }
                }
            }
        }
    </style>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th> title</th>
                    <th> Discription</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>
                        <a href="{{ route('delete') }}" class="btn btn-block">return</a>
                    </th>
                </tr>
            </thead>
            @foreach ($posts as $post)
           
            <tbody>
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->discription }}</td>
                    <td><a href="{{ route('posts.edit',$post->id) }}" class="btn btn-secondary">Edit</a></td>
                    <td>
                        <form method="post" action="{{ route('posts.destroy',$post->id) }}">
                            @method('DELETE')
                            @csrf

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>

            </tbody>
            @endforeach
        </table>
    </div>
@endsection
