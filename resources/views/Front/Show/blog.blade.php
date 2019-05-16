@extends('Layouts.layout')
        
@section('content')

<section class="post-section" style="background:url('{{asset('storage/images/blogs/'.$blog->img)}}');background-position: center;background-repeat: no-repeat;background-size: cover;">
    <div class="container-center">
        <div class="post">
            <h1>{{$blog->name}}</h1>
            <div class="post-img">
                <img src="{{asset('storage/images/blogs/'.$blog->img)}}" />
            </div>
            <div class="post-text">
                <p>{{$blog->text}}</p>
            </div>
            
        </div>
    </div>

</section>

@endsection



