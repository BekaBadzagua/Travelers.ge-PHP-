@extends('Layouts.back')

@section('title','სლაიდერი')

@section('content')
<div class="Admin-Content">
    
    <div style="display:block; text-align:center;margin-top:20px;">
        <a class="btn purple btn-outline sbold" data-toggle="modal" href="#large"> სლაიდის დამატება </a>
    </div>

    @foreach ($sliders as $slider)
        <div>
            
        </div>
    @endforeach
    


{{-- მოდალური ფანჯრები --}}

    {{-- დამატება --}}
        <div class="modal fade bs-modal-lg" id="large" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">სლაიდის</h4>
                    </div>

                    <div class="modal-body">
                        <div class="modal-form">
                            <form action="{{route('slider-add')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">                                                
                                    <label>სათაური:</label>
                                    <input type="text" name="header"  class="form-control">
                                </div>
                                <div class="form-group">                                                
                                    <label>სურათი:</label>
                                    <input type="file" name="img"  class="form-control">
                                </div>
                                <div class="form-group">                                                
                                    <label>ტექსტი:</label>
                                    <textarea name="text" class="form-control"></textarea>
                                </div>
                                <div class="centered-container">
                                    <input type="submit" value="დამატება"  class="btn btn-info">
                                </div>
                            </form>
                        </div>
                        
                    </div>

                    <div class="modal-footer" >

                    </div>
                </div>
            </div>
        </div>
    {{-- დამატება --}}

    @foreach ($slides as $slide)
        {{-- რედაქტირება --}}
            <div class="modal fade bs-modal-lg" id="edit{{$slider->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">სლაიდის</h4>
                        </div>

                        <div class="modal-body">
                            <div class="modal-form">
                                <form action="{{route('slider-edit')}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">                                                
                                        <label>სათაური:</label>
                                        <input type="text" name="header" value="{{$slider->header}}"  class="form-control">
                                    </div>
                                    <div class="form-group">                                                
                                        <label>სურათი:</label>
                                        <input type="file" name="img"  class="form-control">
                                    </div>
                                    <div class="form-group">                                                
                                        <label>ტექსტი:</label>
                                        <textarea name="text" class="form-control">value="{{$slider->text}}"</textarea>
                                    </div>
                                    <div class="centered-container">
                                        <input type="submit" value="დამატება"  class="btn btn-info">
                                    </div>
                                </form>
                            </div>
                            
                        </div>

                        <div class="modal-footer" >

                        </div>
                    </div>
                </div>
            </div>
        {{-- რედაქტირება --}}

        {{-- წაშლა --}}
            <div class="modal fade bs-modal-lg" id="delete{{$slider->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        </div>

                        <div class="modal-body">
                            <div class="centered-container">
                                <h3>ნამდვილად გსურთ კონტაქტის წაშლა?</h3>
                                <a  href="{{route("slider-delete",['id'=>$slider->id])}}" class="btn btn-info">დიახ</a>
                            </div>
                        </div>

                        <div class="modal-footer" >
                        </div>
                    </div>
                </div>
            </div>
        {{-- წაშლა --}}

    @endforeach
{{-- მოდალური ფანჯრები --}}



<script src="{{asset("vendor/unisharp/laravel-ckeditor/ckeditor.js")}}"></script>
<script>
    CKEDITOR.replace( 'editor');
</script>



@endsection

