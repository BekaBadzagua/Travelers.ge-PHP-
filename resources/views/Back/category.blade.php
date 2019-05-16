@extends('Layouts.back')

@section('title','კატეგორია')

@section('content')
<div class="Admin-Content">
    
        <div style="display:block; text-align:center;margin-top:20px;margin-bottom:70px;">
            <a class="btn purple btn-outline sbold" data-toggle="modal" href="#large"> კატეგორიის დამატება </a>
        </div>
        
    
    {{-- name place_id   price smallprice days difficulty  | img map text --}}
    
        <table class="admin-table-1 prod-table" style="width:60%;margin:auto;">
            <tr>
                <th style="width:100%">კატეგორიის სახელი</th>
                <th></th>
            </tr>
            @foreach ($categories as $category)
                <tr>
                    <td>{{$category->name}}</td>
                    <td><button class="btn red-mint btn-delete"  data-toggle="modal" href="#delete{{$category->id}}">წაშლა</button></td>
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
                            <h4 class="modal-title">კატეგორიის დამატება</h4>
                        </div>
    
                        <div class="modal-body">
                            <div class="modal-form">
                                <form action="{{route('category-add')}}" method="post" enctype="multipart/form-data">
                                    @csrf
    
                                    <div class="form-group">                                        
                                        <label>სახელი:</label>
                                        <input type="text" name="name"  class="form-control">
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
    
        @foreach ($categories as $category)

    
            {{-- წაშლა --}}
                <div class="modal fade bs-modal-lg" id="delete{{$category->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            </div>
    
                            <div class="modal-body">
                                <div class="centered-container">
                                    <h3>ნამდვილად გსურთ კატეგორიის წაშლა?</h3>
                                    <a  href="{{route("category-delete",['id'=>$category->id])}}" class="btn btn-info">დიახ</a>
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
    

    

@endsection
