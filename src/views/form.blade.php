@extends('resources.views.layouts.web')

@section('title', $title)

@section('content')
    <section id="write" class="container">
        <div class="page-title">{{ $title }}</div>

        <div class="wrtieContents">
            <div class="wr-wrap line label200">

                <div class="wr-list">
                    <div class="wr-list-label">채크박스 (toggle style)</div>
                    <div class="wr-list-con">
                        <label class="toggle-light" data-on="공개" data-off="비공개"><input type="checkbox" name="" value="1" checked /></label>
                    </div>
                </div>
                <div class="wr-list">
                    <div class="wr-list-label flex-start">라디오버튼</div>
                    <div class="wr-list-con">
                        <div>
                            <label><input type="radio" name="notice_read_level" value="" checked>옵션A</label>
                            <label class="ml20"><input type="radio" name="notice_read_level" value="">옵션B</label>
                            <label class="ml20"><input type="radio" name="notice_read_level" value="">옵션C</label>
                            <label class="ml20"><input type="radio" name="notice_read_level" value="dong">옵션D(추가선택)</label>
                            <label class="ml20"><input type="radio" name="notice_read_level" value="">옵션E</label>
                        </div>
                        <div id="sel-dong" class="mt15">
                            <select multiple data-actions-box="true" title="동 선택">
                                <option>OOO동</option>
                                <option>OOO동</option>
                                <option>OOO동</option>
                                <option>OOO동</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="wr-list">
                    <div class="wr-list-label">라디오버튼 (버튼스타일)</div>
                    <div class="wr-list-con">
                        <input type="radio" name="radio-btn" value="" class="radio-btn" data-text="일반" checked>
                        <input type="radio" name="radio-btn" value="" class="radio-btn" data-text="긴급">
                        <input type="radio" name="radio-btn" value="" class="radio-btn" data-text="중요">
                    </div>
                </div>
                <div class="wr-list">
                    <div class="wr-list-label">키워드</div>
                    <div class="wr-list-con">
                        <input type="text" name="" value="" class="span200" placeholder="">
                        <a href="#" class="btn black ml5">추가</a>
                        <div class="mt10">
                            <span class="srtag">태그A<i class="del"></i></span>
                            <span class="srtag">태그B<i class="del"></i></span>
                            <span class="srtag">태그C<i class="del"></i></span>
                            <span class="srtag">태그D<i class="del"></i></span>
                        </div>
                    </div>
                </div>
                <div class="wr-list">
                    <div class="wr-list-label">셀렉트 박스</div>
                    <div class="wr-list-con">
                        <select data-style="selectColor-black">
                            <option data-subtext="(Sub1)">검정 셀렉트</option>
                            <option data-subtext="(Sub2)">옵션A</option>
                            <option data-subtext="(Sub3)">옵션B</option>
                            <option data-subtext="(Sub4)">옵션C</option>
                        </select>
                        <select data-style="selectColor-gray">
                            <option data-subtext="(Sub1)">회색 셀렉트</option>
                            <option data-subtext="(Sub2)">옵션A</option>
                            <option data-subtext="(Sub3)">옵션B</option>
                            <option data-subtext="(Sub4)">옵션C</option>
                        </select>
                        <select data-live-search="true">
                            <option>검색가능 셀렉트</option>
                            <option>옵션A</option>
                            <option>옵션B</option>
                            <option>옵션C</option>
                            <option>옵션D</option>
                            <option>옵션E</option>
                            <option>옵션F</option>
                            <option>옵션G</option>
                            <option>옵션H</option>
                            <option>옵션I</option>
                        </select>
                        <select id="search-cate">
                            <option>일반 셀렉트</option>
                            <option>옵션A</option>
                            <option>옵션B</option>
                            <option>옵션C</option>
                            <option>옵션D</option>
                            <option>옵션E</option>
                            <option>옵션F</option>
                            <option>옵션G</option>
                            <option>옵션H</option>
                            <option>옵션I</option>
                        </select>
                        <select multiple data-actions-box="true" title="전부선택+전부선택안함">
                            <option>옵션A</option>
                            <option>옵션B</option>
                            <option>옵션C</option>
                            <option>옵션D</option>
                        </select>
                    </div>
                </div>
                <div class="wr-list">
                    <div class="wr-list-label">INPUT</div>
                    <div class="wr-list-con">
                        <input type="text" name="" value="" class="span" placeholder="입력">
                    </div>
                </div>

                <div class="wr-list">
                    <div class="wr-list-label flex-start">INPUT + LABEL</div>
                    <div class="wr-list-con">
                        <input type="text" name="" value="" class="span130" data-label-left="왼쪽 라벨">
                        <input type="text" name="" value="" class="span130" data-label-right="오른쪽 라벨">
                    </div>
                </div>

                <div class="wr-list">
                    <div class="wr-list-label flex-start">INPUT 날짜</div>
                    <div class="wr-list-con">
                        <input type="text" name="" value="" class="span130 datepicker" data-label-left="날짜">
                    </div>
                </div>

                <div class="wr-list">
                    <div class="wr-list-label flex-start">INPUT 금액</div>
                    <div class="wr-list-con">
                        <input type="text" name="" value="" class="span130 price tright" data-label-right="원">
                    </div>
                </div>

                <div class="wr-list">
                    <div class="wr-list-label flex-start">INPUT 전화번호</div>
                    <div class="wr-list-con">
                        <input type="text" name="" value="" class="span160 phone">
                    </div>
                </div>

                <div class="wr-list">
                    <div class="wr-list-label flex-start">TEXTAREA</div>
                    <div class="wr-list-con">
                        <textarea name="" class="autoSize" placeholder="내용"></textarea>
                    </div>
                </div>

                <div class="wr-list">
                    <div class="wr-list-label flex-start">TEXTAREA (mini)</div>
                    <div class="wr-list-con">
                        <textarea name="" class="mini autoSize" placeholder="메모"></textarea>
                    </div>
                </div>

                <div class="wr-list">
                    <div class="wr-list-label flex-start">첨부파일</div>
                    <div class="wr-list-con">
                        <input name="" type="file" multiple />
                        <span class="ml15"><span class="color-red bold">00</span>가 <span class="color-red bold">000</span> 확인되었습니다.</span>
                        <p class="help-block">
                            ※ 파일은 총 00개 까지 등록 가능하며, 파일당 업로드 용량은 최대 00MB 까지 가능합니다.<br />
                            ※ 이미지 파일 (JPG, PNG, GIF) 및 문서 파일 (PDF, WORD, HWP, EXCEL)만 등록 가능합니다<br />
                            ※ 샘플 엑셀 양식은
                            <a href="#" target="_blank" class="bold color-blue">(여기)를 클릭</a>
                            하여 다운로드 받아 사용해주세요.
                        </p>
                        <ul class="upload-file">
                            <li>아파트 울타리 공사 공문_20201015.pdf<i class="del"></i></li>
                            <li>아파트 울타리 공사 공문_20201015.hwp<i class="del"></i></li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="btnSet">
                <a href="ajax.notice_view.php" class="btn blue popup-ajax">미리보기</a>
                <a href="notice_write.php" class="btn submit">확인</a>
                <a href="notice_view.php" class="btn gray">취소</a>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(function() {
            matchOnOff('input[name="notice_read_level"]', 'dong', '#sel-dong');
        });
    </script>
@endpush
