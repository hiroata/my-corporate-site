// 共通コンポーネントの読み込み機能
function loadCommonComponents() {
    const header = `
    <header>
        <nav class="navbar">
            <div class="navbar__container">
                <div class="logo">
                    <h1><a href="/">株式会社CLAN</a></h1>
                </div>
                <ul class="nav-links">
                    <li><a href="/works.html">制作実績</a></li>
                    <li><a href="/testimonials.html">お客様の声</a></li>
                    <li><a href="/services.html">顧問サービス</a></li>
                    <li><a href="/about.html">会社概要</a></li>
                    <li><a href="/contact.html">お問い合わせ</a></li>
                </ul>
                <button class="mobile-menu" aria-label="メニュー">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>
    </header>`;

    const footer = `
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
                        <li><a href="/works.html">制作実績</a></li>
                        <li><a href="/testimonials.html">お客様の声</a></li>
                        <li><a href="/services.html">顧問サービス</a></li>
                        <li><a href="/about.html">会社概要</a></li>
                        <li><a href="/contact.html">お問い合わせ</a></li>
                        <li><a href="/privacy.html">プライバシーポリシー</a></li>
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
                <p>&copy; 2024 株式会社CLAN. All rights reserved.</p>
            </div>
        </div>
    </footer>`;

    // ヘッダーとフッターを挿入
    document.body.insertAdjacentHTML('afterbegin', header);
    document.body.insertAdjacentHTML('beforeend', footer);
}

document.addEventListener('DOMContentLoaded', function() {
    // 共通コンポーネントを読み込む
    loadCommonComponents();

    const menuButton = document.querySelector('.mobile-menu');
    const navLinks = document.querySelector('.nav-links');
    const navbar = document.querySelector('.navbar');
    const navLinksItems = document.querySelectorAll('.nav-links a');
    let isMenuOpen = false;

    // モバイルメニューの制御
    menuButton.addEventListener('click', function() {
        isMenuOpen = !isMenuOpen;
        navLinks.classList.toggle('active');
        document.body.style.overflow = isMenuOpen ? 'hidden' : '';
        menuButton.setAttribute('aria-expanded', isMenuOpen);
    });

    // ナビゲーションリンクをクリックした時にメニューを閉じる
    navLinksItems.forEach(link => {
        link.addEventListener('click', () => {
            if (isMenuOpen) {
                isMenuOpen = false;
                navLinks.classList.remove('active');
                document.body.style.overflow = '';
                menuButton.setAttribute('aria-expanded', 'false');
            }
        });
    });

    // 画面外のリンクをクリックした時にメニューを閉じる
    document.addEventListener('click', function(event) {
        const isClickInside = menuButton.contains(event.target) || navLinks.contains(event.target);
        if (!isClickInside && isMenuOpen) {
            isMenuOpen = false;
            navLinks.classList.remove('active');
            document.body.style.overflow = '';
            menuButton.setAttribute('aria-expanded', 'false');
        }
    });

    // スクロール時のヘッダースタイル変更
    function updateNavbar() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    }

    window.addEventListener('scroll', updateNavbar);
    updateNavbar();

    // 現在のセクションに基づいてナビゲーションをハイライト
    const sections = document.querySelectorAll('section[id]');
    
    function highlightNavigation() {
        const scrollY = window.scrollY;
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 100;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');
            
            if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
                document.querySelector(`.nav-links a[href="#${sectionId}"]`)?.classList.add('active');
            } else {
                document.querySelector(`.nav-links a[href="#${sectionId}"]`)?.classList.remove('active');
            }
        });
    }

    window.addEventListener('scroll', highlightNavigation);
    highlightNavigation();
});