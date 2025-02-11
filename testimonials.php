<?php
$page_title = "お客様の声";
$page_description = "株式会社CLANのサービスをご利用いただいているお客様からの声をご紹介します。具体的な成果や導入事例について詳しくご覧いただけます。";
$page_keywords = "お客様の声, 導入事例, 実績, セールスファネル, UTAGE, クライアント";

require_once 'includes/header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h2>お客様の声</h2>
        </div>
    </section>

    <section class="testimonials-featured">
        <div class="container">
            <h3>導入企業様からの声</h3>
            <div class="testimonial-cards">
                <article class="testimonial-card featured">
                    <div class="testimonial-header">
                        <img src="images/client1.jpg" alt="A社 代表取締役 山田様" class="client-image" loading="lazy">
                        <div class="client-info">
                            <h4>A社 代表取締役</h4>
                            <p class="client-name">山田 太郎 様</p>
                            <p class="client-company">美容サロン運営</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="results">
                            <div class="result-item">
                                <span class="metric">売上増加率</span>
                                <span class="value">235%</span>
                            </div>
                            <div class="result-item">
                                <span class="metric">導入期間</span>
                                <span class="value">6ヶ月</span>
                            </div>
                        </div>
                        <blockquote>
                            <p>「UTAGEの導入で、新規予約が2倍以上に増加しました。特に自動化された顧客フォローの仕組みは、スタッフの工数削減にも大きく貢献しています。」</p>
                        </blockquote>
                    </div>
                </article>

                <article class="testimonial-card featured">
                    <div class="testimonial-header">
                        <img src="images/client2.jpg" alt="B社 マーケティング担当 鈴木様" class="client-image" loading="lazy">
                        <div class="client-info">
                            <h4>B社 マーケティング担当</h4>
                            <p class="client-name">鈴木 花子 様</p>
                            <p class="client-company">士業事務所</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="results">
                            <div class="result-item">
                                <span class="metric">問い合わせ数</span>
                                <span class="value">180%増</span>
                            </div>
                            <div class="result-item">
                                <span class="metric">導入期間</span>
                                <span class="value">3ヶ月</span>
                            </div>
                        </div>
                        <blockquote>
                            <p>「Web集客の知識が全くない状態からのスタートでしたが、丁寧なサポートのおかげで短期間で成果を出すことができました。」</p>
                        </blockquote>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="case-studies">
        <div class="container">
            <h3>詳細なケーススタディ</h3>
            <div class="case-study">
                <div class="case-study-header">
                    <h4>美容サロンのDX推進事例</h4>
                    <span class="industry-tag">美容業界</span>
                </div>
                <div class="case-study-content">
                    <div class="challenge">
                        <h5>課題</h5>
                        <ul>
                            <li>予約管理の工数が多く、スタッフの負担大</li>
                            <li>新規顧客の獲得が頭打ち</li>
                            <li>顧客データの活用が不十分</li>
                        </ul>
                    </div>
                    <div class="solution">
                        <h5>導入した施策</h5>
                        <ul>
                            <li>UTAGEによる予約管理の自動化</li>
                            <li>顧客セグメント別の自動フォロー</li>
                            <li>リピート促進のLINE連携</li>
                        </ul>
                    </div>
                    <div class="results">
                        <h5>成果</h5>
                        <ul>
                            <li>予約管理の工数を80%削減</li>
                            <li>新規予約数が月平均35件増加</li>
                            <li>リピート率が25%向上</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials-grid">
        <div class="container">
            <h3>その他のお客様の声</h3>
            <div class="grid">
                <div class="testimonial-item">
                    <blockquote>
                        「セールスファネルの構築から運用まで、一貫してサポートしていただき助かっています。」
                    </blockquote>
                    <p class="author">C社 営業部長 田中様</p>
                </div>
                <div class="testimonial-item">
                    <blockquote>
                        「データに基づいた改善提案をいただき、着実に成果を上げることができました。」
                    </blockquote>
                    <p class="author">D社 代表取締役 佐藤様</p>
                </div>
                <div class="testimonial-item">
                    <blockquote>
                        「専門的な知識がなくても、分かりやすく説明していただけるので安心です。」
                    </blockquote>
                    <p class="author">E社 広報担当 中村様</p>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
.testimonial-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin: 3rem 0;
}

.testimonial-card {
    background: #fff;
    border-radius: var(--border-radius-md);
    padding: 2rem;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
}

.testimonial-header {
    display: flex;
    align-items: center;
    gap: 1.5rem;
    margin-bottom: 1.5rem;
}

.client-image {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
}

.client-info h4 {
    margin-bottom: 0.5rem;
}

.client-name {
    color: var(--color-text);
    font-weight: 500;
}

.client-company {
    color: var(--color-text-light);
    font-size: 0.875rem;
}

.results {
    display: flex;
    gap: 1rem;
    margin-bottom: 1.5rem;
}

.result-item {
    flex: 1;
    text-align: center;
    background: var(--color-background);
    padding: 1rem;
    border-radius: var(--border-radius-sm);
}

.metric {
    display: block;
    font-size: 0.875rem;
    color: var(--color-text-light);
}

.value {
    display: block;
    font-size: 1.5rem;
    font-weight: bold;
    color: var(--color-accent);
    margin-top: 0.5rem;
}

blockquote {
    font-style: italic;
    position: relative;
    padding-left: 1.5rem;
    border-left: 3px solid var(--color-accent);
}

.case-study {
    background: #fff;
    border-radius: var(--border-radius-md);
    padding: 2rem;
    margin: 3rem 0;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
}

.case-study-header {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 2rem;
}

.industry-tag {
    background: var(--color-accent);
    color: #fff;
    padding: 0.25rem 1rem;
    border-radius: var(--border-radius-sm);
    font-size: 0.875rem;
}

.case-study-content {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.case-study-content h5 {
    color: var(--color-accent);
    margin-bottom: 1rem;
}

.case-study-content ul {
    list-style: none;
    padding: 0;
}

.case-study-content li {
    margin-bottom: 0.5rem;
    padding-left: 1.5rem;
    position: relative;
}

.case-study-content li:before {
    content: "•";
    color: var(--color-accent);
    position: absolute;
    left: 0;
}

.testimonials-grid .grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin: 3rem 0;
}

.testimonial-item {
    background: #fff;
    padding: 2rem;
    border-radius: var(--border-radius-md);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
}

.testimonial-item blockquote {
    margin-bottom: 1rem;
}

.testimonial-item .author {
    color: var(--color-text-light);
    font-size: 0.875rem;
    text-align: right;
}

@media (max-width: 768px) {
    .testimonial-cards {
        grid-template-columns: 1fr;
    }

    .case-study-content {
        grid-template-columns: 1fr;
    }
}
</style>

<?php require_once 'includes/footer.php'; ?>