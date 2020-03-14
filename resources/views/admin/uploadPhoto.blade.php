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
            <div class="container d-flex flex-row">
                <div class="row">
                    <div class="col-5">
                        <form action="{{ action('Admin\AdminUploadPhotoController@create') }}" method="post" enctype="multipart/form-data" class="form-group">
                            <input type="text" name="user_id" placeholder="ユーザーID 管理者の場合1" class="form-control">
                            <input type="text" name="tags" placeholder="タグ ,で区切る" class="form-control">
                            <input type="text" name="tags_kana" placeholder="タグ(ふりがな) ,で区切る" class="form-control">
                            <input type="text" name="description" placeholder="説明 HTMLエスケープしない 空にできるだけしない" class="form-control">
                            <input type="text" name="resolution" placeholder="解像度 例）1024×1024" class="form-control">
                            <input type="file" name="photo" class="form-control-file">
                            <input type="submit" value="アップロード" class="btn btn-primary">
                            {{ csrf_field() }}
                        </form>
                    </div>
                    <div class="col-7">
                        @isset($photo)
                            <img src="{{$photo->url}}" alt="" style="max-width: 100%">
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

