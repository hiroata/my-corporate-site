<?php
session_start();

$page_title = "お問い合わせ送信完了";
$page_description = "お問い合わせありがとうございます。";
$additional_css = ['/css/contact.css'];

// セッションデータのチェック
if (!isset($_SESSION['form_data'])) {
    header('Location: contact.php');
    exit;
}

// reCAPTCHA検証
$recaptcha_secret = "YOUR_RECAPTCHA_SECRET_KEY";
$recaptcha_response = $_POST['g-recaptcha-response'] ?? '';

$verify_response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptcha_secret}&response={$recaptcha_response}");
$response_data = json_decode($verify_response);

if (!$response_data->success) {
    $_SESSION['error'] = "reCAPTCHAの検証に失敗しました。もう一度お試しください。";
    header('Location: contact.php');
    exit;
}

// フォームデータの取得
$form_data = $_SESSION['form_data'];

// お問い合わせ種別の表示用マッピング
$inquiry_types = [
    'utage' => 'UTAGE構築に関するご相談',
    'consulting' => 'Web集客コンサルティング',
    'other' => 'その他のお問い合わせ'
];

// 管理者宛メール本文の作成
$admin_body = <<<EOT
以下の内容でお問い合わせがありました。

【会社名】
{$form_data['company']}

【お名前】
{$form_data['name']}

【メールアドレス】
{$form_data['email']}

【電話番号】
{$form_data['phone']}

【お問い合わせ種別】
{$inquiry_types[$form_data['inquiry_type']]}

【お問い合わせ内容】
{$form_data['message']}

EOT;

// 自動返信メール本文の作成
$auto_reply_body = <<<EOT
{$form_data['name']} 様

株式会社CLANへお問い合わせいただき、ありがとうございます。
以下の内容でお問い合わせを受け付けいたしました。

内容を確認の上、担当者より2営業日以内にご連絡させていただきます。

━━━━━━□■□ お問い合わせ内容 □■□━━━━━━

【会社名】
{$form_data['company']}

【お名前】
{$form_data['name']}

【メールアドレス】
{$form_data['email']}

【電話番号】
{$form_data['phone']}

【お問い合わせ種別】
{$inquiry_types[$form_data['inquiry_type']]}

【お問い合わせ内容】
{$form_data['message']}

━━━━━━━━━━━━━━━━━━━━━━━━━━

このメールは自動送信されています。
返信はできませんので予めご了承ください。

--
株式会社CLAN
〒892-0851
鹿児島県鹿児島市上竜尾町1番2号
E-mail: info@clanbiz.net
受付時間: 9:00〜18:00（土日祝を除く）

EOT;

// メールヘッダー
$headers = [
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=UTF-8',
    'From: 株式会社CLAN <info@clanbiz.net>',
    'Reply-To: ' . $form_data['email'],
    'X-Mailer: PHP/' . phpversion()
];

// 管理者宛メール送信
$admin_subject = '【お問い合わせ】' . $form_data['company'] . ' ' . $form_data['name'] . '様';
mail('info@clanbiz.net', $admin_subject, $admin_body, implode("\r\n", $headers));

// 自動返信メール送信
$auto_reply_subject = '【株式会社CLAN】お問い合わせありがとうございます';
$auto_reply_headers = [
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=UTF-8',
    'From: 株式会社CLAN <info@clanbiz.net>',
    'X-Mailer: PHP/' . phpversion()
];
mail($form_data['email'], $auto_reply_subject, $auto_reply_body, implode("\r\n", $auto_reply_headers));

// セッションデータのクリア
unset($_SESSION['form_data']);

require_once 'includes/header.php';
?>

<main>
    <section class="contact-section">
        <div class="container">
            <h2>お問い合わせ完了</h2>
            <div class="contact-complete">
                <p>お問い合わせありがとうございます。</p>
                <p>ご入力いただいたメールアドレス宛に、確認メールをお送りしました。</p>
                <p>内容を確認の上、担当者より2営業日以内にご連絡させていただきます。</p>
                <div class="complete-buttons">
                    <a href="/" class="back-to-home">トップページへ戻る</a>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
.contact-complete {
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
    background: #fff;
    padding: 3rem 2rem;
    border-radius: var(--border-radius-md);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
}

.contact-complete p {
    margin-bottom: 1rem;
    line-height: 1.8;
}

.complete-buttons {
    margin-top: 3rem;
}

.back-to-home {
    display: inline-block;
    padding: 1rem 3rem;
    background-color: var(--color-accent);
    color: var(--color-primary);
    text-decoration: none;
    border-radius: var(--border-radius-sm);
    transition: all var(--transition-speed);
}

.back-to-home:hover {
    background-color: var(--color-secondary);
    transform: translateY(-2px);
}
</style>

<?php require_once 'includes/footer.php'; ?>