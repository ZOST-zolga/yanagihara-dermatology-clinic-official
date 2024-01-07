<div class="cmn-each-part">
    <section class="cmn-two-part">
        <h2 class="cmn-title" id="medical-time">診療時間</h2>
        <table class="medical-hours-table">
            <tr class="medical-hours-row">
                <th class="medical-hours-table-title">診療時間</th>
                <td class="medical-hours-content">月</td>
                <td class="medical-hours-content">火</td>
                <td class="medical-hours-content">水</td>
                <td class="medical-hours-content">木</td>
                <td class="medical-hours-content">金</td>
                <td class="medical-hours-content">土</td>
                <td class="medical-hours-content">日</td>
            </tr>
            <tr class="medical-hours-row">
                <th class="medical-hours-table-title">10:00-13:00</th>
                <td class="medical-hours-content">&#9675;</td>
                <td class="medical-hours-content">&#9675;</td>
                <td class="medical-hours-content">&#9675;</td>
                <td class="medical-hours-content">&#0215;</td>
                <td class="medical-hours-content">&#9675;</td>
                <td class="medical-hours-content">&#9675;</td>
                <td class="medical-hours-content">&#0215;</td>
            </tr>
            <tr class="medical-hours-row">
                <th class="medical-hours-table-title">16:00-19:00</th>
                <td class="medical-hours-content">&#9675;</td>
                <td class="medical-hours-content">&#9675;</td>
                <td class="medical-hours-content">&#9675;</td>
                <td class="medical-hours-content">&#0215;</td>
                <td class="medical-hours-content">&#9675;</td>
                <td class="medical-hours-content">&#0215;</td>
                <td class="medical-hours-content">&#0215;</td>
            </tr>
        </table>
    <div class="medical-hours-info">
        <span class="medical-hours-info-title">休診</span>
        <span class="medical-hours-info-content">木曜・土曜午後・日曜・祝日</span>
    </div>
    </section>
    <section class="cmn-two-part">
        <h2 class="cmn-title" id="first-time">初診の方へ : お持ちいただくもの</h2>
        <div class="bring-list-container">
            <ul class="bring-list">
                <li class="bring-item">&#9312;健康保険証（月１回は提示をお願いします）</li>
                <li class="bring-item">&#9313;マイナンバーカード（お持ちの方のみ）</span></li>
                <li class="bring-item">&#9314;お薬手帳（お持ちの方のみ）</li>
                <li class="bring-item">&#9315;診療情報提供書（お持ちの方のみ）</li>
            </ul>
        </div>
    </section>
</div>
<div class="cmn-each-part">
    <section class="cmn-two-part" >
        <h2 class="cmn-title" id="access-info">アクセス・地図</h2>
        <div class="access">
            <div class="address-box">
                <div class="address-container">
                    <p class="address access-item-top">&#12306;536-0023</p>
                    <p class="address">大阪府大阪市城東区東中浜３丁目４−１</p>
                </div>
            </div>
            <ul class="access-list">
                <li class="access-item">大阪メトロ・今里筋線・緑橋駅6番出口から徒歩1分</li>
                <li class="access-item">大阪メトロ・中央線・緑橋駅4番出口から徒歩3分</li>
            </ul>
        </div>
    </section>
    <div class="cmn-two-part map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13123.635842630469!2d135.5449691!3d34.6822471!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e095e1673793%3A0x4ac014e8c1f2c98c!2z5p-z5Y6f55qu6Iaa56eR44Kv44Oq44OL44OD44Kv!5e0!3m2!1sja!2sjp!4v1695131941165!5m2!1sja!2sjp" width="100%" height="250px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<div class="various">
    <a href="<?php echo home_url('doctor'); ?>" class="pics-a"><img src="<?php echo get_template_directory_uri(); ?>/img/top/doctor.png" alt="doctor" class="pics"></a>
    <a href="<?php echo home_url('treatment'); ?>" class="pics-a"><img src="<?php echo get_template_directory_uri(); ?>/img/top/treatment.png" alt="treatment" class="pics"></a>
    <a href="<?php echo home_url('faq'); ?>" class="pics-a"><img src="<?php echo get_template_directory_uri(); ?>/img/top/faq.png" alt="faq" class="pics"></a>
    <a href="<?php echo home_url('equipment'); ?>" class="pics-a"><img src="<?php echo get_template_directory_uri(); ?>/img/top/equipment.png" alt="equipment" class="pics"></a>
</div>
<div class="footer-menu-container">
    <ul class="footer-menu-list">
        <?php if ( is_home() || is_front_page() ) : ?>
            <li class="footer-menu-item"><a href="" class="footer-menu-item-a">&raquo;ホーム</a></li>
            <li class="footer-menu-item"><a href="#first-time" class="footer-menu-item-a">&raquo;初診の方へ</a></li>
        <?php else: ?>
            <li class="footer-menu-item"><a href="<?php echo home_url(''); ?>" class="footer-menu-item-a">&raquo;ホーム</a></li>
            <li class="footer-menu-item"><a href="<?php echo home_url(''); ?>#first-time" class="footer-menu-item-a">&raquo;初診の方へ</a></li>
        <?php endif; ?>
            <li class="footer-menu-item"><a href="<?php echo home_url('doctor'); ?>" class="footer-menu-item-a">&raquo;医師紹介</a></li>
            <li class="footer-menu-item"><a href="<?php echo home_url('treatment'); ?>" class="footer-menu-item-a">&raquo;診療内容</a></li>
            <li class="footer-menu-item"><a href="<?php echo home_url('insurance-treatment'); ?>" class="footer-menu-item-a">&raquo;保険治療</a></li>
            <li class="footer-menu-item"><a href="<?php echo home_url('own-expense-treatment'); ?>" class="footer-menu-item-a">&raquo;自費診療</a></li>
            <li class="footer-menu-item"><a href="<?php echo home_url('equipment'); ?>" class="footer-menu-item-a">&raquo;院内設備紹介</a></li>
            <li class="footer-menu-item"><a href="<?php echo home_url('faq'); ?>" class="footer-menu-item-a">&raquo;よくある質問</a></li>
            <li class="footer-menu-item"><a href="#medical-time" class="footer-menu-item-a">&raquo;診療時間</a></li>
            <li class="footer-menu-item"><a href="#access-info" class="footer-menu-item-a">&raquo;アクセス・地図</a></li>
    </ul>
</div>
<footer class="footer-container">
    <a href="#" class="scroll-page-top">
            &#0060;
    </a>
    <p class="copyright">
        <small>&copy;YANAGIHARA Dermatorogy Clinic All rights reserved.</small>
    </p>
</footer>
</body>
</html>