@extends('Layouts.back')

@section('title','ბლოგი')

@section('content')
<div class="Admin-Content">
    
        <div style="display:block; text-align:center;margin-top:20px;margin-bottom:70px;">
            <a class="btn purple btn-outline sbold" data-toggle="modal" href="#large"> ბლოგის დამატება </a>
        </div>
        

    
        <table class="admin-table-1 prod-table">
            <tr>
                <th>სახელი</th>
                <th>სურათი</th>
                <th>ტექსტი</th>
                <th>წაშლა</th>
                <th>კატეგორია</th>
            </tr>
            @foreach ($blogs as $blog)
                <tr>
                    <td>{{$blog->name}}</td>
                    <td><img src="{{asset('storage/images/blogs/'.$blog->img)}}"></td>              
                    <td>{{$blog->text}}</td>

                    <td><button class="btn btn-warning"  data-toggle="modal" href="#edit{{$blog->id}}">რედაქტირება</button></td>
                    <td><button class="btn red-mint btn-delete"  data-toggle="modal" href="#delete{{$blog->id}}">წაშლა</button></td>
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
                            <h4 class="modal-title">ბლოგის დამატება</h4>
                        </div>
    
                        <div class="modal-body">
                            <div class="modal-form">
                                <form action="{{route('blogs-add')}}" method="post" enctype="multipart/form-data">
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
    
        @foreach ($blogs as $blog)
            {{-- რედაქტირება --}}
                <div class="modal fade bs-modal-lg" id="edit{{$blog->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
    
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">ბლოგის რედაქტირება</h4>
                            </div>
    
                            <div class="modal-body">
                                <div class="modal-form">
                                    <form action="{{route('blogs-edit',['id'=>$blog->id])}}" method="post" enctype="multipart/form-data">
                                        @csrf
    
                                        <div class="form-group">                                         
                                                <label>სახელი:</label>
                                                <input type="text" name="name" value="{{$blog->name}}" class="form-control">
                                            </div>
                                            <div class="form-group">                                                
                                                <label>სურათი:</label>
                                                <input type="file" name="img"  class="form-control">
                                            </div>

                                            <div class="form-group">                                                
                                                <label>ტექსტი:</label>
                                                <textarea name="text" class="form-control">{{$blog->text}}</textarea>
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
                <div class="modal fade bs-modal-lg" id="delete{{$blog->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            </div>
    
                            <div class="modal-body">
                                <div class="centered-container">
                                    <h3>ნამდვილად გსურთ ბლოგის წაშლა?</h3>
                                    <a  href="{{route("blogs-delete",['id'=>$blog->id])}}" class="btn btn-info">დიახ</a>
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

