<?php
$page_title = "サイトマップ";
$page_description = "株式会社CLANのウェブサイトマップです。当サイトの構成をご確認いただけます。";

require_once 'includes/header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h2>サイトマップ</h2>
        </div>
    </section>

    <section class="sitemap-section">
        <div class="container">
            <div class="sitemap-content">
                <div class="sitemap-group">
                    <h3>メインメニュー</h3>
                    <ul>
                        <li><a href="/">トップページ</a></li>
                        <li><a href="/about.php">会社概要</a></li>
                        <li><a href="/services.php">サービス紹介</a></li>
                        <li><a href="/works.php">制作実績</a></li>
                        <li><a href="/testimonials.php">お客様の声</a></li>
                        <li><a href="/contact.php">お問い合わせ</a></li>
                    </ul>
                </div>

                <div class="sitemap-group">
                    <h3>サービス</h3>
                    <ul>
                        <li>
                            <a href="/services.php#utage">UTAGE構築代行 "丸投げちゃん"</a>
                            <ul>
                                <li><a href="/services.php#standard">スタンダードプラン</a></li>
                                <li><a href="/services.php#premium">プレミアムプラン</a></li>
                                <li><a href="/services.php#enterprise">エンタープライズプラン</a></li>
                            </ul>
                        </li>
                        <li><a href="/services.php#consulting">Web集客コンサルティング</a></li>
                    </ul>
                </div>

                <div class="sitemap-group">
                    <h3>制作実績</h3>
                    <ul>
                        <li><a href="/works.php#beauty">美容サロン</a></li>
                        <li><a href="/works.php#education">教育・研修</a></li>
                        <li><a href="/works.php#ec">EC・物販</a></li>
                        <li><a href="/works.php#consulting">士業・コンサル</a></li>
                    </ul>
                </div>

                <div class="sitemap-group">
                    <h3>企業情報</h3>
                    <ul>
                        <li><a href="/about.php">会社概要</a></li>
                        <li><a href="/about.php#profile">代表メッセージ</a></li>
                        <li><a href="/about.php#access">アクセス</a></li>
                        <li><a href="/privacy.php">プライバシーポリシー</a></li>
                        <li><a href="/sitemap.php">サイトマップ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
.sitemap-section {
    padding: 4rem 0;
}

.sitemap-content {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 3rem;
    margin: 2rem 0;
}

.sitemap-group h3 {
    color: var(--color-accent);
    margin-bottom: 1.5rem;
    padding-bottom: 0.5rem;
    border-bottom: 2px solid var(--color-border);
}

.sitemap-group ul {
    list-style: none;
    padding: 0;
}

.sitemap-group ul ul {
    margin-left: 1.5rem;
    margin-top: 0.5rem;
    margin-bottom: 1rem;
}

.sitemap-group li {
    margin-bottom: 0.75rem;
}

.sitemap-group a {
    color: var(--color-text);
    text-decoration: none;
    transition: color var(--transition-speed);
}

.sitemap-group a:hover {
    color: var(--color-accent);
}

@media (max-width: 768px) {
    .sitemap-content {
        gap: 2rem;
    }
}
</style>

<?php require_once 'includes/footer.php'; ?>