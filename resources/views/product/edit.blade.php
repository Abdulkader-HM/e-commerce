@extends('layouts.header')

@section('title')
    Edit page
@endsection

@section('content')
    <center>
        <h1>Edit page</h1>
    </center>

        <center>
            <div id="wrap" class="input">

                <form method="post" action="{{ route('update',$data->id) }}">
                    @csrf
                    @method('PUT')
                    <header class="input-header">
                        <h1>edit Product</h1>
                    </header>
                    <section class="input-content">
                        <div class="input-content-wrap">
                            <dl class="inputbox">
                                <dt class="inputbox-title">Product Name</dt>
                                <dd class="inputbox-content">
                                    <input name="name" type="text" required value="{{ $data->name }}" />
                                </dd>
                            </dl>
                            <dl class="inputbox">
                                <dt class="inputbox-title">Price</dt>
                                    <input name="price" type="number" required  value="{{ $data->price }}"/>
                            </dl>
                            <div class="btns">
                                <button type="submit" class="btn btn-primary">update</button>
                                <a href="{{ route('show') }}" class="btn btn-danger">Back</a>
                            </div>
                        </div>
                    </section>
                </div>
                </form>
        </center>
       
@endsection
