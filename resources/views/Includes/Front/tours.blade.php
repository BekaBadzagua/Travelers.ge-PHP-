<section class="Tours ">
    <div class="container-center">
        <div class="section-header">
            <h1><a href="#">Tours</a></h1>
            <p>Travel Around The World</p>
        </div>
        <div class="place-cont">

            @foreach ($six_tours as $tour)
                <div class="medium-img">
                    <a href="{{route('show-tour',['id'=>$tour->id])}}">
                        <img src="{{asset('storage/images/tours/'.$tour->img)}}" />
                        <div>
                            <h3 class="withPrice">
                                <span>{{$tour->price}}</span><span>{{$tour->smallprice}}</span><br>
                                {{$tour->name}}
                            </h3>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
</section>
