@extends('admin.base.common')

{{-- タイトル --}}
@section('title')
    管理写真アップロード
@endsection

{{-- ホーム --}}
@section('upload_photo')
    <div class="home">
        <div class="container d-flex-column" style=" padding: 5em 10em 0 20em;">
            <div class="upload-photo-title py-3">
                <h2>画像をアップロード</h2>
            </div>
            <div class="row">
                <div class="col-6">
                    <form action="{{ action('Admin\AdminUploadPhotoController@create') }}" method="post" enctype="multipart/form-data" class="form-group">
                        <label for="user_id">ユーザーID</label>
                        <input type="text" required name="user_id" placeholder="ユーザーID 管理者の場合1" class="form-control">
                        <label for="tags">タグ</label>
                        <input type="text" required name="tags" placeholder="タグ ,で区切る" class="form-control">
                        <label for="tags_kana">タグのふりがな</label>
                        <input type="text" required name="tags_kana" placeholder="タグ(ふりがな) ,で区切る" class="form-control">
                        <label for="description">説明 【brで改行】</label>
                        <textarea type="text" required name="description" placeholder="説明 HTMLエスケープしない 空にできるだけしない" class="form-control"></textarea>
                        <label for="resolution">解像度</label>
                        <input type="text" required name="resolution" placeholder="解像度 例）1024×1024" class="form-control">
                        <input type="file" required name="photo" class="form-control-file">
                        <input type="submit" value="アップロード" class="btn btn-primary">
                        {{ csrf_field() }}
                    </form>
                </div>
                <div class="col-6">
                    @isset($photo)
                        <img src="{{$photo->url}}" alt="" style="max-width: 100%">
                    @endisset
                </div>
            </div>
        </div>
    </div>
@endsection

