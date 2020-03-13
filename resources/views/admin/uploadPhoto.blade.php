@extends('admin.base.common')

{{-- タイトル --}}
@section('title')
    管理Home
@endsection

{{-- ホーム --}}
@section('upload_photo')
    <div class="home">
        <div class="container d-flex justify-content-center">
            <form action="{{ action('Admin\AdminUploadPhotoController@create') }}" method="post" enctype="multipart/form-data" class="form-group">
                <input type="file" name="image" class="form-control-file">
                {{ csrf_field() }}
                <input type="submit" value="アップロード" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection

