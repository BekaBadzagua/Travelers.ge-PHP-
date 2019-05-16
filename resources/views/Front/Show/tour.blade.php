
@extends('Layouts.layout')
        
@section('content')

    <section class="post-section" style="background:url('{{asset('storage/images/tours/'.$tour->img)}}');background-position: center;background-repeat: no-repeat;background-size: cover;">
        <div class="container-center">
            <div class="post">
                <h1>{{$tour->name}} </h1>
                <div class="post-img">
                    <img src="{{asset('storage/images/tours/'.$tour->img)}}" />
                </div>
                <div class="post-text tour-page">
                    <p>{{$tour->text}}</p>
                </div>
                
                <div class="tour-info">
                    <table class="post-table">
                 
                        @if ($tour->smallprice==null)
                            <tr>
                                <th>Price:</th> <td>{{$tour->price}}</td>
                            </tr>
                        @else
                            <tr>
                                <th>Price:</th> <td class="line-through">{{$tour->price}}</td>
                            </tr>
                            <tr>
                                <th>With Sale:</th> <td>{{$tour->smallprice}}</td>
                            </tr>   
                        @endif

                        <tr>
                            <th>Days:</th> <td>{{$tour->days}}</td>
                        </tr>
                        <tr>
                            <th>Physical rating:</th> <td>{{$tour->difficulty}}</td>
                        </tr>
                    </table>

                    <div class="mini-map">
                        {!!$tour->map!!}                    
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
