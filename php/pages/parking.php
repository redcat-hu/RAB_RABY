<div class="bg1 parking">
<div class="bg_main"></div>
    <div class="inner_window f0">
        <h1 class="title"><?= $lang_data[$language[0]]["home"]["parking2"]; ?></h1>
        <p><?= $lang_data[$language[0]]["home"]["parking3"]; ?></p>
        <div class="f0">
            <b><?= $lang_data[$language[0]]["park"]["navi"]; ?>:</b>
            <a class="btn" target="_blank" href="https://goo.gl/maps/TkLoKxx2CiqshpTw7"><i class="bi bi-p-circle-fill"></i> <?= $lang_data[$language[0]]["park"]["car"]; ?></a>
            <a class="btn" target="_blank" href="https://goo.gl/maps/NRjDn6Wge79cRHr96"><i class="bi bi-bicycle"></i> <?= $lang_data[$language[0]]["park"]["walk"]; ?></a>
        </div>
        <a target="_blank" href="<?= $local[1] ?>img/parking.webp"><img src="<?= $local[1] ?>img/parking.webp" loading="lazy" alt="parking map of szentendre"></a>
        <a class="btn" target="_blank" href="https://szentendre.hu/parkolas/"><i class="bi bi-info-circle"></i> <?= $lang_data[$language[0]]["home"]["moreinfo"]; ?></a>
    </div>
</div>