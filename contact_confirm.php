<?php
session_start();

$page_title = "お問い合わせ内容の確認";
$page_description = "お問い合わせ内容をご確認ください。";
$additional_css = ['/css/contact.css'];

// POSTデータのバリデーション
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

// 入力データのサニタイズと保存
$form_data = [
    'company' => htmlspecialchars($_POST['company'] ?? '', ENT_QUOTES),
    'name' => htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES),
    'email' => htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES),
    'phone' => htmlspecialchars($_POST['phone'] ?? '', ENT_QUOTES),
    'inquiry_type' => htmlspecialchars($_POST['inquiry_type'] ?? '', ENT_QUOTES),
    'message' => htmlspecialchars($_POST['message'] ?? '', ENT_QUOTES)
];

// お問い合わせ種別の表示用マッピング
$inquiry_types = [
    'utage' => 'UTAGE構築に関するご相談',
    'consulting' => 'Web集客コンサルティング',
    'other' => 'その他のお問い合わせ'
];

// セッションに保存（送信処理用）
$_SESSION['form_data'] = $form_data;

require_once 'includes/header.php';
?>

<main>
    <section class="contact-section">
        <div class="container">
            <h2>お問い合わせ内容の確認</h2>
            <div class="contact-intro">
                <p>入力内容をご確認ください。よろしければ「送信する」ボタンを押してください。</p>
            </div>

            <div class="contact-form">
                <dl class="confirm-list">
                    <dt>会社名</dt>
                    <dd><?php echo $form_data['company']; ?></dd>

                    <dt>お名前</dt>
                    <dd><?php echo $form_data['name']; ?></dd>

                    <dt>メールアドレス</dt>
                    <dd><?php echo $form_data['email']; ?></dd>

                    <dt>電話番号</dt>
                    <dd><?php echo $form_data['phone'] ?: '(未入力)'; ?></dd>

                    <dt>お問い合わせ種別</dt>
                    <dd><?php echo $inquiry_types[$form_data['inquiry_type']] ?? ''; ?></dd>

                    <dt>お問い合わせ内容</dt>
                    <dd><?php echo nl2br($form_data['message']); ?></dd>
                </dl>

                <div class="form-buttons">
                    <form action="contact.php" method="post" style="display: inline;">
                        <?php foreach($form_data as $key => $value): ?>
                            <input type="hidden" name="<?php echo $key; ?>" value="<?php echo $value; ?>">
                        <?php endforeach; ?>
                        <button type="submit" class="back-button">修正する</button>
                    </form>
                    <form action="contact_send.php" method="post" style="display: inline;">
                        <button type="submit" class="submit-button">送信する</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
.confirm-list {
    margin-bottom: 2rem;
}

.confirm-list dt {
    font-weight: bold;
    margin-top: 1.5rem;
}

.confirm-list dd {
    margin-left: 0;
    padding: 0.5rem 0;
    border-bottom: 1px solid var(--color-border);
}
</style>

<?php require_once 'includes/footer.php'; ?>