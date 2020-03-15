@extends('base.common')

{{-- タイトル --}}
@section('title')
    タグ一覧
@endsection

@section('infos')
    <div class="info py-3 bg-light">
        <div class="container">
            <div class="card card-1 bg-dark">
                <div class="card-header">
                    <h3 style="text-align: center; font-weight: bold; color: #EEEEEE;">お知らせ</h3>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach($infos as $info)
                        <li class="list-group-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                            <a href="{{ action('InfoDetailController@index', [$info->id]) }}">
                                @isset($info->target_date)
                                    {{ $info->target_date }}
                                    &nbsp;&nbsp;
                                @endisset
                                <strong>{{ $info->title }}</strong>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="d-flex justify-content-center">
                {{ $infos->links() }}
            </div>
        </div>
    </div>
@endsection
