@extends('admin.base.common')

{{-- タイトル --}}
@section('title')
    管理Home
@endsection

{{-- ホーム --}}
@section('upload_photo')
    <div class="home">
        <div class="container d-flex-column" style=" margin: 5em 40em 0 20em;">
            <div class="upload-photo-title py-3">
                <h2>画像をアップロード</h2>
            </div>
            <form action="{{ action('Admin\AdminUploadPhotoController@create') }}" method="post" enctype="multipart/form-data" class="form-group">
                <input type="text" name="tags" placeholder=",で区切る" class="form-control w-50">
                <input type="file" name="photo" class="form-control-file">
                <input type="submit" value="アップロード" class="btn btn-primary">
                {{ csrf_field() }}
            </form>
            @isset($photo)
            <img src="{{$photo->url}}" alt="">
            @endisset
        </div>
    </div>
@endsection

