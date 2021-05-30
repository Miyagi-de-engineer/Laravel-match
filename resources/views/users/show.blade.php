@extends('layouts.layout')

@section('content')
    <div class="usershowPage">
        <div class="container">
            <header class="header">
                <p class="header_logo">
                    <a href="{{ route('home') }}">
                        <img src="/storage/images/techpit-match-icon.png" alt="">
                    </a>
                </p>
            </header>

            {{-- ユーザー情報 --}}
            <div class="userInfo">
                {{-- プロフィール写真 --}}
                <div class="userInfo_img">
                    <img src="/storage/images/{{ $user->img_name }}" alt="">
                </div>
                {{-- 名前 --}}
                <div class="userInfo_name">
                    {{ $user->name}}
                </div>
                {{-- 自己紹介文 --}}
                <div class="userInfo_selfIntroduction">
                    {{ $user->selfIntroduction }}
                </div>
            </div>

            {{-- アクション --}}
            <div class="userAction">
                {{-- プロフィール編集 --}}
                <div class="userAction_edit userAction_common">
                    <i class="fas fa-edit fa-2x"></i>
                    <span>情報を編集</span>
                </div>
                <div class="userAction_logout userAction_common">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="fas fa-cog fa-2x"></i>
                    </a>
                    <span>ログアウト</span>
                    <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
