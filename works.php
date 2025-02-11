<?php
$page_title = "制作実績";
$page_description = "株式会社CLANのUTAGEを活用したセールスファネル構築の実績をご紹介します。様々な業種での導入事例と具体的な成果をご覧いただけます。";
$page_keywords = "制作実績, 導入事例, セールスファネル, UTAGE, Web集客, 成功事例";

require_once 'includes/header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h2>制作実績</h2>
        </div>
    </section>

    <section class="success-stories">
        <div class="container">
            <h3>導入企業の成功事例</h3>
            <div class="cases-grid">
                <article class="case-card">
                    <div class="case-image">
                        <img src="images/case1.jpg" alt="美容サロンの事例" loading="lazy">
                    </div>
                    <div class="case-content">
                        <span class="case-category">美容サロン</span>
                        <h4>新規予約数300%増加を実現</h4>
                        <div class="case-results">
                            <div class="result-item">
                                <span class="result-label">集客数</span>
                                <span class="result-value">300%増</span>
                            </div>
                            <div class="result-item">
                                <span class="result-label">CVR</span>
                                <span class="result-value">12.5%</span>
                            </div>
                        </div>
                        <p>UTAGEを活用した自動予約システムの導入により、新規予約の獲得数が大幅に向上。顧客管理の効率化も実現しました。</p>
                        <a href="#" class="case-link">詳細を見る</a>
                    </div>
                </article>

                <article class="case-card">
                    <div class="case-image">
                        <img src="images/case2.jpg" alt="士業事務所の事例" loading="lazy">
                    </div>
                    <div class="case-content">
                        <span class="case-category">士業事務所</span>
                        <h4>見込み顧客の獲得数200%増加</h4>
                        <div class="case-results">
                            <div class="result-item">
                                <span class="result-label">リード獲得</span>
                                <span class="result-value">200%増</span>
                            </div>
                            <div class="result-item">
                                <span class="result-label">商談率</span>
                                <span class="result-value">35%</span>
                            </div>
                        </div>
                        <p>セミナー集客からの顧客育成を自動化し、質の高い見込み顧客の獲得に成功。業務効率も大幅に改善しました。</p>
                        <a href="#" class="case-link">詳細を見る</a>
                    </div>
                </article>

                <article class="case-card">
                    <div class="case-image">
                        <img src="images/case3.jpg" alt="EC事業者の事例" loading="lazy">
                    </div>
                    <div class="case-content">
                        <span class="case-category">EC事業</span>
                        <h4>年間売上150%アップを達成</h4>
                        <div class="case-results">
                            <div class="result-item">
                                <span class="result-label">売上</span>
                                <span class="result-value">150%増</span>
                            </div>
                            <div class="result-item">
                                <span class="result-label">LTV</span>
                                <span class="result-value">180%増</span>
                            </div>
                        </div>
                        <p>顧客のセグメント化と自動フォローの実装により、リピート購入率が大幅に向上し、売上増加を実現しました。</p>
                        <a href="#" class="case-link">詳細を見る</a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="achievement">
        <div class="container">
            <h3>これまでの実績</h3>
            <div class="achievement-grid">
                <div class="achievement-item">
                    <span class="achievement-number">150+</span>
                    <span class="achievement-label">導入企業数</span>
                </div>
                <div class="achievement-item">
                    <span class="achievement-number">95%</span>
                    <span class="achievement-label">継続率</span>
                </div>
                <div class="achievement-item">
                    <span class="achievement-number">180%</span>
                    <span class="achievement-label">平均売上向上率</span>
                </div>
            </div>
        </div>
    </section>

    <section class="industry-cases">
        <div class="container">
            <h3>業種別の導入事例</h3>
            <div class="industry-grid">
                <div class="industry-item">
                    <i class="fas fa-cut"></i>
                    <h4>美容・サロン</h4>
                    <ul>
                        <li>新規予約の自動化</li>
                        <li>リピート促進施策</li>
                        <li>顧客管理の効率化</li>
                    </ul>
                </div>
                <div class="industry-item">
                    <i class="fas fa-graduation-cap"></i>
                    <h4>教育・研修</h4>
                    <ul>
                        <li>セミナー集客の自動化</li>
                        <li>受講生のフォロー</li>
                        <li>教材販売の促進</li>
                    </ul>
                </div>
                <div class="industry-item">
                    <i class="fas fa-shopping-cart"></i>
                    <h4>EC・物販</h4>
                    <ul>
                        <li>購買行動の分析</li>
                        <li>リピート購入の促進</li>
                        <li>顧客満足度の向上</li>
                    </ul>
                </div>
                <div class="industry-item">
                    <i class="fas fa-building"></i>
                    <h4>士業・コンサル</h4>
                    <ul>
                        <li>見込み顧客の育成</li>
                        <li>サービス認知の向上</li>
                        <li>専門性の訴求</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
.cases-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin: 3rem 0;
}

.case-card {
    background: #fff;
    border-radius: var(--border-radius-md);
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    transition: transform var(--transition-speed);
}

.case-card:hover {
    transform: translateY(-5px);
}

.case-image img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.case-content {
    padding: 1.5rem;
}

.case-category {
    display: inline-block;
    background: var(--color-accent);
    color: #fff;
    padding: 0.25rem 1rem;
    border-radius: var(--border-radius-sm);
    font-size: 0.875rem;
    margin-bottom: 1rem;
}

.case-results {
    display: flex;
    gap: 1rem;
    margin: 1rem 0;
}

.result-item {
    flex: 1;
    text-align: center;
    padding: 1rem;
    background: var(--color-background);
    border-radius: var(--border-radius-sm);
}

.result-label {
    display: block;
    font-size: 0.875rem;
    color: var(--color-text-light);
}

.result-value {
    display: block;
    font-size: 1.25rem;
    font-weight: bold;
    color: var(--color-accent);
    margin-top: 0.5rem;
}

.case-link {
    display: inline-block;
    color: var(--color-accent);
    text-decoration: none;
    margin-top: 1rem;
    font-weight: 500;
}

.case-link:hover {
    text-decoration: underline;
}

.achievement {
    background: var(--color-secondary);
    color: #fff;
    padding: 4rem 0;
    margin: 4rem 0;
}

.achievement-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 2rem;
    text-align: center;
}

.achievement-number {
    display: block;
    font-size: 3rem;
    font-weight: bold;
    color: var(--color-accent);
}

.achievement-label {
    display: block;
    font-size: 1.1rem;
    margin-top: 0.5rem;
}

.industry-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin: 3rem 0;
}

.industry-item {
    background: #fff;
    padding: 2rem;
    border-radius: var(--border-radius-md);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    text-align: center;
}

.industry-item i {
    font-size: 2.5rem;
    color: var(--color-accent);
    margin-bottom: 1rem;
}

.industry-item h4 {
    margin-bottom: 1rem;
}

.industry-item ul {
    list-style: none;
    padding: 0;
    text-align: left;
}

.industry-item li {
    margin-bottom: 0.5rem;
    padding-left: 1.5rem;
    position: relative;
}

.industry-item li:before {
    content: "•";
    color: var(--color-accent);
    position: absolute;
    left: 0;
}

@media (max-width: 768px) {
    .cases-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<?php require_once 'includes/footer.php'; ?>