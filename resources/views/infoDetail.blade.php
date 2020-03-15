@extends('base.common')

{{-- タイトル --}}
@section('title')
    お知らせ詳細
@endsection

{{-- お知らせ --}}
@section('info')
    <div class="info-detail py-3 bg-light">
        <div class="container">
            <div class="card card-2">
                <div class="card-header bg-dark">
                    <h3 style="text-align: center; font-weight: bold; color: #67c5ff;">
                        @isset($info->target_date)
                            {{ $info->target_date }}
                        @endisset
                        {{ $info->title }}
                    </h3>
                </div>
                <div class="card-body" style="font-size: 130%;">
                    <span>{!! $info->body !!}</span>
                    @if (false === isset($info->body))
                        <span style="display: inline-block; width: 100%; text-align: center; font-size: 180%;">
                            詳細無し
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

