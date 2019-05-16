@extends('Layouts.back')

@section('title','ინფორმაცია')

@section('content')
<div class="Admin-Content">
    
        <div style="display:block; text-align:center;margin-top:20px;margin-bottom:70px;">
            <a class="btn purple btn-outline sbold" data-toggle="modal" href="#large"> ინფორმაციის დამატება </a>
        </div>
        

    
        <table class="admin-table-1 prod-table">
            <tr>
                <th>სახელი</th>
                <th>ტექსტი</th>
                <th>რედაქტირება</th>
                <th>წაშლა</th>
            </tr>
            @foreach ($informations as $info)
                <tr>
                    <td>{{$info->name}}</td>
                    <td>{{$info->text}}</td>
                    <td><button class="btn btn-warning"  data-toggle="modal" href="#edit{{$info->id}}">რედაქტირება</button></td>
                    <td><button class="btn red-mint btn-delete"  data-toggle="modal" href="#delete{{$info->id}}">წაშლა</button></td>
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
                            <h4 class="modal-title">ინფორმაციის დამატება</h4>
                        </div>
    
                        <div class="modal-body">
                            <div class="modal-form">
                                <form action="{{route('info-add')}}" method="post" enctype="multipart/form-data">
                                    @csrf
    
                                    <div class="form-group">                                         
                                        <label>სახელი:</label>
                                        <input type="text" name="name"  class="form-control">
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
    
        @foreach ($informations as $info)
            {{-- რედაქტირება --}}
                <div class="modal fade bs-modal-lg" id="edit{{$info->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
    
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">ინფორმაციის რედაქტირება</h4>
                            </div>
    
                            <div class="modal-body">
                                <div class="modal-form">
                                    <form action="{{route('info-edit',['id'=>$info->id])}}" method="post" enctype="multipart/form-data">
                                        @csrf
    
                                            <div class="form-group">                                         
                                                <label>სახელი:</label>
                                                <input type="text" name="name" value="{{$info->name}}" class="form-control">
                                            </div>


                                            <div class="form-group">                                                
                                                <label>ტექსტი:</label>
                                                <textarea name="text" class="form-control">{{$info->text}}</textarea>
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
                <div class="modal fade bs-modal-lg" id="delete{{$info->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            </div>
    
                            <div class="modal-body">
                                <div class="centered-container">
                                    <h3>ნამდვილად გსურთ ინფორმაციის წაშლა?</h3>
                                    <a  href="{{route("info-delete",['id'=>$info->id])}}" class="btn btn-info">დიახ</a>
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

