@extends('design::layouts.web')

@section('title', $title)

@section('content')
    <section id="view" class="container">
        <div class="page-title">{{ $title }}</div>

        <div class="viewContents">
            <div class="wr-wrap line label160">

                <div class="wr-list">
                    <div class="wr-list-label">제목</div>
                    <div class="wr-list-con">
                        죽는 날까지 하늘을 우러러 한 점 부끄럼이 없기를, 잎새에 이는 바람에도 나는 괴로워했다. 별을 노래하는 마음으로 모든 죽어가는 것을 사랑해야지.
                    </div>
                </div>
                <div class="wr-list">
                    <div class="wr-list-label">내용</div>
                    <div class="wr-list-con">
                        죽는 날까지 하늘을 우러러<br />
                        한 점 부끄럼이 없기를,<br />
                        잎새에 이는 바람에도<br />
                        나는 괴로워했다.<br />
                        별을 노래하는 마음으로<br />
                        모든 죽어가는 것을 사랑해야지.<br />
                        그리고 나한테 주어진 길을<br />
                        걸어가야겠다.<br /><br />

                        오늘 밤에도 별이 바람에 스치운다.
                    </div>
                </div>
                <div class="wr-list">
                    <div class="wr-list-label">이름</div>
                    <div class="wr-list-con">
                        홍길동
                    </div>
                </div>
                <div class="wr-list">
                    <div class="wr-list-label">등록일</div>
                    <div class="wr-list-con">
                        <span class="mont color-gray">2020. 10. 23</span>
                    </div>
                </div>
                <div class="wr-list">
                    <div class="wr-list-label">키워드</div>
                    <div class="wr-list-con">
                        <span class="srtag">키워드A</span>
                        <span class="srtag">키워드B</span>
                        <span class="srtag">키워드C</span>
                        <span class="srtag">키워드D</span>
                    </div>
                </div>
                <div class="wr-list">
                    <div class="wr-list-label">온·오프</div>
                    <div class="wr-list-con">
                        <label class="toggle-light" data-on="사용함" data-off="사용안함"><input type="checkbox" name="" value="1" checked disabled /></label>
                    </div>
                </div>

                <div class="wr-list">
                    <div class="wr-list-label">메모</div>
                    <div class="wr-list-con">
                        <div class="flexBottom">
                            <textarea name="" class="autoSize mini" placeholder="메모 입력" style="width:calc(100% - 100px);"></textarea>
                            <a href="#" class="btn black ml5">저장</a>
                        </div>
                        <div class="memo-wrap">
                            <div class="memo-list">
                                <header>
                                    <span class="writer">홍길동 (UserID)</span>
                                    <span class="date">2020. 11. 08 12:00:12</span>
                                </header>
                                <div class="con">해당 지역 담당자 확인하였으나 영업팀 담당자 휴가갔다고 함. 기본 안내 자료 먼저 메일로 전달하기로 했으며,<br />관련 자료는 영업팀에서 받아 처리 예정</div>
                                <a href="#" class="del-memo">삭제</a>
                            </div>
                            <div class="memo-list">
                                <header>
                                    <span class="writer">홍길동 (UserID)</span>
                                    <span class="date">2020. 11. 08 12:00:12</span>
                                </header>
                                <div class="con">해당 지역 담당자 확인하였으나 영업팀 담당자 휴가갔다고 함. 기본 안내 자료 먼저 메일로 전달하기로 했으며,<br />관련 자료는 영업팀에서 받아 처리 예정</div>
                                <a href="#" class="del-memo">삭제</a>
                            </div>
                            <div class="memo-list">
                                <header>
                                    <span class="writer">홍길동 (UserID)</span>
                                    <span class="date">2020. 11. 08 12:00:12</span>
                                </header>
                                <div class="con">해당 지역 담당자 확인하였으나 영업팀 담당자 휴가갔다고 함. 기본 안내 자료 먼저 메일로 전달하기로 했으며,<br />관련 자료는 영업팀에서 받아 처리 예정</div>
                                <a href="#" class="del-memo">삭제</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="btnSet">
                <a href="#" class="btn submit">수정</a>
                <a href="#" class="btn gray">목록</a>
            </div>
        </div>
    </section>
@endsection
