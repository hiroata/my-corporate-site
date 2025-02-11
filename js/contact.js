document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const submitButton = form.querySelector('button[type="submit"]');

    // バリデーションルール
    const validationRules = {
        company: {
            required: true,
            maxLength: 100
        },
        name: {
            required: true,
            maxLength: 50
        },
        email: {
            required: true,
            email: true,
            maxLength: 256
        },
        phone: {
            pattern: /^[0-9-]*$/,
            maxLength: 20
        },
        inquiry_type: {
            required: true
        },
        message: {
            required: true,
            maxLength: 2000
        },
        privacy: {
            required: true
        }
    };

    // エラーメッセージ
    const errorMessages = {
        required: '※この項目は必須です',
        email: '※正しいメールアドレスを入力してください',
        maxLength: '※文字数が制限を超えています',
        pattern: '※正しい形式で入力してください',
        privacy: '※プライバシーポリシーに同意してください',
        recaptcha: '※reCAPTCHAの確認をお願いします'
    };

    // バリデーション関数
    function validateField(field) {
        const rules = validationRules[field.name];
        const errorElement = document.getElementById(`${field.name}-error`);
        let isValid = true;
        let errorMessage = '';

        if (!rules) return true;

        // 必須チェック
        if (rules.required && !field.value.trim()) {
            isValid = false;
            errorMessage = errorMessages.required;
        }
        // メールアドレスチェック
        else if (rules.email && !validateEmail(field.value)) {
            isValid = false;
            errorMessage = errorMessages.email;
        }
        // 文字数チェック
        else if (rules.maxLength && field.value.length > rules.maxLength) {
            isValid = false;
            errorMessage = errorMessages.maxLength;
        }
        // パターンチェック
        else if (rules.pattern && !rules.pattern.test(field.value)) {
            isValid = false;
            errorMessage = errorMessages.pattern;
        }

        // エラーメッセージの表示/非表示
        if (errorElement) {
            errorElement.textContent = errorMessage;
            if (!isValid) {
                field.classList.add('error');
            } else {
                field.classList.remove('error');
            }
        }

        return isValid;
    }

    // メールアドレスバリデーション
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    // フォーム全体のバリデーション
    function validateForm() {
        let isValid = true;
        const fields = form.querySelectorAll('input, select, textarea');

        fields.forEach(field => {
            if (!validateField(field)) {
                isValid = false;
            }
        });

        // reCAPTCHAの確認
        const recaptchaResponse = grecaptcha.getResponse();
        const recaptchaError = document.getElementById('recaptcha-error');
        if (!recaptchaResponse) {
            isValid = false;
            recaptchaError.textContent = errorMessages.recaptcha;
        } else {
            recaptchaError.textContent = '';
        }

        return isValid;
    }

    // リアルタイムバリデーション
    form.querySelectorAll('input, select, textarea').forEach(field => {
        field.addEventListener('blur', () => validateField(field));
        field.addEventListener('input', () => validateField(field));
    });

    // フォーム送信時の処理
    form.addEventListener('submit', function(e) {
        e.preventDefault();

        if (validateForm()) {
            // 確認画面へ遷移
            form.submit();
        } else {
            // エラーがある場合は最初のエラー項目へスクロール
            const firstError = form.querySelector('.error');
            if (firstError) {
                firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }
    });

    // 文字数カウンター
    const messageField = document.getElementById('message');
    if (messageField) {
        const counter = document.createElement('div');
        counter.className = 'character-counter';
        messageField.parentNode.appendChild(counter);

        function updateCounter() {
            const remaining = validationRules.message.maxLength - messageField.value.length;
            counter.textContent = `残り${remaining}文字`;
            counter.style.color = remaining < 0 ? '#dc3545' : '#666';
        }

        messageField.addEventListener('input', updateCounter);
        updateCounter();
    }
});