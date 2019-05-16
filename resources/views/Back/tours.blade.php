@extends('Layouts.back')

@section('title','ტურები')

@section('content')
<div class="Admin-Content">
    
    <div style="display:block; text-align:center;margin-top:20px;margin-bottom:70px;">
        <a class="btn purple btn-outline sbold" data-toggle="modal" href="#large"> ტურის დამატება </a>
    </div>
    

{{-- name place_id   price smallprice days difficulty  | img map text --}}

    <table class="admin-table-1 prod-table">
        <tr>
            <th>სახელი</th>
            <th>ადგილი</th>
            <th>ფასი</th>
            <th>ფასდაკლებით</th>
            <th>დღეთა რაოდენობა</th>
            <th>სირთულე</th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($tours as $tour)
            <tr>
                <td>{{$tour->name}}</td>
                <td>{{$tour->Place->name}}</td>              
                <td>{{$tour->price}}</td>
                <td>{{$tour->smallprice}}</td>
                <td>{{$tour->days}}</td>
                <td>{{$tour->difficulty}}</td>





                <td><button class="btn btn-warning"  data-toggle="modal" href="#edit{{$tour->id}}">რედაქტირებ2</button></td>
                <td><button class="btn red-mint btn-delete"  data-toggle="modal" href="#delete{{$tour->id}}">წაშლა</button></td>
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
                        <h4 class="modal-title">ტურის დამატება</h4>
                    </div>

                    <div class="modal-body">
                        <div class="modal-form">
                            <form action="{{route('tours-add')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">    
                                    // ადგილი სელექთით უნდა იყოს     <br>                                        
                                    <label>სახელი:</label>
                                    <input type="text" name="name"  class="form-control">
                                </div>
                                <div class="form-group">                                                
                                    <label>ფასი:</label>
                                    <input type="text" name="price"  class="form-control">
                                </div>
                                <div class="form-group">                                                
                                    <label>ფასდაკლებით:</label>
                                    <input type="text" name="smallprice"  class="form-control">
                                </div>
                                <div class="form-group">                                                
                                    <label>დღეთა რაოდენობა:</label>
                                    <input type="text" name="days"  class="form-control">
                                </div>
                                <div class="form-group">                                                
                                    <label>სირთულე:</label>
                                    <input type="text" name="difficulty"  class="form-control">
                                </div>
                                <div class="form-group">                                                
                                    <label>სურათი:</label>
                                    <input type="file" name="img"  class="form-control">
                                </div>
                                <div class="form-group">                                                
                                        <label>ადგილი:</label>
                                        <input type="text" name="place_id"  class="form-control">
                                    </div>
                                <div class="form-group">                                                
                                    <label>რუკა (ლინკი):</label>
                                    <input type="text" name="map"  class="form-control">
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

    @foreach ($tours as $tour)
        {{-- რედაქტირება --}}
            <div class="modal fade bs-modal-lg" id="edit{{$tour->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">სლაიდის რედაქტირება</h4>
                        </div>

                        <div class="modal-body">
                            <div class="modal-form">
                                <form action="{{route('tours-edit',['id'=>$tour->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    
                                <div class="form-group">    
                                        // ადგილი სელექთით უნდა იყოს     <br>                                        
                                        <label>სახელი:</label>
                                        <input type="text" name="name" value="{{$tour->name}}" class="form-control">
                                    </div>
                                    <div class="form-group">                                                
                                        <label>ფასი:</label>
                                        <input type="text" name="price" value="{{$tour->price}}"  class="form-control">
                                    </div>
                                    <div class="form-group">                                                
                                        <label>ფასდაკლებით:</label>
                                        <input type="text" name="smallprice" value="{{$tour->smallprice}}"  class="form-control">
                                    </div>
                                    <div class="form-group">                                                
                                        <label>დღეთა რაოდენობა:</label>
                                        <input type="text" name="days" value="{{$tour->days}}"  class="form-control">
                                    </div>
                                    <div class="form-group">                                                
                                        <label>სირთულე:</label>
                                        <input type="text" name="difficulty" value="{{$tour->difficulty}}"  class="form-control">
                                    </div>
                                    <div class="form-group">                                                
                                        <label>სურათი:</label>
                                        <input type="file" name="img"  class="form-control">
                                    </div>
                                    <div class="form-group">                                                
                                            <label>ადგილი:</label>
                                            <input type="text" name="place_id" value="{{$tour->place_id}}"  class="form-control">
                                        </div>
                                    <div class="form-group">                                                
                                        <label>რუკა (ლინკი):</label>
                                        <input type="text" name="map" value="{{$tour->map}}"  class="form-control">
                                    </div>
                                    <div class="form-group">                                                
                                        <label>ტექსტი:</label>
                                        <textarea name="text" class="form-control">{{$tour->text}}</textarea>
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
            <div class="modal fade bs-modal-lg" id="delete{{$tour->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        </div>

                        <div class="modal-body">
                            <div class="centered-container">
                                <h3>ნამდვილად გსურთ სლაიდის წაშლა?</h3>
                                <a  href="{{route("tours-delete",['id'=>$tour->id])}}" class="btn btn-info">დიახ</a>
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

