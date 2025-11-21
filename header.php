<header id="global-header">
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
            <li><a href="<?= $base ?>/">トップページ</a></li>
            <li class="accordion_content">
                <button class="item_btn">上田しいのみ会について</button>
                <div id="samebtn">
                    <ul class="inner">
                        <li><a href="<?= $base ?>/about/">上田しいのみ会について</a></li>
                        <li><a href="<?= $base ?>/about/corporate-info/">法人情報・運営について</a></li>
                    </ul>
                </div>
            </li>
            <li class="accordion_content">
                <button class="item_btn">施設紹介</button>
                <div id="samebtn">
                    <ul class="inner">
                        <li><a href="<?= $base ?>/facilities/">施設紹介トップ</a></li>
                        <li><a href="<?= $base ?>/facilities/shiinomien/" class="disability-support">上田しいのみ園</a></li>
                        <li><a href="<?= $base ?>/facilities/tsumuginoie/" class="disability-support">上田市つむぎの家</a></li>
                        <li><a href="<?= $base ?>/facilities/ryogoen/" class="disability-support">しいのみ療護園</a></li>
                        <li><a href="<?= $base ?>/facilities/shiinomi/" class="disability-support">椎の実</a></li>
                        <li><a href="<?= $base ?>/facilities/muroganosato/" class="elderly-care">特養・室賀の里</a></li>
                        <li><a href="<?= $base ?>/facilities/day-service/" class="elderly-care">室賀デイサービスセンター</a></li>
                        <li><a href="<?= $base ?>/facilities/ikiikikaigo/" class="elderly-care">いきいき介護センター</a></li>
                        <li><a href="<?= $base ?>/facilities/kawanishi/" class="consultation">かわにし</a></li>
                        <li><a href="https://www.shiinomikai.com/khoukatsu/" target="chiikihoukatsushien" class="consultation">地域包括支援センター</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="<?= $base ?>/news/">お知らせ</a></li>
            <li><a href="<?= $base ?>/blog/">ブログ</a></li>
            <li><a href="<?= $base ?>/recruit/">採用情報</a></li>
            <li><a href="<?= $base ?>/contact/">お問い合わせ</a></li>
        </ul>
    </nav>
</header>
<script src="<?= $base ?>/hamburger.js" defer></script>
<script src="<?= $base ?>/header.js" defer></script>