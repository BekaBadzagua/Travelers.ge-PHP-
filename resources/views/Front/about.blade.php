@extends('Layouts.layout')
        
@section('content')
<div class="page-content-heading">
    <h1>ABOUT OUR COMPANY</h1>
    <p><a href="#">Home</a> <span>•</span> About us</p>
</div>

<div class="info container-center">
    <img src="images/tests/hero_bg_2.jpg">
    <div>
        <h1>About Company</h1>
        <p>{{$about->text}}</p>
        </p>
        
        <ul>
            <li><i class="material-icons">check</i>Vitae cumque eius modi expedita</li>
            <li><i class="material-icons">check</i>Totam at maxime Accusantium</li>
            <li><i class="material-icons">check</i>Distinctio temporibus</li>
        </ul>
    </div>
</div>

<div class="team container-center centered">
    <h1>Our Team</h1>
    <div>
        <img src="images/tests/person_1.jpg">
        <h2>Jean McMiller</h2>
        <p>{{$person1->text}}</p>
    </div>
    <div>
        <img src="images/tests/person_2.jpg">
        <h2>Claire Peters</h2>
        <p>{{$person2->text}}</p>
    </div>
    <div>
        <img src="images/tests/person_3.jpg">
        <h2>John Sawyer</h2>
        <p>{{$person3->text}}</p>
    </div>
</div>

<section class="testemonials no-margin">
        <div class="container-center">
            <h1>What People Say</h1>


            <div class="tst-parent">
                <div class="testemonial-img">
                    <img src="images/tests/img_1.jpg" />
                </div>
                <div class="testemonial-text">
                    <p>“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique dolorem quisquam laudantium, incidunt id laborum, tempora aliquid labore minus. Nemo maxime, veniam! Fugiat odio nam eveniet ipsam atque, corrupti porro”</p>
                    <p><span class="silver">~ Freddie Merkuri,</span> <span class="light-red">Traveler</span></p>
                </div>
            </div>


            <div class="tst-parent">
                <div class="testemonial-img">
                    <img src="images/tests/img_2.jpg" />
                </div>
                <div class="testemonial-text">
                    <p>“Tempora aliquid labore minus. Nemo maxime, veniam! Fugiat odio nam eveniet ipsam atque, corrupti porro, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique dolorem quisquam laudantium, incidunt id laborum”</p>
                    <p><span class="silver">~ Davig Gilmour,</span> <span class="light-red">Traveler</span></p>
                </div>
            </div>

            <div class="tst-parent">
                <div class="testemonial-img">
                    <img src="images/tests/img_3.jpg" />
                </div>
                <div class="testemonial-text">
                    <p>“Fugiat odio nam eveniet ipsam atque, corrupti porro, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique dolorem quisquam laudantium, incidunt id laborum, tempora aliquid labore minus. Nemo maxime, veniam! Fugiat odio nam eveniet ipsam atque, corrupti porro”</p>
                    <p><span class="silver">~ Thom York,</span> <span class="light-red">Traveler</span></p>
                </div>
            </div>




            <div class="testemonial-btns">
                <h1>
                    <a class="prev" onclick="plusSlides(-1)"><</a>
                    <a class="next" onclick="plusSlides(1)">></a>
                </h1>
            </div>
        </div>
    </section>

@endsection