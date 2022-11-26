<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-7">
                <div class="mt-3">
                    <div class="card">
                        <div class="card-body">
                            <form enctype="multipart/form-data" action="{{ route('photo.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Upload Photo</label>
                                    <input type="file" name="photo" id="" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <textarea name="message" class="form-control" id="" cols="50" rows="10"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-primary">Upload</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 my-2">
                <div class="row row-cols-5">
                    <div class="col">
{{--                        <img src="{{\Illuminate\Support\Facades\Storage::disk('do')->temporaryUrl('wwm/5oNpKAXwFjZHp1loysJB6jH1x0ltjXavegWy76XL.jpg',now()->addMinute(3))}}" alt="">--}}
                        <div class="card rounded-2">
                            <div class="">
                                <img height="300px" src="{{\Illuminate\Support\Facades\Storage::disk('do')->url('wwm/obD6VLje4tcS3Isj8mrxSHsFurZ40e8PW2DgUoll.jpg')}}" class="img-fluid card-img" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card rounded-2">
                            <div class="">
                                <img height="300px" src="{{\Illuminate\Support\Facades\Storage::disk('do')->temporaryUrl('wwm/5oNpKAXwFjZHp1loysJB6jH1x0ltjXavegWy76XL.jpg',now()->addMinute(3))}}" class="img-fluid card-img" alt="">
                            </div>
                        </div>
                    </div>
                    @foreach($photos as $photo)
                        <div class="col">
                            <div class="card rounded-2">
                                <div class="card-body">
                                    <p class="fw-bold">{{$photo->user->name}}</p>
                                    <p class="card-text">{{$photo->message}}</p>
                                </div>
                                <div class="">
                                    <img src="{{\Illuminate\Support\Facades\Storage::disk('do')->url($photo->photo)}}" class="card-img-bottom" style="max-height: 150px;object-fit: cover" alt="">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
