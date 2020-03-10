@extends('base.common')

{{-- タイトル --}}
@section('title')
    タグ一覧
@endsection

@section('tags')
    <div class="image-detail">
        <h1 class="container">
            <h1 class="display-4" style="text-align: center">タグ一覧</h1>
            <div class="d-flex justify-content-center py-4">
                @foreach($tags as $key => $tag)
                    <div class="box11" style="margin: 0 0 10px 10px">
                        <p style="text-align: center; font-size: 140%"><strong>{{ $key }}</strong></p>
                        @foreach($tag as $item)
                            <div class="tagtag">
                                <a href="{{ action('PhotoListController@index', [$item->name, 'total']) }}" style="text-align: center; font-size: 110%">
                                    {{ $item->name }} ({{$item->related_photo_count}})
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div><!-- container -->
    </div><!-- image-detail -->
@endsection
