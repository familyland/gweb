<?php get_header() ?>
    <div id="home" class="main">
        <section class="head-copy">
            <div class="inr">
                <div class="wrap">
                    <h1><span>Optimization of</span><span>IP Strategy & Processes Maximization</span>of Value out from IP </h1>
                    <p><?php $locale = get_locale(); if ('en_US' == $locale  ) { ?>M&S Partners is a professional patent firm that provides client-oriented solutions in the field of Intellectual Property.<?php } else { ?>M&S パートナーズはクライアント視点で知的財産に関するあらゆる局面における課題を最適に解決するプロフェッショナル集団です。<?php } ?></p>
                </div>
            </div>
        </section>

        <section class="background-video">
            <div class="cover"></div>
            <video id="mainVideo" width="1600" height="260" autoplay loop>
                <source src="/video/bg-default.mp4" type="video/mp4">
                <source src="/video/bg-default.oggtheora.ogg" type="video/ogg">
                <source src="/video/bg-default.webmhd.webm" type="video/webm">Your browser does not support the video tag.
            </video>
        </section>

        <section class="sub-copy">
          <div class="inr">
            <div class="wrap">
              <h2><?php $locale = get_locale(); if ('en_US' == $locale  ) { ?>We are inspired by inventors' inspirations.<?php } else { ?>INNOVATION from INVENTION<?php } ?></h2>
              <p><?php $locale = get_locale(); if ('en_US' == $locale  ) { ?>We like to think creatively about how to protect our clients' inventions in the most advantageous and strategic way. We are thrilled to think that such inventions, originated from inventors' inspirations, could make people happier, and we feel a deep sense of pride for<br> them when their inventions are eventually patented. We build a strong relationship with our clients by offering the utmost level of support.<?php } else { ?><p>ＡＩに代表される新しい技術の時代は、テクノロジー企業にとって、発明(Invention)から新しい価値を創出し、イノベーション(Innovation)を生み出す絶好のチャンスといえます。</p><p>そのためにも、最適な知的財産戦略をお持ちですか？ ビジネスを有利に進めるための高品質な特許ポートフォリオの構築は十分になされていますか？ 知的財産の活用による創出価値の最大化は図られていますか？私たちが、お客様の信頼できるパートナーとして全力でサポートいたします。</p><?php } ?></p>
            </div>
          </div>
        </section>
        <section class="partners">
            <div class="inr">
          <div class="l">
            <h2>Partners</h2>
                <div class="partner-link-wrap">
                <?php $locale = get_locale(); if ('en_US' == $locale  ) { ?><a class="link-arrow" href="/patent-attorneys/">More Partners</a><?php } else { ?><a class="link-arrow" href="/jp/partners/">弁理士紹介へ</a><?php } ?></div>
            </div>
            <div class="r">
                <div class="col miyazaki">
                <div class="box">
                <div class="img-wrap">
                    <img src="/img/sign-miyazaki.png" width="194" height="66" alt="" />
                </div>
                <?php $locale = get_locale(); if ('en_US' == $locale  ) { ?><p class="title">Patent Attorney/Representative Partner</p><p class="name">AKIHIKO MIYAZAKI</p><?php } else { ?><p class="title">弁理士／代表パートナー</p><p class="name">宮崎 昭彦</p><?php } ?>
               </div>
                </div>
                <div class="col tsugaru">
                <div class="box">
                <div class="img-wrap">
                    <img src="/img/sign-tsugaru.png" width="153" height="51" alt="" />
                </div>
                <?php $locale = get_locale(); if ('en_US' == $locale  ) { ?><p class="title">Patent Attorney/Representative Partner</p><p class="name">SUSUMU TSUGARU</p><?php } else { ?><p class="title">弁理士／代表パートナー</p><p class="name">津軽 進</p><?php } ?>
                </div>
                </div>
            </div>
            </div>
        </section>
        <section class="services">
            <div class="inr">
            <h2 class="section-title">Services</h2>
            <div class="l">
                <ul class="services-titles">
                    <li><h2>Patent Filing</h2></li>
                    <li><h2>IP Consulting and IP Liensing</h2></li>
                </ul>

                <p><?php $locale = get_locale(); if ('en_US' == $locale  ) { ?>We assist our clients in obtaining patent rights for their valuable inventions. Having a wealth of experience in areas such as giving expert opinions, negotiating licensing agreements, and handling patent infringement litigation, we are dedicated to preparing high quality patent applications.<?php } else { ?>技術力と法律知識を兼ね備えた専門家が様々な角度から貴社の知的財産を守るための戦略を立案し、全力を尽くします。<?php } ?></p>
<?php $locale = get_locale(); if ('en_US' == $locale  ) { ?><a class="link-arrow" href="/services/">More Services</a><?php } else { ?><a class="link-arrow" href="/jp/services/">サービスへ</a><?php } ?>
            </div>
                <div id="service-canvas"></div>
            </div>
        </section>
        <section class="access">
            <h2 class="section-title">Access</h2>
            <div class="inr">
            <div class="l">
                <div id="map">

    <style> #campus-map { width: 570px; height: 320px; margin: 0!important;} </style>
    <div id="campus-map"></div>
    <script>
    function initialize() {
        var latlng = new google.maps.LatLng(35.620683,139.728804);
        var myOptions = {
        zoom: 15,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById('campus-map'), myOptions);
        var mapStyle = [{"stylers": [{ "saturation": -100 }]}];
        var mapType = new google.maps.StyledMapType(mapStyle);
        map.mapTypes.set('GrayScaleMap', mapType);
        map.setMapTypeId('GrayScaleMap');
        var markerImg = {
        url: '/img/googleMapIcon.png'
        };
        var marker = new google.maps.Marker({
        position: new google.maps.LatLng(35.620683,139.728804),
            map: map,
            icon: markerImg
        });
    }
    </script>

                </div>
            </div>
            <div class="r">
                <p class="map-title"><?php $locale = get_locale(); if ('en_US' == $locale  ) { ?>M&S Partners<?php } else { ?>特許業務法人M&Sパートナーズ<?php } ?></p>
<?php $locale = get_locale(); if ('en_US' == $locale  ) { ?><p class="map-address"><span>8th Floor, Osaki New City</span><span>1-6-1 Osaki, Shinagawa-ku, Tokyo 141-0032, Japan</span></p><p class="map-jr"><img src="/img/icons/icon-jr.png" width="" height="" alt="" />It takes 1 minutes from Osaki Stattion.</p><?php } else { ?><p class="map-address"><span>〒141-0032</span>東京都品川区大崎1-6-1  TOC大崎ビルディング8F</p><p class="map-jr"><img src="/img/icons/icon-jr.png" width="" height="" alt="" />JR大崎駅より徒歩1分</p><?php } ?>

            </div>
            </div>
        </section>

    </div>
<?php get_footer() ?>
