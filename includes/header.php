<?php
// 共通の設定
$site_name = "株式会社CLAN";
$default_description = "株式会社CLANは、UTAGEを活用したセールスファネル構築代行とWeb集客コンサルティングで、あなたのビジネスの成長を加速させます。";
$default_keywords = "UTAGE, セールスファネル, Web集客, デジタルマーケティング, 鹿児島";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : $default_description; ?>">
    <meta name="keywords" content="<?php echo isset($page_keywords) ? $page_keywords : $default_keywords; ?>">
    <title><?php echo isset($page_title) ? $page_title . ' | ' . $site_name : $site_name . ' | セールスファネル構築のプロフェッショナル'; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&family=Noto+Serif+JP:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="/styles.css">
    <?php if (isset($additional_css)): ?>
        <?php foreach ($additional_css as $css): ?>
            <link rel="stylesheet" href="<?php echo $css; ?>">
        <?php endforeach; ?>
    <?php endif; ?>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="navbar__container">
                <div class="logo">
                    <h1><a href="/">株式会社CLAN</a></h1>
                </div>
                <ul class="nav-links">
                    <li><a href="/works.php">制作実績</a></li>
                    <li><a href="/testimonials.php">お客様の声</a></li>
                    <li><a href="/services.php">顧問サービス</a></li>
                    <li><a href="/about.php">会社概要</a></li>
                    <li><a href="/contact.php">お問い合わせ</a></li>
                </ul>
                <button class="mobile-menu" aria-label="メニュー">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>
    </header>