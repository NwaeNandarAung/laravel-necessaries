@extends('layouts.content')
@section('contents')
        <div class="container">
            <h3 class="text-center mb-5">画像ライブラリ画像ライブラリ</h3>
            <div class="card text-center">
                <div class="card-body">
                    <form id="dropzoneForm" class="dropzone" action="{{ route('uploadImage') }}" method="post" enctype="multipart/form-data"> 
                        @csrf
                        <div class="dz-message" data-dz-message>
                            <span>ドラッグ&ドロップで画像をアップロード</span><br>
                            <label id="upload" >  
                            画像を選択する
                        </label>
                        </div>
                        <input type="file" name="file" style="display:none;">

                        <button type ="submit" class="btn btn-primary btn-block mt-4" id="btnSubmit" style="display:none;">  
                            Submit
                        </button>
                    </form>
                    <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
                    <div class="dz-error-message"><span data-dz-errormessage></span></div>
                    @if (count($errors) > 0)
                            <ul class="alert alert-danger pl-5">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li> 
                                @endforeach
                            </ul>
                        @endif
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                </div> 
            </div>
            <br>
            <div>
                <h3 class="text-center mb-5">アップロード済み画像</h3>
                <form class="form-inline" action="{{ url('image/search') }}" method="GET">
                    <div class="row my-2" id="search_section">
                        <div class="col-md-2">
                            <label >ファイル名</label>  
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control"  placeholder="Search" name="search" required/>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row align-items-start">
                @foreach ($images as $image)
                    <div class="col-md-4">
                        <img src="{{asset('/images/'.$image->name)}}" width="200px" height="150px"><br>
                        <label>{{$image->name}}</label>
                        <form action="{{ url('/image', ['id' => $image->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <br>
                    </div>
                @endforeach
                
            </div>
            <div class="row">
             {!! $images->links() !!}
            </div>
        </div>
        @endsection

