    
@extends('Layouts.layout')
        
@section('content')

<div class="page-content-heading">
    <h1>TRAVEL WITH US</h1>
    <p><a href="#">Home</a> <span>•</span> Tours</p>
</div>

<section class="places ">

    <div class="filtration-cont">
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
            <div class="medium-img big-img">
                <img src="images/tests/01-greece.jpg" />
                <div>
                    <h3 class="withPrice">
                        <span>50 Gel</span><span>30 Gel</span><br>
                        Write Down Your Experience
                    </h3>
                </div>
            </div>
            <div class="medium-img big-img">
                <img src="images/tests/02-rome.jpg" />
                <div>
                    <h3  class="withPrice">
                        <span>50 Gel</span><span>30 Gel</span><br>
                        Explore Asian Mountains
                    </h3>
                </div>
            </div>
            
            <hr>


            <!-- WITH NO SALES -->
            <div class="medium-img">
                <img src="images/tests/04-dubai.jpg" />
                <div>
                    <h3  class="withPrice">
                        <span class="no-decoration">50 Gel</span><br>
                        Safe Trip With Airasia
                    </h3>
                </div>
            </div>
            <div class="medium-img">
                <div>
                    <h3  class="withPrice">
                        <span class="no-decoration">50 Gel</span><br>
                        Write Down Your Experience
                    </h3>
                </div>
                <img src="images/tests/05-london.jpg" />
            </div>
            <div class="medium-img">
                <div>
                    <h3  class="withPrice">
                        <span class="no-decoration">50 Gel</span><br>
                        Explore Asian Mountains
                    </h3>
                </div>
                <img src="images/tests/06-australia.jpg" />
            </div>
            <div class="medium-img">
                <img src="images/tests/04-dubai.jpg" />
                <div>
                    <h3  class="withPrice">
                        <span class="no-decoration">50 Gel</span><br>
                        Safe Trip With Airasia
                    </h3>
                </div>
            </div>
            <div class="medium-img">
                <div>
                    <h3  class="withPrice">
                        <span class="no-decoration">50 Gel</span><br>
                        Write Down Your Experience
                    </h3>
                </div>
                <img src="images/tests/05-london.jpg" />
            </div>
            <div class="medium-img">
                <div>
                    <h3  class="withPrice">
                        <span class="no-decoration">50 Gel</span><br>
                        Explore Asian Mountains
                    </h3>
                </div>
                <img src="images/tests/06-australia.jpg" />
            </div>
        </div>

        <div class="centered">
            <ul class="pagination">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
            </ul>            
        </div>



    </div>
</section>	


@endsection