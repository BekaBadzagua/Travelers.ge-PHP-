@extends('Layouts.back')

@section('title','ადგილები')

@section('content')
<div class="Admin-Content">
    
        <div style="display:block; text-align:center;margin-top:20px;margin-bottom:70px;">
            <a class="btn purple btn-outline sbold" data-toggle="modal" href="#large"> ადგილის დამატება </a>
        </div>
        
    
    {{-- name place_id   price smallprice days difficulty  | img map text --}}
    
        <table class="admin-table-1 prod-table">
            <tr>
                <th>სახელი</th>
                <th>სურათი</th>
                <th>ტექსტი</th>
                <th>კატეგორია</th>
                <th>წაშლა</th>
                <th>კატეგორია</th>
            </tr>
            @foreach ($places as $place)
                <tr>
                    <td>{{$place->name}}</td>
                    <td><img src="{{asset('storage/images/places/'.$place->img)}}"></td>              
                    <td>{{$place->text}}</td>
                    <td>{{$place->Category->name}}</td>

    
        
                    <td><button class="btn btn-warning"  data-toggle="modal" href="#edit{{$place->id}}">რედაქტირება</button></td>
                    <td><button class="btn red-mint btn-delete"  data-toggle="modal" href="#delete{{$place->id}}">წაშლა</button></td>
                </tr>
            @endforeach
        </table>

    
    {{-- მოდალური ფანჯრები --}}
    
        {{-- დამატება --}}
            <div class="modal fade bs-modal-lg" id="large" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
    
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">ადგილის დამატება</h4>
                        </div>
    
                        <div class="modal-body">
                            <div class="modal-form">
                                <form action="{{route('places-add')}}" method="post" enctype="multipart/form-data">
                                    @csrf
    
                                    <div class="form-group">                                         
                                        <label>სახელი:</label>
                                        <input type="text" name="name"  class="form-control">
                                    </div>
                                    <div class="form-group">                                                
                                        <label>სურათი:</label>
                                        <input type="file" name="img"  class="form-control">
                                    </div>
                                    <div class="form-group">                                                
                                        <label>კატეგორია:</label>
                                        <input type="text" name="category_id"  class="form-control">
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
    
        @foreach ($places as $place)
            {{-- რედაქტირება --}}
                <div class="modal fade bs-modal-lg" id="edit{{$place->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
    
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">ადგილის რედაქტირება</h4>
                            </div>
    
                            <div class="modal-body">
                                <div class="modal-form">
                                    <form action="{{route('places-edit',['id'=>$place->id])}}" method="post" enctype="multipart/form-data">
                                        @csrf
    
                                        <div class="form-group">                                         
                                                <label>სახელი:</label>
                                                <input type="text" name="name" value="{{$place->name}}" class="form-control">
                                            </div>
                                            <div class="form-group">                                                
                                                <label>სურათი:</label>
                                                <input type="file" name="img"  class="form-control">
                                            </div>
                                            <div class="form-group">                                                
                                                <label>კატეგორია:</label>
                                                <input type="text" name="category_id" value="{{$place->category_id}}" class="form-control">
                                            </div>
        
                                            <div class="form-group">                                                
                                                <label>ტექსტი:</label>
                                                <textarea name="text" class="form-control">{{$place->text}}</textarea>
                                            </div>
                                            <div class="centered-container">
                                                <input type="submit" value="რედაქტირება"  class="btn btn-info">
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
                <div class="modal fade bs-modal-lg" id="delete{{$place->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            </div>
    
                            <div class="modal-body">
                                <div class="centered-container">
                                    <h3>ნამდვილად გსურთ ადგილის წაშლა?</h3>
                                    <a  href="{{route("places-delete",['id'=>$place->id])}}" class="btn btn-info">დიახ</a>
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

