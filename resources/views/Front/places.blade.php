    
@extends('Layouts.layout')
        
@section('content')

<div class="page-content-heading">
    <h1>PLACES</h1>
    <p><a href="#">Home</a> <span>•</span> Places</p>
</div>

<section class="places ">
    <div class="container-center">
        <div class="place-cont">


            @foreach ($places as $place)
                <a href="{{route('show-place',['id'=>$place->id])}}">
                    <div class="medium-img">
                        <img src="{{asset('storage/images/places/'.$place->img)}}" />
                        <div><h3>{{$place->name}}</h3></div>
                    </div>    
                </a>        
            @endforeach
        </div>

        <div class="centered">
            {{ $places->links() }}
        </div>
    </div>
</section>

@endsection
        