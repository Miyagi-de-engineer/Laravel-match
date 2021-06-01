@extends('layouts.layout')

@section('content')
    <div class="signupPage">
        <header class="header">
            <div>プロフィール編集</div>
        </header>
        <div class="container">
            <form action="/users/update/{{$user->id}}" method="POST" class="form mt-5" enctype="multipart/form-data">
                @csrf

                <label for="file_photo" class="rounded-circle userProfileImg">
                    <div class="userProfileImg_description">画像をアップロード</div>
                    <i class="fas fa-camera fa-3x"></i>
                    <input type="file" id="file_photo" name="img_name">
                </label>
                <div class="userImgPreview" id="userImgPreview">
                    <img id="thumbnail" class="userImgPreview_content" accept="image/*" src="">
                    <p class="userImgPreview_text">画像をアップロード済み</p>
                </div>
                {{-- 名前 --}}
                <div class="form-group">
                    <label for="name">名前</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                    @error('name')
                        <span class="errorMessage">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                {{-- メールアドレス --}}
                <div class="form-group">
                    <label for="email">メールアドレス</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
                    @error('email')
                        <span class="errorMessage">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                {{-- 性別 --}}
                <div class="form-group">
                    <div><label for="sex">性別</label></div>
                    <div class="form-check-inline form-check">
                        <input type="radio" name="sex" value="0" id="inlineRadio1" @if($user->sex === 0) checked @endif class="form-check-input">
                        <label for="inlineRadio1" class="form-check-label">
                            男
                        </label>
                    </div>
                    <div class="form-check-inline form-check">
                        <input type="radio" name="sex" value="1" id="inlineRadio2" @if($user->sex === 1) checked @endif class="form-check-input">
                        <label for="inlineRadio1" class="form-check-label">
                            女
                        </label>
                    </div>
                </div>
                {{-- 自己紹介文 --}}
                <div class="form-group">
                    <label for="selt_introduction">自己紹介文</label>
                    <textarea name="self_introduction" id="self_introduction" rows="10" class="form-control">{{$user->self_introduction}}</textarea>
                </div>
                {{-- ボタン --}}
                <div class="text-center">
                    <button type="submit" class="btn submitBtn">変更する</button>
                </div>
            </form>
        </div>
    </div>
@endsection
