@extends('resources.views.layouts.web')

@section('title', $title)

@section('content')
    <section class="container">
        <div class="page-title">{{ $title }}</div>

        <form name="" action="" method="post">
            <div class="data-search-wrap">
                <div class="data-sel">
                    <select data-style="selectColor-black">
                        <option data-subtext="(Sub)">옵션A</option>
                        <option>옵션B</option>
                        <option>옵션C</option>
                    </select>
                    <select data-style="selectColor-gray">
                        <option data-subtext="(Sub)">옵션A</option>
                        <option>옵션B</option>
                        <option>옵션C</option>
                    </select>
                    <select data-live-search="true">
                        <option>옵션 검색</option>
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
                        <option>검색항목</option>
                        <option>아이디</option>
                        <option>이름</option>
                        <option>연락처</option>
                    </select>
                    <input type="text" name="" value="" class="span250" placeholder="검색어">
                    <a href="#" class="btn gray">검색</a>
                </div>
            </div>
        </form>

        <div class="tbl-basic cell td-h4 mt10">
            <div class="tbl-header">
                <div class="caption">총 <b>123</b>개 글이 있습니다</div>
                <div class="rightSet">
                    <a href="#" class="btn green small icon-excel">엑셀 다운로드</a>
                </div>
            </div>
            <table>
                <colgroup>
                    <col width="50">
                    <col width="90">
                    <col width="60">
                    <col>
                    <col width="140">
                    <col width="160">
                    <col>
                </colgroup>
                <thead>
                    <tr>
                        <th>
                            <a href="#" class="sort">번호</a>
                        </th>
                        <th>라벨</th>
                        <th>이미지</th>
                        <th>
                            <a href="#" class="sort asc">제목</a>
                        </th>
                        <th>
                            <a href="#" class="sort desc">이름</a>
                        </th>
                        <th>
                            <a href="#" class="sort desc">등록일</a>
                        </th>
                        <th>편집</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <span class="tag-red">라벨</span>
                        </td>
                        <td><img src="{{ asset('img/temp/user_man_40_40.jpg') }}"></td>
                        <td class="subject">
                            <a href="#">죽는 날까지 하늘을 우러러 한 점 부끄럼이 없기를, 잎새에 이는 바람에도 나는 괴로워했다. 별을 노래하는 마음으로 모든 죽어가는 것을 사랑해야지.</a>
                        </td>
                        <td>홍길동</td>
                        <td class="date">2020. 10. 23</td>
                        <td>
                            <a href="#" class="btnEdit">수정</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <span class="tag-blue">라벨</span>
                        </td>
                        <td><img src="{{ asset('img/temp/user_man_40_40.jpg') }}" class="round"></td>
                        <td class="subject">
                            <a href="#">
                                <span class="tag mini">RE</span>
                                죽는 날까지 하늘을 우러러 한 점 부끄럼이 없기를, 잎새에 이는 바람에도 나는 괴로워했다. 별을 노래하는 마음으로 모든 죽어가는 것을 사랑해야지.
                            </a>
                        </td>
                        <td>홍길동</td>
                        <td class="date">2020. 10. 23</td>
                        <td>
                            <a href="#" class="btnEdit">수정</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            <span class="tag-gray">라벨</span>
                        </td>
                        <td><img src="{{ asset('img/temp/user_man_40_40.jpg') }}" class="round"></td>
                        <td class="subject">
                            <a href="#">죽는 날까지 하늘을 우러러 한 점 부끄럼이 없기를, 잎새에 이는 바람에도 나는 괴로워했다. 별을 노래하는 마음으로 모든 죽어가는 것을 사랑해야지.</a>
                        </td>
                        <td>홍길동</td>
                        <td class="date">2020. 10. 23</td>
                        <td>
                            <a href="#" class="btnEdit">수정</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>
                            <span class="tag-gray">라벨</span>
                        </td>
                        <td><img src="{{ asset('img/temp/user_man_40_40.jpg') }}" class="round"></td>
                        <td class="subject">
                            <a href="#">
                                <span class="tag mini">RE</span>
                                죽는 날까지 하늘을 우러러 한 점 부끄럼이 없기를, 잎새에 이는 바람에도 나는 괴로워했다. 별을 노래하는 마음으로 모든 죽어가는 것을 사랑해야지.
                            </a>
                        </td>
                        <td>홍길동</td>
                        <td class="date">2020. 10. 23</td>
                        <td>
                            <a href="#" class="btnEdit">수정</a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>
                            <span class="tag-gray">라벨</span>
                        </td>
                        <td><img src="{{ asset('img/temp/user_man_40_40.jpg') }}" class="round"></td>
                        <td class="subject">
                            <a href="#">죽는 날까지 하늘을 우러러 한 점 부끄럼이 없기를, 잎새에 이는 바람에도 나는 괴로워했다. 별을 노래하는 마음으로 모든 죽어가는 것을 사랑해야지.</a>
                        </td>
                        <td>홍길동</td>
                        <td class="date">2020. 10. 23</td>
                        <td>
                            <a href="#" class="btnEdit">수정</a>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>
                            <span class="tag-gray">라벨</span>
                        </td>
                        <td><img src="{{ asset('img/temp/user_man_40_40.jpg') }}" class="round"></td>
                        <td class="subject">
                            <a href="#">죽는 날까지 하늘을 우러러 한 점 부끄럼이 없기를, 잎새에 이는 바람에도 나는 괴로워했다. 별을 노래하는 마음으로 모든 죽어가는 것을 사랑해야지.</a>
                        </td>
                        <td>홍길동</td>
                        <td class="date">2020. 10. 23</td>
                        <td>
                            <a href="#" class="btnEdit">수정</a>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>
                            <span class="tag-gray">라벨</span>
                        </td>
                        <td><img src="{{ asset('img/temp/user_man_40_40.jpg') }}" class="round"></td>
                        <td class="subject">
                            <a href="#">죽는 날까지 하늘을 우러러 한 점 부끄럼이 없기를, 잎새에 이는 바람에도 나는 괴로워했다. 별을 노래하는 마음으로 모든 죽어가는 것을 사랑해야지.</a>
                        </td>
                        <td>홍길동</td>
                        <td class="date">2020. 10. 23</td>
                        <td>
                            <a href="#" class="btnEdit">수정</a>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>
                            <span class="tag-gray">라벨</span>
                        </td>
                        <td><img src="{{ asset('img/temp/user_man_40_40.jpg') }}" class="round"></td>
                        <td class="subject">
                            <a href="#">죽는 날까지 하늘을 우러러 한 점 부끄럼이 없기를, 잎새에 이는 바람에도 나는 괴로워했다. 별을 노래하는 마음으로 모든 죽어가는 것을 사랑해야지.</a>
                        </td>
                        <td>홍길동</td>
                        <td class="date">2020. 10. 23</td>
                        <td>
                            <a href="#" class="btnEdit">수정</a>
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>
                            <span class="tag-gray">라벨</span>
                        </td>
                        <td><img src="{{ asset('img/temp/user_man_40_40.jpg') }}" class="round"></td>
                        <td class="subject">
                            <a href="#">죽는 날까지 하늘을 우러러 한 점 부끄럼이 없기를, 잎새에 이는 바람에도 나는 괴로워했다. 별을 노래하는 마음으로 모든 죽어가는 것을 사랑해야지.</a>
                        </td>
                        <td>홍길동</td>
                        <td class="date">2020. 10. 23</td>
                        <td>
                            <a href="#" class="btnEdit">수정</a>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>
                            <span class="tag-gray">라벨</span>
                        </td>
                        <td><img src="{{ asset('img/temp/user_man_40_40.jpg') }}" class="round"></td>
                        <td class="subject">
                            <a href="#">죽는 날까지 하늘을 우러러 한 점 부끄럼이 없기를, 잎새에 이는 바람에도 나는 괴로워했다. 별을 노래하는 마음으로 모든 죽어가는 것을 사랑해야지.</a>
                        </td>
                        <td>홍길동</td>
                        <td class="date">2020. 10. 23</td>
                        <td>
                            <a href="#" class="btnEdit">수정</a>
                        </td>
                    </tr>
                </tbody>
            </table>

            <nav class="pg_wrap">
                <a href="#" class="pg_btn first"></a>
                <a href="#" class="pg_btn prev"></a>
                <a href="#" class="pg_btn active">1</a>
                <a href="#" class="pg_btn">2</a>
                <a href="#" class="pg_btn">3</a>
                <a href="#" class="pg_btn">4</a>
                <a href="#" class="pg_btn">5</a>
                <a href="#" class="pg_btn">6</a>
                <a href="#" class="pg_btn">7</a>
                <a href="#" class="pg_btn">8</a>
                <a href="#" class="pg_btn">9</a>
                <a href="#" class="pg_btn">10</a>
                <a href="#" class="pg_btn next"></a>
                <a href="#" class="pg_btn last"></a>
            </nav>

            <div class="btnSet">
                <a href="#" class="btn large">등록하기</a>
            </div>
        </div>

        <!-- 게시물이 없을때 -->
        <div class="tbl-basic cell td-h4 mt10">
            <div class="tbl-header">
                <div class="caption">총 <b>0</b>개 글이 있습니다</div>
            </div>
            <table>
                <colgroup>
                    <col width="50">
                    <col>
                    <col width="140">
                    <col width="160">
                    <col width="90">
                </colgroup>
                <thead>
                    <tr>
                        <th>
                            <a href="#" class="sort">번호</a>
                        </th>
                        <th>
                            <a href="#" class="sort asc">제목</a>
                        </th>
                        <th>
                            <a href="#" class="sort desc">이름</a>
                        </th>
                        <th>
                            <a href="#" class="sort desc">등록일</a>
                        </th>
                        <th>편집</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="5" class="td_empty">
                            <div class="empty_list" data-text="등록된 게시물이 없습니다."></div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- cell에 색넣기 -->
        <div class="tbl-basic cell td-h4 mt10 span700">
            <table>
                <thead>
                    <tr>
                        <th>색넣기</th>
                        <th>색넣기</th>
                        <th>색넣기</th>
                        <th>색넣기</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>OOO</td>
                        <td>OOO</td>
                        <td class="cell-red">cell-red</td>
                        <td>OOO</td>
                    </tr>
                    <tr>
                        <td class="cell-green">cell-green</td>
                        <td>OOO</td>
                        <td>OOO</td>
                        <td>OOO</td>
                    </tr>
                    <tr>
                        <td>OOO</td>
                        <td class="cell-blue">cell-blue</td>
                        <td>OOO</td>
                        <td>OOO</td>
                    </tr>
                    <tr>
                        <td>OOO</td>
                        <td>OOO</td>
                        <td>OOO</td>
                        <td class="cell-yellow">cell-yellow</td>
                    </tr>
                    <tr>
                        <td>OOO</td>
                        <td>OOO</td>
                        <td>OOO</td>
                        <td>OOO</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- 추가삭제 테이블 -->
        <div class="tbl-basic cell td-h1 mt50" style="max-width:1080px;">
            <div class="tbl-header">
                <div class="caption">총 000건</div>
                <div class="rightSet">
                    <span class="btn small blue add-list">+ 추가하기</span>
                </div>
            </div>
            <table id="resident_list">
                <colgroup>
                    <col width="60">
                    <col width="160">
                    <col width="140">
                    <col width="150">
                    <col>
                    <col width="140">
                    <col width="150">
                    <col width="70">
                </colgroup>
                <thead>
                    <tr>
                        <th>선택</th>
                        <th>분류</th>
                        <th>이름</th>
                        <th>휴대폰 번호</th>
                        <th>가입여부</th>
                        <th>등록자</th>
                        <th>등록일</th>
                        <th>관리</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <label><input type="checkbox" name="" /></label>
                        </td>
                        <td>
                            <select class="span">
                                <option>분류A</option>
                                <option>분류B</option>
                                <option selected>분류C</option>
                                <option>분류D</option>
                            </select>
                        </td>
                        <td><input type="text" name="" value="홍길동" class="span" placeholder=""></td>
                        <td><input type="text" name="" value="010-1234-5678" class="phone span" placeholder=""></td>
                        <td>자동승인</td>
                        <td>SuperID</td>
                        <td class="date">2020. 10. 23</td>
                        <td>
                            <a href="#" class="btn small black del-list">삭제</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label><input type="checkbox" name="" /></label>
                        </td>
                        <td>
                            <select class="span">
                                <option>분류A</option>
                                <option>분류B</option>
                                <option selected>분류C</option>
                                <option>분류D</option>
                            </select>
                        </td>
                        <td><input type="text" name="" value="홍길동" class="span" placeholder=""></td>
                        <td><input type="text" name="" value="010-1234-5678" class="phone span" placeholder=""></td>
                        <td>자동승인</td>
                        <td>SuperID</td>
                        <td class="date">2020. 10. 23</td>
                        <td>
                            <span class="btn small black del-list">삭제</span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="btnSet">
                <div class="leftSet">
                    <a href="#" class="btn black mini">선택 삭제</a>
                    <span class="help-block ml5"></span>
                </div>
                <a href="#" class="btn large span80">저장</a>
                <a href="resident_view.php" class="btn large gray">취소</a>
            </div>
        </div>

        <div class="t2d-flex">

            <!-- td-h1, td-h2, td-h3, td-h4, td-h5, td-h6, td-h7 -->
            <div class="tbl-basic cell td-h1 mt50 auto">
                <table>
                    <colgroup>
                        <col>
                    </colgroup>
                    <thead>
                        <tr>
                            <th>높이 조절 클래스명</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="bold">td-h1</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="tbl-basic cell td-h2 mt50 auto">
                <table>
                    <colgroup>
                        <col>
                    </colgroup>
                    <thead>
                        <tr>
                            <th>높이 조절 클래스명</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="bold">td-h2</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="tbl-basic cell td-h3 mt50 auto">
                <table>
                    <colgroup>
                        <col>
                    </colgroup>
                    <thead>
                        <tr>
                            <th>높이 조절 클래스명</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="bold">td-h3</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="tbl-basic cell td-h4 mt50 auto">
                <table>
                    <colgroup>
                        <col>
                    </colgroup>
                    <thead>
                        <tr>
                            <th>높이 조절 클래스명</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="bold">td-h4</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="tbl-basic cell td-h5 mt50 auto">
                <table>
                    <colgroup>
                        <col>
                    </colgroup>
                    <thead>
                        <tr>
                            <th>높이 조절 클래스명</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="bold">td-h5</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="tbl-basic cell td-h6 mt50 auto">
                <table>
                    <colgroup>
                        <col>
                    </colgroup>
                    <thead>
                        <tr>
                            <th>높이 조절 클래스명</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="bold">td-h6</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="tbl-basic cell td-h7 mt50 auto">
                <table>
                    <colgroup>
                        <col>
                    </colgroup>
                    <thead>
                        <tr>
                            <th>높이 조절 클래스명</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="bold">td-h7</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>
