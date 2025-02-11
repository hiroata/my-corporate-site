<footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>株式会社CLAN</h3>
                    <p>〒892-0851<br>鹿児島県鹿児島市上竜尾町1番2号</p>
                    <p>TEL: 準備中</p>
                    <p>受付時間: 9:00〜18:00（土日祝を除く）</p>
                </div>
                <div class="footer-section">
                    <h3>リンク</h3>
                    <ul>
                        <li><a href="/works.php">制作実績</a></li>
                        <li><a href="/testimonials.php">お客様の声</a></li>
                        <li><a href="/services.php">顧問サービス</a></li>
                        <li><a href="/about.php">会社概要</a></li>
                        <li><a href="/contact.php">お問い合わせ</a></li>
                        <li><a href="/privacy.php">プライバシーポリシー</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>SNS</h3>
                    <div class="social-links">
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> 株式会社CLAN. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script src="/script.js"></script>
    <?php if (isset($additional_scripts)): ?>
        <?php foreach ($additional_scripts as $script): ?>
            <script src="<?php echo $script; ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>