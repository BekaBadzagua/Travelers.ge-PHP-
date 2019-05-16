<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title>Travelers</title>

        <!-- Icons-->
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/Bootstrap/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/Style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/Layout.css') }}">
        <link rel="stylesheet" href="{{ asset('css/Home.css') }}">
        <link rel="stylesheet" href="{{ asset('css/About.css') }}">        
        <link rel="stylesheet" href="{{ asset('css/Auth.css') }}">
        <link rel="stylesheet" href="{{ asset('css/Contact.css') }}">        
        <link rel="stylesheet" href="{{ asset('css/Post.css') }}">
        <link rel="stylesheet" href="{{ asset('css/Responsive.css') }}">
        
    </head>
    <body>
        
        <header>
            <nav class="main-nav">
                <div id="logo">
                    <h1><a href="{{route("main")}}">Travelers</a></h1>
                </div>
                <div class="nav">
                    <ul class="nav-list">
                        <li><a class="active" href="{{route("main")}}">Home</a></li>
                        <li><a href="{{route("places")}}">Places</a></li>
                        <li><a href="{{route("tours")}}">Tours</a></li>
                        <li><a href="{{route("about")}}">About</a></li>
                        <li><a href="{{route("blogs")}}">Blog</a></li>
                        <li><a href="{{route("contact")}}">Contact</a></li>
                    </ul>
    
                    <ul class="nav-icon-list right">
                        <li><a href="#"><span class="fa fa-twitter icon-small"></span></a></li>
                        <li><a href="https://www.facebook.com/BlueSky-685628701869638/" target="_blank"><span class="fa fa-facebook-f icon-small"></span></a></li>
                        <li><a href="#"><span class="fa fa-instagram icon-small"></span></a></li>
                    </ul>
                </div>
            </nav>
        </header>
    
    
        <div>
            @yield('content')
        </div>
    
          
    
            
  
    
        <footer>
            <div class="container-center">
                <div class="footer-row1">
                    <div>
                        <h3>About</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe pariatur reprehenderit vero atque, consequatur id ratione, et non dignissimos culpa? Ut veritatis, quos illum totam quis blanditiis, minima minus odio!</p>
                    </div>
                    <div>
                        <h3>Navigations</h3>
                            <ul>
                                <li><a href="{{route("main")}}">Home</a></li>
                                <li><a href="{{route("places")}}">Places</a></li>
                                <li><a href="{{route("tours")}}">Tours</a></li>
                                
                                <li><a href="{{route("blogs")}}">Blogs</a></li>
                            </ul>
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="{{route("about")}}">About Us</a></li>
                                <li><a href="{{route("contact")}}">Contact Us</a></li>
                                
                            </ul>
                    </div>
    
                    <div>
                        <h3>Subscribe Newsletter</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe pariatur reprehenderit vero atque, consequatur id ratione, et non dignissimos culpa? Ut veritatis, quos illum totam quis blanditiis, minima minus odio!</p>
                    </div>
                </div>
                <div class="footer-ul">
                    <ul>
                        <li><a href="#"><span class="fa fa-tripadvisor icon-small"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter icon-small"></span></a></li>
                        <li><a href="https://www.facebook.com/BlueSky-685628701869638/" target="_blank"><span class="fa fa-facebook-f icon-small"></span></a></li>
                        <li><a href="#"><span class="fa fa-instagram icon-small"></span></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    
    
        <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/navigation.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/testemonials.js')}}"></script>

    </body>
</html>



