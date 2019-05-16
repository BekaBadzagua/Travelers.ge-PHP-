<section class="places ">
    <div class="container-center">
        <div class="section-header">
            <h1><a href="{{route('places')}}">Places</a></h1>
            <p>Choose Your Next Place</p>
        </div>
        <div class="place-cont">

            @foreach ($three_places as $place)
              <div class="medium-img">
                    <a href="{{route('show-place',['id'=>$place->id])}}">
                        <img src="{{asset('storage/images/places/'.$place->img)}}" />
                        <div><h3>{{$place->name}}</h3></div>
                    </a>
                </div>            
            @endforeach


        </div>
    </div>
</section>