@endsection

@push('styles')
    <style type="text/css">
        .t2d-flex {
            display: flex;
            align-items: flex-start;
            margin-top: 60px;
        }

        .t2d-flex > .tbl-basic {
            margin-right: 15px;
        }
    </style>
@endpush

@push('scripts')
    <script type="text/javascript">
        $(function() {
            $(document).on('click', '.add-list', function() {
                add_list();
            });

            $(document).on('click', '.del-list', function() {
                if (!confirm('선택하신 OOO이 삭제됩니다. 계속하시겠습니까?'))
                    return false;
                var $tr = $(this).closest('tr');
                $tr.remove();
            });
        });

        function add_list() {
            var $resident_list = $('#resident_list');
            var list = '<tr>';
            list += '<td><label><input type="checkbox" name="" /><span></span></label></td>';
            list += '<td>';
            list += '<select class="span">';
            list += '<option>분류A</option>';
            list += '<option>분류B</option>';
            list += '<option>분류C</option>';
            list += '<option>분류D</option>';
            list += '</select>';
            list += '</td>';
            list += '<td><input type="text" name="" value="" class="span" placeholder=""></td>';
            list += '<td><input type="text" name="" value="" class="phone span" placeholder=""></td>';
            list += '<td class="cell-red">미가입</td>';
            list += '<td>-</td>';
            list += '<td class="date">-</td>';
            list += '<td><a href="#" class="btn small gray del-list">삭제</a></td>';
            list += '</tr>';
            var $tr_last = null;
            var $tr_last = $resident_list.find('tr:last');
            $tr_last.after(list);
            $('select').selectpicker('refresh');
        }
    </script>
@endpush
