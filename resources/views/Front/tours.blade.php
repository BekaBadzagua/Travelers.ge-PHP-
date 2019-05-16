    
@extends('Layouts.layout')
        
@section('content')

<div class="page-content-heading">
    <h1>TRAVEL WITH US</h1>
    <p><a href="#">Home</a> <span>•</span> Tours</p>
</div>

<section class="places ">

    <div class="filtration-cont" style="display:none;">
        <div class="container-center clearfix">
            <form action="" method="" class="right ">
                <div class="filter-input-cont">
                    <label>Place:</label>
                    <select name="">
                        <option value="Guria">Guria</option>
                        <option value="Qartli">Qartli</option>
                        <option value="Afxazeti">Afxazeti</option>
                        <option value="Svaneti">Svaneti</option>
                    </select>
                </div>
                <div class="filter-input-cont">
                    <label>Category:</label>
                    <select name="">
                        <option value="Ski_Curort">Ski Curort</option>
                        <option value="Sea">Sea</option>
                        <option value="Mountain">Mountain</option>
                        <option value="Forest">Forest</option>
                    </select>
                </div>
                <div class="filter-input-cont">
                    <input type="submit" value="Search">
                </div>
            </form>
        </div>
    </div>


    <div class="container-center centered">
        <div class="place-cont">
            <!-- WITH SALES -->

            @foreach ($sales as $sale)
                <a href="{{route('show-tour',['id'=>$sale->id])}}">
                    <div class="medium-img big-img">
                        <img src="{{asset('storage/images/tours/'.$sale->img)}}" />
                        <div>
                            <h3 class="withPrice">
                                <span>{{$sale->price}}</span><span>{{$sale->smallprice}}</span><br>
                                {{$sale->name}}
                            </h3>
                        </div>
                    </div>
                </a>
            @endforeach

            
            <hr>


            <!-- WITH NO SALES -->



            @foreach ($tours as $tour)
                <a href="{{route('show-tour',['id'=>$tour->id])}}">
                    <div class="medium-img">
                        <img src="{{asset('storage/images/tours/'.$tour->img)}}" />
                        <div>
                            <h3 class="withPrice">
                                <span class="no-decoration">{{$tour->price}}</span><br>
                                {{$tour->name}}
                            </h3>
                        </div>
                    </div>
                </a>
            @endforeach


        <div class="centered">
            {{ $tours->links() }}
        </div>


    </div>
</section>	


@endsection