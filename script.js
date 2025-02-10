document.addEventListener('DOMContentLoaded', function() {
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