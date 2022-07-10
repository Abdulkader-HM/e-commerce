@extends('layouts.header')

@section('title')
    create page
@endsection

@section('content')
    <center>
        <h1>create page</h1>
    </center>

    {{-- <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Product name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Price</label>
          <input type="number" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
      </form> --}}



        <center>
            <div id="wrap" class="input">

            <header class="input-header">
                <h1>Input Products Animation</h1>
            </header>
            <section class="input-content">
                <div class="input-content-wrap">
                    <dl class="inputbox">
                        <dt class="inputbox-title">Product Name</dt>
                        <dd class="inputbox-content">
                            <input id="input0" type="text" required />
                        </dd>
                    </dl>
                    <dl class="inputbox">
                        <dt class="inputbox-title">Price</dt>
                            <input id="input1" type="password" required />
                    </dl>
                    <div class="btns">
                        <button class="btn btn-primary">Sign In</button>
                        <a href="/" class="btn btn-danger">Back</a>
                    </div>
                </div>
            </section>
        </div>
        </center>
       
@endsection
