<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        <title>Laravel File Upload</title>
    </head>

    <body>
        <div class="container-md">
            <h3 class="text-center mb-5">画像ライブラリ画像ライブラリ</h3>
            <div class="card text-center">
                <div class="card-body">
                    <form id="dropzoneForm" class="dropzone" action="{{ route('uploadImage') }}" method="post" enctype="multipart/form-data"> 
                        @csrf
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
                        <div class="dz-message" data-dz-message>
                            <span>ドラッグ&ドロップで画像をアップロード</span>
                        </div>
                        <input type="file" name="file" style="display:none;">
                        <button name="submit" class="btn btn-primary btn-block mt-4" id="btnSubmit" style="display:none;">  
                            Submit
                        </button>
                    </form>
                    <button class="btn btn-primary btn-block mt-4" id="btnUpload" >  
                            画像を選択する
                    </button>
                </div> 
            </div>

            <div>
                <h3 class="text-center mb-5">アップロード済み画像</h3>
                <form class="form-inline" action="{{ url('image/search') }}" method="GET">
                    <div class="row my-2">
                        <div class="col-md-3">
                            <label >ファイル名</label>  
                        </div>
                        <div class="col-md-3">
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
                    <div class="col-4">
                        <img src="{{asset('/images/'.$image->name)}}" width="150px" height="100px"><br>
                        <label>{{$image->name}}</label>
                        <form action="{{ url('/image', ['id' => $image->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                @endforeach
                {!! $images->links() !!}
            </div>
        </div>
    </body>
</html>

<script type="text/javascript">
    let file = document.querySelector("[type=file]");
    let btnUpload = document.querySelector('#btnUpload');
    let btnSubmit = document.querySelector('#btnSubmit');

    btnUpload.addEventListener('click',() => {
        file.click();
    })

    file.addEventListener('change',() => {
        btnSubmit.click();
    })

    Dropzone.options.dropzoneForm = {
        acceptedFiles : ".png,.jpg,.gif,.bmp,.jpeg",

        init: function() {
            this.on('success', function(){
                if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0) {
                    location.reload();
                }
            });
        }
    };
</script>
