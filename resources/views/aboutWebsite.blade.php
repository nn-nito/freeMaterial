@extends('base.common')

{{-- タイトル --}}
@section('title')
    サイトについて
@endsection

{{-- お知らせ --}}
@section('info')
    <div class="about-website">
        <div class="container-fluid">
            <h1 class="background-border" style="text-align: center; font-weight: bold">サイトについて</h1>
        </div>
        <div class="container">
            <div class="sentence pb-5">
                <h3 class="heading-sidebar" style="font-weight: bold">1. 著作権について</h3>
                <p style="font-size: 110%; font-weight: bold">
                    公序良俗に反する使い方でなければどういった使い方をしていただいてもかまいません。
                </p>
            </div>
            <div class="sentence pb-5">
                <h3 class="heading-sidebar" style="font-weight: bold">2. 免責事項</h3>
                <p style="font-size: 110%; font-weight: bold">
                    本ウェブサイトに掲載されている内容について、その正確性、有用性、確実性について保証するものではなく、一切の責任を負わないものといたします。 当社は、予告なしに、本ウェブサイトの運営を中断または中止、掲載内容を修正、変更、削除する場合がありますが、それらによって生じるいかなる損害についても一切責任を負いません。
                </p>
            </div>
            <div class="sentence pb-5">
                <h3 class="heading-sidebar" style="font-weight: bold">3. リンクについて</h3>
                <p style="font-size: 110%; font-weight: bold">
                    営利、非営利、イントラネットを問わず、本ウェブサイトへのリンクは自由です。 ただし、公序良俗に反するサイトなど、主の信用、品位を損なうサイトからのリンクはお断りします。また事前事後にかかわらず、その他の理由によりリンクをお断りする場合もあります。
                </p>
            </div>
            <div class="sentence pb-5">
                <h3 class="heading-sidebar" style="font-weight: bold">4. お問い合わせ</h3>
                <p style="font-size: 110%; font-weight: bold">
                    下記メールアドレスまで<br>
                    mail:aaabbbccc.gmail.com
                </p>
            </div>
        </div>
    </div>
@endsection

