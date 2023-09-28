@extends('layout')

@section('content')

<div class="container d-flex align-items-center justify-content-center vh-100">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    <h1>Welcome to my <i>hometask</i></h1>
                </div>
    
                <div class="card-body">
                    <ul>
                        @foreach($urls as $url)
                            <li>
                                <p><a href="{{$url}}"><i>{{$url}}</i></a></p>
                            </li>
                        @endforeach
                    </ul>
                </div>
    
                <div class="card-footer">
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection