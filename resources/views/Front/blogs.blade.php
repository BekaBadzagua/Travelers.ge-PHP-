@extends('Layouts.layout')
        
@section('content')
<div class="page-content-heading">
    <h1>BLOG POSTS</h1>
    <p><a href="#">Home</a> <span>•</span> Blog</p>
</div>

<section class="blog">
        <div class="container-center">
            <div class="section-header">
                <h1><a href="#">Our Blog</a></h1>
                <p>Our Daily News & Updates</p>
            </div>

            @foreach ($blogs as $blog)
                <div class="mini-blog">
                    <img src="{{asset('storage/images/blogs/'.$blog->img)}}" />
                    <a href="{{route('show-blog',['id'=>$blog->id])}}">{{$blog->name}}</a>
                    <p class="author-p">by Admin • {{$blog->created_at}}</p>
                    <p class="mini-blog-p">{{$blog->text}}</p>
                </div>            
            @endforeach
            <div class="centered">
                {{ $blogs->links() }}
            </div>
        </div>
    </section>

@endsection