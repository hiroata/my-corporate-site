<?php
$page_title = "お問い合わせ";
$page_description = "株式会社CLANへのお問い合わせはこちらのフォームからお願いいたします。セールスファネル構築やWeb集客に関するご相談を承っております。";
$page_keywords = "お問い合わせ, セールスファネル, Web集客, コンサルティング, 鹿児島";

// reCAPTCHA サイトキーの設定
$recaptcha_site_key = "YOUR_RECAPTCHA_SITE_KEY";

// 追加のCSSとJavaScript
$additional_css = ['/css/contact.css'];
$additional_scripts = [
    'https://www.google.com/recaptcha/api.js',
    '/js/contact.js'
];

require_once 'includes/header.php';
?>

<main>
    <section class="contact-section">
        <div class="container">
            <h2>お問い合わせ</h2>
            <div class="contact-intro">
                <p>株式会社CLANへのお問い合わせは、以下のフォームからお願いいたします。</p>
                <p>通常、2営業日以内にご返信させていただきます。</p>
            </div>

            <form id="contactForm" class="contact-form" action="contact_confirm.php" method="post" novalidate>
                <div class="form-group">
                    <label for="company">会社名<span class="required">必須</span></label>
                    <input type="text" id="company" name="company" required>
                    <span class="error-message" id="company-error"></span>
                </div>

                <div class="form-group">
                    <label for="name">お名前<span class="required">必須</span></label>
                    <input type="text" id="name" name="name" required>
                    <span class="error-message" id="name-error"></span>
                </div>

                <div class="form-group">
                    <label for="email">メールアドレス<span class="required">必須</span></label>
                    <input type="email" id="email" name="email" required>
                    <span class="error-message" id="email-error"></span>
                </div>

                <div class="form-group">
                    <label for="phone">電話番号</label>
                    <input type="tel" id="phone" name="phone">
                    <span class="error-message" id="phone-error"></span>
                </div>

                <div class="form-group">
                    <label for="inquiry_type">お問い合わせ種別<span class="required">必須</span></label>
                    <select id="inquiry_type" name="inquiry_type" required>
                        <option value="">選択してください</option>
                        <option value="utage">UTAGE構築に関するご相談</option>
                        <option value="consulting">Web集客コンサルティング</option>
                        <option value="other">その他のお問い合わせ</option>
                    </select>
                    <span class="error-message" id="inquiry_type-error"></span>
                </div>

                <div class="form-group">
                    <label for="message">お問い合わせ内容<span class="required">必須</span></label>
                    <textarea id="message" name="message" required></textarea>
                    <span class="error-message" id="message-error"></span>
                </div>

                <div class="form-group privacy-policy">
                    <label class="checkbox-label">
                        <input type="checkbox" id="privacy" name="privacy" required>
                        <a href="/privacy.php" target="_blank">プライバシーポリシー</a>に同意する
                    </label>
                    <span class="error-message" id="privacy-error"></span>
                </div>

                <div class="g-recaptcha" data-sitekey="<?php echo htmlspecialchars($recaptcha_site_key); ?>"></div>
                <span class="error-message" id="recaptcha-error"></span>

                <div class="form-buttons">
                    <button type="submit" class="submit-button">確認画面へ</button>
                </div>
            </form>
        </div>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>