<?php
/**
 * パンくずリストコンポーネント
 * 使用例：
 * $breadcrumbs = [
 *     ['label' => 'ホーム', 'url' => '/'],
 *     ['label' => '会社概要', 'url' => '/about.php'],
 *     ['label' => '代表メッセージ']  // 現在のページは URL 不要
 * ];
 * include 'includes/breadcrumb.php';
 */
?>
<nav class="breadcrumb" aria-label="パンくずリスト">
    <div class="container">
        <ol itemscope itemtype="https://schema.org/BreadcrumbList">
            <?php foreach ($breadcrumbs as $index => $item): ?>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <?php if (isset($item['url'])): ?>
                        <a href="<?php echo htmlspecialchars($item['url']); ?>" itemprop="item">
                            <span itemprop="name"><?php echo htmlspecialchars($item['label']); ?></span>
                        </a>
                    <?php else: ?>
                        <span itemprop="name"><?php echo htmlspecialchars($item['label']); ?></span>
                    <?php endif; ?>
                    <meta itemprop="position" content="<?php echo $index + 1; ?>">
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</nav>

<style>
.breadcrumb {
    background-color: var(--color-background);
    padding: 0.75rem 0;
    margin-top: var(--header-height-desktop);
    border-bottom: 1px solid var(--color-border);
}

.breadcrumb ol {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
}

.breadcrumb li {
    display: flex;
    align-items: center;
    color: var(--color-text-light);
    font-size: 0.875rem;
}

.breadcrumb li:not(:last-child)::after {
    content: ">";
    margin: 0 0.5rem;
    color: var(--color-text-light);
}

.breadcrumb a {
    color: var(--color-accent);
    text-decoration: none;
    transition: color var(--transition-speed);
}

.breadcrumb a:hover {
    color: var(--color-secondary);
    text-decoration: underline;
}

@media (max-width: 768px) {
    .breadcrumb {
        margin-top: var(--header-height-mobile);
        font-size: 0.75rem;
    }
}
</style>