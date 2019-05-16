<section class="slider">



    @foreach ($sliders as $slider)
        <div class="mySlides">
            <div><img src="{{asset('storage/images/slider/'.$slider->img)}}" /></div>
            <div class="slider-content">
                <div>
                    <h1>{{$slider->header}}</h1>
                    <p>{{$slider->text}}</p>
                </div>
    
            </div>
        </div>
    @endforeach

    <div class="slider-btn-cont">
        <a class="slider-btn" onclick="plusMainSlides(-1)"><</a>
        <a class="slider-btn right" onclick="plusMainSlides(1)">></a>
    </div>

</section>

