@extends('admin.base.common')

{{-- タイトル --}}
@section('title')
    管理写真アップロード
@endsection

{{-- お知らせ --}}
@section('upload_info')
    <div class="upload-info">
        <div class="container d-flex-column" style=" padding: 5em 10em 0 20em;">
            <div class="upload-info-title py-3">
                <h2>お知らせをアップロード</h2>
            </div>
            <form action="{{ action('Admin\AdminUploadInfoController@create') }}" method="post" class="form-group">
                <label for="title">タイトル</label>
                <input type="text" required name="title" class="form-control">
                <label for="body">内容【改行はbr 空白はスペース】</label>
                <textarea required name="body" class="form-control"></textarea>
                <label for="target-date">お知らせの対象の日時 例)2020-10-10</label>
                <input type="text" required name="target-date" class="form-control">
                <input type="submit" value="アップロード" class="btn btn-primary">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
@endsection

