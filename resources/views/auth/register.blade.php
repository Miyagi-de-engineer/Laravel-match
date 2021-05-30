@extends('layouts.layout')

@section('content')
    <div class="signupPage">

        <header class="header">
            <div>アカウント作成</div>
        </header>

        <div class="container">
            <form action="{{ route('register')}}" class="form mt-5"
                  method="post" enctype="multipart/form-data">
                @csrf

                <label for="file_photo" class="rounded-circle userProfileImg">
                    <div class="userProfileImg_description">画像をアップロード</div>
                    <i class="fas fa-camera fa-3x"></i>
                    <input type="file" name="img_name" id="file_photo">
                </label>

                <div class="userImgPreview" id="userImgPreview">
                    <img src="" id="thumbnail" class="userImgPreview_content" accept="image/*">
                    <p class="userImgPreview_text">画像をアップロード済み</p>
                </div>

                {{-- 名前 --}}
                <div class="form-group @error('name')has-error @enderror">
                    <label for="name">名前</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="名前を入力してください">
                    @error('name')
                        <span class="errorMessage">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                {{-- メールアドレス --}}
                <div class="form-group @error('email')has-error @enderror">
                    <label for="email">メールアドレス</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="メールアドレスを入力してください">
                    @error('email')
                        <span class="errorMessage">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                {{-- パスワード --}}
                <div class="form-group @error('password')has-error @enderror">
                    <label for="password">パスワード</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="パスワードを入力してください">
                    @error('password')
                        <span class="errorMessage">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password_confirmation">確認用パスワード</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="パスワードを再入力してください">
                </div>

                {{-- 性別 --}}
                <div class="form-group">
                    <div>
                        <label for="sex">性別</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="sex" id="inlineRadio1" value="0" class="form-check-input" checked>
                        <label for="inlineRadio1" class="form-check-label">男性</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="sex" id="inlineRadio2" value="1" class="form-check-input">
                        <label for="inlineRadio2" class="form-check-label">女性</label>
                    </div>
                </div>

                {{-- 自己紹介文 --}}
                <div class="form-group @error('self_introduction')has-error @enderror">
                    <label for="self_introduction">自己紹介文</label>
                    <textarea class="form-control" name="self_introduction" id="self_introduction" rows="10"></textarea>
                    @error('self_introduction')
                        <span class="errorMessage">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                {{-- 送信用のボタン --}}
                <div class="text-center">
                    <button type="submit" class="btn submitBtn">始める</button>
                    <div class="linkToLogin">
                        <a href="{{ route('login') }}">ログインはこちら</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
