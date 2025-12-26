<header id="global-header">
    <a href="#main-contents" class="main-scroll">本文を読む</a>
    <div class="head-wr">
        <a href="<?= $base ?>/" id="head-top" class="logo">
            <img src="<?= $base ?>/logo.jpg" alt="社会福祉法人上田しいのみ会" class="logo-img">
        </a>
        <button id="hamburger_btn" class="hamburger_btn">
        <span></span>
        <span></span>
        <span></span>
        </button>
        <nav class="menu">
            <a href="<?= $base ?>/" id="head-top" class="logo">
                <img src="<?= $base ?>/logo.jpg" alt="社会福祉法人上田しいのみ会" class="logo-img">
            </a>
            <ul class="head_nav">
                <li><a href="<?= $base ?>/" id="head-top">トップページ</a></li>
                <li class="accordion_content">
                    <button class="item_btn" id="head-nav-about">上田しいのみ会について</button>
                    <div id="samebtn">
                        <ul class="inner">
                            <li><a href="<?= $base ?>/about/" id="nav-about">上田しいのみ会について</a></li>
                            <li><a href="<?= $base ?>/about/corporate-info/" id="nav-corporate-info">法人情報・運営について</a></li>
                        </ul>
                    </div>
                </li>
                <li class="accordion_content">
                    <button class="item_btn" id="head-facilities">施設紹介</button>
                    <div id="samebtn">
                        <ul class="inner">
                            <li><a href="<?= $base ?>/facilities/" id="head-facilities-top">施設紹介トップ</a></li>
                            <li><a href="<?= $base ?>/facilities/shiinomien/" class="disability-support" id="head-shiinomien">上田しいのみ園</a></li>
                            <li><a href="<?= $base ?>/facilities/tsumuginoie/" class="disability-support" id="head-tsumuginoie">上田市つむぎの家</a></li>
                            <li><a href="<?= $base ?>/facilities/ryogoen/" class="disability-support" id="head-ryogoen">しいのみ療護園</a></li>
                            <li><a href="<?= $base ?>/facilities/shiinomi/" class="disability-support" id="head-shiinomi">椎の実</a></li>
                            <li><a href="<?= $base ?>/facilities/muroganosato/" class="elderly-care" id="head-muroganosato">特養・室賀の里</a></li>
                            <li><a href="<?= $base ?>/facilities/day-service/" class="elderly-care" id="head-day-service">室賀デイサービスセンター</a></li>
                            <li><a href="<?= $base ?>/facilities/ikiikikaigo/" class="elderly-care" id="head-ikiikikaigo">いきいき介護センター</a></li>
                            <li><a href="<?= $base ?>/facilities/kawanishi/" class="consultation" id="head-kawanishi">かわにし</a></li>
                            <li><a href="https://www.shiinomikai.com/khoukatsu/" target="chiikihoukatsushien" class="consultation" id="head-chiikihoukatsushien">地域包括支援センター</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="<?= $base ?>/news/" id="head-news">お知らせ</a></li>
                <li><a href="<?= $base ?>/blog/" id="head-blog">ブログ</a></li>
                <li><a href="<?= $base ?>/recruit/" id="head-recruit">採用情報</a></li>
                <li><a href="<?= $base ?>/contact/" id="head-contact">お問い合わせ</a></li>
            </ul>
        </nav>
    </div>
</header>
<script src="<?= $base ?>/hamburger.js" defer></script>
<script src="<?= $base ?>/header.js" defer></script>
<script src="<?= $base ?>/main-scroll.js" defer></script>