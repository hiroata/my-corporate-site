<?php
$page_title = "会社概要";
$page_description = "株式会社CLANの会社概要、経営理念、代表メッセージをご紹介します。UTAGEを活用したセールスファネル構築のプロフェッショナル集団として、お客様のビジネスの成長を支援します。";
$page_keywords = "会社概要, 企業情報, 経営理念, 代表メッセージ, CLAN, セールスファネル, UTAGE";

require_once 'includes/header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h2>会社概要</h2>
        </div>
    </section>

    <section class="company-overview">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h3>企業情報</h3>
                    <dl class="company-profile">
                        <dt>社名</dt>
                        <dd>株式会社CLAN</dd>
                        <dt>所在地</dt>
                        <dd>〒892-0851 鹿児島県鹿児島市上竜尾町1番2号</dd>
                        <dt>代表者</dt>
                        <dd>前田 由紀子</dd>
                        <dt>設立</dt>
                        <dd>2025年1月</dd>
                        <dt>資本金</dt>
                        <dd>3,000,000円</dd>
                        <dt>事業内容</dt>
                        <dd>
                            <ul class="service-list">
                                <li>セールスファネル構築代行 (UTAGE活用)</li>
                                <li>Web集客コンサルティング</li>
                                <li>マーケティング戦略立案</li>
                                <li>SNSマーケティング支援</li>
                            </ul>
                        </dd>
                        <dt>取引銀行</dt>
                        <dd>鹿児島銀行</dd>
                        <dt>連絡先</dt>
                        <dd>
                            Mail: <a href="mailto:info@clanbiz.net">info@clanbiz.net</a><br>
                            TEL: 準備中
                        </dd>
                        <dt>営業時間</dt>
                        <dd>9:00〜18:00（土日祝を除く）</dd>
                    </dl>
                </div>
                <div class="about-image">
                    <img src="images/company.png" alt="株式会社CLANのオフィス" width="400" height="300">
                </div>
            </div>
        </div>
    </section>

    <section class="mission">
        <div class="container">
            <h3>経営理念</h3>
            <div class="mission-content">
                <div class="mission-item">
                    <h4>ミッション</h4>
                    <p>セールスファネルで企業の成長を加速する</p>
                </div>
                <div class="mission-item">
                    <h4>ビジョン</h4>
                    <p>すべての企業に最適なセールスファネルを</p>
                </div>
                <div class="mission-item">
                    <h4>バリュー</h4>
                    <ul>
                        <li>顧客中心主義</li>
                        <li>革新的なソリューション</li>
                        <li>継続的な改善</li>
                        <li>誠実なコミュニケーション</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="profile" class="profile">
        <div class="container">
            <h3>代表メッセージ</h3>
            <div class="profile-content">
                <div class="profile-image">
                    <img src="images/profile.jpg" alt="前田由紀子" width="300" height="400">
                </div>
                <div class="profile-text">
                    <h4>前田 由紀子</h4>
                    <p class="profile-title">株式会社CLAN 代表取締役</p>
                    <p>
                        私たちCLANは、「セールスファネルで企業の成長を加速する」をミッションに掲げ、中小企業のデジタルマーケティングを支援しています。<br><br>
                        特にUTAGEを活用したセールスファネル構築では、お客様のビジネスに最適な導線を設計し、成果につながるまでサポートいたします。<br><br>
                        私達と共に、あなたのビジネスの新たなステージを築いていきましょう。
                    </p>
                </div>
            </div>

            <div class="profile-section">
                <h4>プロフィール</h4>
                <p>
                    鹿児島県出身。大手企業でのマーケティング経験を活かし、中小企業のデジタルマーケティング支援を行う。特にセールスファネル構築とUTAGE活用の専門家として、多くの企業の売上向上に貢献している。
                </p>
            </div>
        </div>
    </section>

    <section class="company-access">
        <div class="container">
            <h3>アクセス</h3>
            <div class="access-content">
                <div class="access-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3399.0234567891234!2d130.12345678901234!3d31.12345678901234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzHCsDA3JzM0LjQiTiAxMzDCsDA3JzM0LjQiRQ!5e0!3m2!1sja!2sjp!4v1234567890123!5m2!1sja!2sjp" 
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
                <div class="access-info">
                    <h4>交通アクセス</h4>
                    <ul>
                        <li>市電「高見馬場」電停から徒歩5分</li>
                        <li>鹿児島中央駅からタクシーで10分</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
.page-header {
    background-color: var(--color-secondary);
    color: var(--color-primary);
    padding: 4rem 0;
    margin-bottom: 2rem;
    text-align: center;
}

.service-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.service-list li {
    margin-bottom: 0.5rem;
}

.mission {
    background-color: var(--color-background);
    padding: 4rem 0;
    margin: 4rem 0;
}

.mission-content {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    text-align: center;
}

.mission-item {
    background: #fff;
    padding: 2rem;
    border-radius: var(--border-radius-md);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
}

.mission-item h4 {
    color: var(--color-accent);
    margin-bottom: 1rem;
}

.mission-item ul {
    list-style: none;
    padding: 0;
    text-align: left;
}

.mission-item ul li {
    margin-bottom: 0.5rem;
    padding-left: 1.5rem;
    position: relative;
}

.mission-item ul li:before {
    content: "•";
    color: var(--color-accent);
    position: absolute;
    left: 0;
}

.access-content {
    margin-top: 2rem;
}

.access-map {
    margin-bottom: 2rem;
}

.access-info h4 {
    margin-bottom: 1rem;
}

.access-info ul {
    list-style: none;
    padding: 0;
}

.access-info li {
    margin-bottom: 0.5rem;
    padding-left: 1.5rem;
    position: relative;
}

.access-info li:before {
    content: "•";
    color: var(--color-accent);
    position: absolute;
    left: 0;
}

@media (max-width: 768px) {
    .mission-content {
        grid-template-columns: 1fr;
    }
}
</style>

<?php require_once 'includes/footer.php'; ?>