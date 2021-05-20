@extends('resources.views.layouts.web')

@section('title', $title)

@section('content')
    <section class="container">
        <div class="page-title">{{ $title }}</div>

        <form action="{{ route('change-password.put') }}" method="post">
            @csrf
            @method('PUT')

            <div class="wr-wrap line label160">
                <div class="wr-list">
                    <div class="wr-list-label">기존 비밀번호</div>
                    <div class="wr-list-con">
                        <input type="password" id="original_password" name="original_password" value="" class="span200" placeholder="기존 비밀번호">
                    </div>
                </div>
                <div class="wr-list">
                    <div class="wr-list-label">변경할 비밀번호</div>
                    <div class="wr-list-con">
                        <input type="password" id="new_password" name="new_password" value="" class="span200" placeholder="변경할 비밀번호">
                    </div>
                </div>
                <div class="wr-list">
                    <div class="wr-list-label">비밀번호 재입력</div>
                    <div class="wr-list-con">
                        <input type="password" id="new_password_confirm" name="new_password_confirm" value="" class="span200" placeholder="비밀번호 재입력">
                    </div>
                </div>
                <div class="wr-list">
                    <div class="wr-list-label"></div>
                    <div class="wr-list-con">
                        <p class="help-block">
                            ※ 보안을 위해 패스워드는 대, 소문자 및 숫자, 특수문자 중 2가지 이상 사용하여야 합니다.<br />
                            ※ 최소 6자리 이상 입력해주세요.
                        </p>
                    </div>
                </div>
            </div>
        </form>

        <div class="btnSet">
            <a href="#" class="btn submit">비밀번호 변경</a>
        </div>

    </section>
@endsection
