<?php
$page_title = "プライバシーポリシー";
$page_description = "株式会社CLANのプライバシーポリシーについてご説明いたします。個人情報の取り扱いや利用目的について記載しています。";
$page_keywords = "プライバシーポリシー, 個人情報保護方針, 株式会社CLAN";

require_once 'includes/header.php';
?>

<main>
    <section class="privacy-section">
        <div class="container">
            <h2>プライバシーポリシー</h2>
            
            <div class="privacy-content">
                <section class="privacy-item">
                    <h3>1. 個人情報の取り扱いについて</h3>
                    <p>株式会社CLAN（以下「当社」）は、お客様の個人情報保護の重要性について認識し、個人情報の保護に関する法律（以下「個人情報保護法」）等の関連法令を遵守すると共に、以下のプライバシーポリシーに従って個人情報を適切に取り扱います。</p>
                </section>

                <section class="privacy-item">
                    <h3>2. 個人情報の定義</h3>
                    <p>本プライバシーポリシーにおける「個人情報」とは、個人情報保護法第2条第1項により定義される個人情報を指します。すなわち、生存する個人に関する情報であって、当該情報に含まれる氏名、生年月日その他の記述等により特定の個人を識別することができるもの（他の情報と容易に照合することができ、それにより特定の個人を識別することができることとなるものを含む）を指します。</p>
                </section>

                <section class="privacy-item">
                    <h3>3. 個人情報の収集方法</h3>
                    <p>当社は、お客様から個人情報を収集する場合、適法かつ公正な手段によって収集し、お客様の同意なく第三者に開示・提供することはありません。当社が収集する個人情報は、主に以下の方法で収集されます：</p>
                    <ul>
                        <li>ウェブサイトのお問い合わせフォーム</li>
                        <li>メールでのお問い合わせ</li>
                        <li>お電話でのお問い合わせ</li>
                        <li>名刺の受領</li>
                    </ul>
                </section>

                <section class="privacy-item">
                    <h3>4. 個人情報の利用目的</h3>
                    <p>当社は、収集した個人情報を以下の目的で利用いたします：</p>
                    <ul>
                        <li>お問い合わせに対する回答</li>
                        <li>サービスの提供、維持、保護及び改善</li>
                        <li>新サービスに関する情報のご案内</li>
                        <li>契約の履行</li>
                        <li>当社の商品、サービスの向上のための調査、分析</li>
                        <li>法令等の定めに基づく対応</li>
                    </ul>
                </section>

                <section class="privacy-item">
                    <h3>5. 個人情報の安全管理</h3>
                    <p>当社は、個人情報の紛失、破壊、改ざん及び漏洩などのリスクに対して、技術的、組織的、物理的措置を講じ、適切な安全管理を実施いたします。</p>
                </section>

                <section class="privacy-item">
                    <h3>6. 個人情報の第三者提供</h3>
                    <p>当社は、以下の場合を除き、お客様の同意なく個人情報を第三者に提供いたしません：</p>
                    <ul>
                        <li>法令に基づく場合</li>
                        <li>人の生命、身体または財産の保護のために必要がある場合</li>
                        <li>公衆衛生の向上または児童の健全な育成の推進のために必要がある場合</li>
                        <li>国の機関もしくは地方公共団体またはその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合</li>
                    </ul>
                </section>

                <section class="privacy-item">
                    <h3>7. 個人情報の開示・訂正・利用停止等</h3>
                    <p>当社は、お客様ご本人からの個人情報の開示、訂正、利用停止等のご請求に対して、法令に基づき適切に対応いたします。ご請求の際は、下記の連絡先までお問い合わせください。</p>
                </section>

                <section class="privacy-item">
                    <h3>8. プライバシーポリシーの改定</h3>
                    <p>当社は、必要に応じて本プライバシーポリシーを改定することがあります。重要な変更がある場合は、当ウェブサイト上でお知らせいたします。</p>
                </section>

                <section class="privacy-item">
                    <h3>9. お問い合わせ窓口</h3>
                    <p>個人情報の取扱いに関するお問い合わせは、下記までご連絡ください。</p>
                    <div class="contact-info">
                        <p>株式会社CLAN</p>
                        <p>〒892-0851<br>鹿児島県鹿児島市上竜尾町1番2号</p>
                        <p>メール: info@clanbiz.net</p>
                        <p>受付時間: 9:00〜18:00（土日祝を除く）</p>
                    </div>
                </section>

                <p class="privacy-date">制定日: 2025年2月12日</p>
            </div>
        </div>
    </section>
</main>

<style>
.privacy-section {
    padding: 4rem 0;
    background-color: var(--color-background);
}

.privacy-content {
    max-width: 800px;
    margin: 0 auto;
    background: #fff;
    padding: 2rem;
    border-radius: var(--border-radius-md);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
}

.privacy-item {
    margin-bottom: 2rem;
}

.privacy-item h3 {
    margin-bottom: 1rem;
    color: var(--color-text);
    font-size: 1.25rem;
}

.privacy-item p {
    margin-bottom: 1rem;
    line-height: 1.8;
}

.privacy-item ul {
    margin-bottom: 1rem;
    padding-left: 1.5rem;
}

.privacy-item li {
    margin-bottom: 0.5rem;
    line-height: 1.6;
}

.contact-info {
    background: var(--color-background);
    padding: 1.5rem;
    border-radius: var(--border-radius-sm);
    margin-top: 1rem;
}

.contact-info p {
    margin-bottom: 0.5rem;
}

.privacy-date {
    text-align: right;
    margin-top: 2rem;
    color: var(--color-text-light);
}

@media (max-width: 768px) {
    .privacy-content {
        padding: 1.5rem;
    }
}
</style>

<?php require_once 'includes/footer.php'; ?>