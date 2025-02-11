<?php
$page_title = "トップページ";
$page_description = "株式会社CLANは、UTAGEを活用したセールスファネル構築代行とWeb集客コンサルティングで、あなたのビジネスの成長を加速させます。";
$page_keywords = "UTAGE, セールスファネル, Web集客, デジタルマーケティング, 鹿児島";

require_once 'includes/header.php';
?>

<section id="home" class="hero">
    <div class="hero__content">
        <h2>セールスファネルで<br>企業の成長を加速する</h2>
        <p>UTAGE活用のプロフェッショナルとして、<br>最適なセールスファネルを構築</p>
        <a href="/contact.php" class="cta-button">お問い合わせ</a>
    </div>
</section>

<main>
    <section id="works" class="works">
        <div class="container">
            <h2>制作実績</h2>
            <div class="works-grid">
                <div class="work-card">
                    <img src="images/work1.png" alt="制作実績1" width="300" height="200">
                    <h3>実績タイトル1</h3>
                    <p>実績の簡単な説明1</p>
                </div>
                <div class="work-card">
                    <img src="images/work2.png" alt="制作実績2" width="300" height="200">
                    <h3>実績タイトル2</h3>
                    <p>実績の簡単な説明2</p>
                </div>
                <div class="work-card">
                    <img src="images/work3.png" alt="制作実績3" width="300" height="200">
                    <h3>実績タイトル3</h3>
                    <p>実績の簡単な説明3</p>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="testimonials">
        <div class="container">
            <h2>お客様の声</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <p>「UTAGE導入後、見込み客が2倍に増えました！」</p>
                    <p class="testimonial-author">- A社 代表取締役 山田様</p>
                </div>
                <div class="testimonial-card">
                    <p>「Web集客の知識が全くない私でも、安心して任せられました。」</p>
                    <p class="testimonial-author">- B社 マーケティング担当 鈴木様</p>
                </div>
            </div>
        </div>
    </section>

    <section id="consulting" class="consulting">
        <div class="container">
            <h2>顧問サービス</h2>
            <div class="consulting-content">
                <div class="consulting-text">
                    <h3>UTAGE構築代行 "丸投げちゃん"</h3>
                    <p>
                        UTAGEを活用したセールスファネルの構築を、企画から運用まで丸投げでサポートします。
                        「Web集客を強化したいが、何から手をつけていいか分からない」
                        「UTAGEを導入したが、使いこなせていない」
                        「専門知識を持ったパートナーに、安心して任せたい」
                        そんなお悩みをお持ちの企業様に最適なサービスです。
                    </p>
                    <p>
                        お客様のビジネスモデルや目標に合わせて、最適なファネル戦略を立案。
                        UTAGEの機能を最大限に活用し、見込み客の獲得から顧客育成、販売までを自動化する仕組みを構築します。
                        さらに、効果測定や改善提案も行い、継続的な成果向上をサポートします。
                    </p>
                </div>
                <div class="consulting-image">
                    <img src="images/utage.png" alt="UTAGE構築代行" width="400" height="300">
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>