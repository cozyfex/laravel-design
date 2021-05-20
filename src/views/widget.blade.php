@extends('resources.views.layouts.web')

@section('title', $title)

@section('content')
    <section id="background" class="container">
        <div class="page-title">{{ $title }}</div>
        <div class="tabs-wraper">
            <div class="tabs-group">
                <a href="#" class="tab active">Tab1</a>
                <a href="#" class="tab">Tab2</a>
                <a href="#" class="tab">Tab3</a>
            </div>
            <div class="tabsContainer">
                <div class="tabCon active">
                    <h1>h1 - 윤동주(서시)</h1>
                    <h2>h2 - 윤동주(서시)</h2>
                    <h3>h3 - 윤동주(서시)</h3>
                    <h4>h4 - 윤동주(서시)</h4>
                    <h5>h5 - 윤동주(서시)</h5>
                    <h6>h6 - 윤동주(서시)</h6>
                    우리말에서 ‘별’은 그 ‘큰 대(大)’자 모양의 도형과 관련해서 동식물의 이름에 많이 쓰이는 것을 볼 수 있다.<br />
                    동식물 가운데도 곤충의 이름에 많이 쓰인다. ‘별꼬리하루살이, 별꽃등에, 별나나니, 별무늬-꼬마거미, 별박이-노린재, 별박이-명주잠자리, 별박이-세줄나비,<br />
                    별박이-안주홍불나방, 별박이-왕잠자리, 별박이-자나방, 별벌레(星蟲), 별수시렁이, 별쌍살벌, 별쌕쌔기,<br />
                    별점-반날개베짱이, 별파리, 별풍덩이파리’와 같은 많은 이름은 곤충의 이름이다.
                </div>
                <div class="tabCon">
                    별과 관련된 전통문화(傳統文化)로는 ‘별거리놀이’가 있다.<br />
                    이는 경남 사천(泗川)지방의 농악 판굿의 하나다.<br />
                    다드래기 가락을 한참 치다가 상쇠의 신호로 일시에 멈추고,<br />
                    상쇠가 “별 따자, 별 따자 하늘 멀리 별 따자” 하는 구호를 외치면 모두 다시 다드래기 가락을 치는 놀이이다.
                </div>
                <div class="tabCon">
                    ‘달별, 떠돌이별, 별똥별, 샛별, 어둠별, 살별’과 같은 별들의 이름은 우리 나름의 발상과 문화를 반영하고 있다.<br />
                    그 중 대표적인 것이 ‘샛별’이다. 이는 신성을 의미하는 말이 아니다. 금성(金星), 곧 Venus를 가리키는 말이다.<br />
                    이는 동쪽 하늘에서 유달리 반짝반짝 빛나 사람의 시선을 끄는 별이다. 그래서 어느 별보다 사랑을 받는다.
                </div>
            </div>
        </div>

        <div class="mt40"></div>

        <div class="slide-toggle-wraper">
            <div class="slide-toggle-list open">
                <div class="slide-opener">윤동주 서시 (1941년 윤동주가 지은 시)</div>
                <div class="slideCon">
                    금성은 아침과 저녁에 따라 그 이름을 달리한다. 저녁에 비치는 금성은 ‘개밥바라기’, 또는 태백성(太白星)이라 하고,<br />
                    새벽에 비치는 것은 ‘샛별’, 또는 계명성(啓明星)이라 한다. ‘샛별’은 동방의 별이란 말이다. 이는 ‘새(東)’와 ‘별(星)’이 합성된 것이다.<br />
                    낱말 사이의 시옷은 두 말을 이어 주는 말이다. 금성이 이렇게 동방의 별을 의미하기에 우리 동요에서는 “샛별이 등대란다 길을 찾아라”라 노래 불리고 있다.
                </div>
            </div>
            <div class="slide-toggle-list">
                <div class="slide-opener">첫째 연에서는 하늘의 이미지가 표상하듯이 천상적인 세계를 지향하는 순결 의지가 드러난다.</div>
                <div class="slideCon">
                    첫째 연에서는 하늘의 이미지가 표상하듯이 천상적인 세계를 지향하는 순결 의지가 드러난다.<br />
                    바라는 것, 이념적인 것과 실존적인 것, 한계적인 것 사이의 갈등과 부조화 속에서 오는 부끄러움의 정조가 두드러진다.
                </div>
            </div>
            <div class="slide-toggle-list">
                <div class="slide-opener">둘째 연에는 대지적 질서 속에서의 삶의 고뇌와 함께 섬세한 감수성의 울림이 드러난다.</div>
                <div class="slideCon">
                    둘째 연에는 대지적 질서 속에서의 삶의 고뇌와 함께 섬세한 감수성의 울림이 드러난다.<br />
                    셋째 연에는 “별을 노래하는 마음”으로서의 ‘진실한 마음, 착한 마음, 아름다운 마음’을 바탕으로 한 운명애의 정신이 핵심을 이룬다.<br /><br />
                    특히, “그리고 나한테 주어진 길을 걸어가야겠다.”라는 구절은 운명애에 대한 확고하면서도 신념에 찬 결의를 다지고 있는 것으로 해석된다.
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $(function() {
            matchOnOff('input[name="notice_read_level"]', 'dong', '#sel-dong');
        });
    </script>
@endsection
