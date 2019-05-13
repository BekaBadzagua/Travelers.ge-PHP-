@extends('Layouts.back')

@section('title','სლაიდერი')

@section('content')
<div class="Admin-Content">
    
        <div style="display:block; text-align:center;margin-top:20px;">
                <a class="btn purple btn-outline sbold" data-toggle="modal" href="#large"> სლაიდის დამატება </a>
        </div>

    <!-- Modal      სლაიდის დამატება-->

    <div class="modal fade bs-modal-lg" id="large" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#27445d;color:#effff5;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">სლაიდის დამატება:</h4>
                </div>

                <!-- body -->
                <div class="modal-body"> 
                    <form action="#" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">                                                
                            <label>სათაური:</label>
                            <input type="text" name="heading" class="form-control">
                        </div>
                        <div class="form-group">                                                
                            <label>სურათის ატვირთვა:</label>
                            <input type="file"  name="image" class="form-control">
                        </div>
                        <div class="form-group">                                                
                            <label>ტექსტი:</label>
                            <textarea rows="7" name="description" id="editor" class="form-control"></textarea>
                        </div>

                        <input type="submit" value="დამატება" name="submit" class="btn-primary admin-modal-btn-save">
                    </form>
                </div>
                <!-- /body -->
                <div class="modal-footer" style="background-color:#0d2840;">
                </div>
            </div>
        </div>
    </div>
        <!-- /Modal -->

{{-- 

        <div class="admin-slider-full">   
            @foreach ($images as $img)
                <div class="admin-slider-info">
                    <div>
                        <h2>{{$img->heading}}</h2>
                    </div>
                    
                    <div>
                        <img src="{{asset("storage/images/slider/".$img->src)}}"  class="admin-slider-img">
                    </div>

                    
                    <div style="max-width:300px;">
                        <p>{{$img->description}}</p>
                    </div>
                    <div class="admin-goup-buttons">

                            <a class="btn btn-warning" data-toggle="modal" href="#Edit{{$img->id}}">რედაქტირება</a>
                            <a class="btn btn-danger" id="admin-slider-btn-delete" data-toggle="modal" href="#Delete{{$img->id}}">წაშლა</a>
                    </div>
                </div>

--}}
{{-- 

                <!-- Modal      სლაიდის რედაქტირება-->
              <div class="modal fade bs-modal-lg" id="Edit{{$img->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color:#27445d;color:#effff5;">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">სლაიდის რედაქტირება:</h4>
                            </div>

                            <!-- body -->
                            <div class="modal-body"> 
                                <form action="#" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" value="{{$img->id}}" name="id">

                                    <div class="form-group">                                                
                                        <label>სათაური:</label>
                                        <input type="text" name="heading" class="form-control" value="{{$img->heading}}">
                                    </div>
                                    <div class="form-group">                                                
                                        <label>სურათის ატვირთვა:</label>
                                        <input type="file"  name="image" class="form-control">
                                    </div>
                                    <div class="form-group">                                                
                                        <label>ტექსტი:</label>
                                        <textarea rows="7" name="description" class="form-control">{{$img->description}}</textarea>
                                    </div>



                                    <div>
                                        <input type="submit" value="შენახვა" name="submit" class="btn-warning admin-modal-btn-save">                        
                                    </div>
                                </form>
                            </div>
                            <!-- /body -->
                            <div class="modal-footer" style="background-color:#0d2840;">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal --> 
                
                
--}}


{{--

                <!--  მოდალი - სლაიდის წაშლა -->
                <div class="modal fade bs-modal-lg" id="Delete{{$img->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header"></div>
                            <!-- body -->
                            <div class="modal-body"> 

                                <div style="text-align:center">
                                    <h3>ნამდვილად გსურთ სლაიდის წაშლა?</h3>
                                </div>
                                <form action="#" method="POST"  >
                                    @csrf
                                    <input type="hidden" value="{{$img->id}}" name="id">    
                                    <input type="submit" value="წაშლა" name="submit" class="btn-danger"  id="admin-modal-btn-center">
                                </form>
                            </div>
                            <!-- /body -->
                            <div class="modal-footer"></div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
</div>

--}}

<script src="{{asset("vendor/unisharp/laravel-ckeditor/ckeditor.js")}}"></script>
<script>
    CKEDITOR.replace( 'editor');
</script>



@endsection

