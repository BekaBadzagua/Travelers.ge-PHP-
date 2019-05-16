
@extends('Layouts.layout')
        
@section('content')

    <section class="post-section" style="background:url('{{asset('storage/images/places/'.$place->img)}}');background-position: center;background-repeat: no-repeat;background-size: cover;">
        <div class="container-center">
            <div class="post">
                <h1>{{$place->name}} </h1>
                <div class="post-img">
                    <img src="{{asset('storage/images/places/'.$place->img)}}" />
                </div>
                <div class="post-text">
                    <p>{{$place->text}}</p>
                </div>
                
            </div>
        </div>
    </section>

@endsection
