@extends('Layouts.back')

@section('title','მთავარი')

@section('content')

<div class="main-wrapper">
    

    <div>
        <a href="{{route('Admin.Slider')}}">
            <i class="icon-layers"></i>
            <h4>სლაიდერი</h4>
        </a>
    </div>
    <div>
        <a href="{{route('Admin.Tours')}}">
            <i class="icon-briefcase"></i>
            <h4>ტურები</h4>
        </a>
    </div>
    <div>
        <a href="{{route('Admin.Category')}}">
            <i class="icon-docs"></i>
            <h4>კატეგორიები</h4>
        </a>
    </div>

    <div>
        <a href="{{route('Admin.Places')}}">
            <i class="icon-pointer"></i>
            <h4>ადგილები</h4>        
        </a>
    </div>
    
    <div>
        <a href="{{route('Admin.Blogs')}}">
            <i class="icon-user"></i>
            <h4>ბლოგი</h4>
        </a>
        
    </div>
    
    <div >
        <a href="{{route('Admin.Informations')}}">
            <i class="icon-bulb"></i>
            <h4>ინფორმაცია</h4>
        </a>
    </div>
    
</div>







@endsection

@section('page_scripts')
    <script>
        var header = document.getElementById('page-title');
        var bar = document.getElementById('page-bar');
        header.style.display = "none";
        bar.style.display = "none";
    </script>
@endsection