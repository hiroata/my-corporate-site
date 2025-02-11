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
        privacy: '※プライバシーポリシーに同意してください'
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

        return isValid;
    }

    // リアルタイムバリデーション
    form.querySelectorAll('input, select, textarea').forEach(field => {
        field.addEventListener('blur', () => validateField(field));
        field.addEventListener('input', () => validateField(field));
    });

    // メール本文の生成
    function generateEmailBody(formData) {
        const inquiryTypes = {
            utage: 'UTAGE構築に関するご相談',
            consulting: 'Web集客コンサルティング',
            other: 'その他のお問い合わせ'
        };

        return `
会社名：${formData.get('company')}
お名前：${formData.get('name')}
メールアドレス：${formData.get('email')}
電話番号：${formData.get('phone') || '未入力'}
お問い合わせ種別：${inquiryTypes[formData.get('inquiry_type')] || formData.get('inquiry_type')}

お問い合わせ内容：
${formData.get('message')}
        `.trim();
    }

    // フォーム送信時の処理
    function handleSubmit(e) {
        e.preventDefault();

        if (validateForm()) {
            const formData = new FormData(form);
            const mailTo = 'info@example.com'; // お問い合わせ先メールアドレス
            const subject = 'お問い合わせ - 株式会社CLAN';
            const body = generateEmailBody(formData);

            // メーラーを開く
            window.location.href = `mailto:${mailTo}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;

            // 送信確認メッセージを表示
            const confirmationMessage = document.createElement('div');
            confirmationMessage.className = 'confirmation-message';
            confirmationMessage.innerHTML = `
                <h2>お問い合わせ内容の確認</h2>
                <p>メールソフトが起動します。<br>内容をご確認の上、送信してください。</p>
                <p>メールソフトが起動しない場合は、以下のメールアドレスまでご連絡ください：<br>
                <a href="mailto:${mailTo}">${mailTo}</a></p>
            `;

            // フォームを非表示にして確認メッセージを表示
            form.style.display = 'none';
            form.parentNode.insertBefore(confirmationMessage, form);
        } else {
            // エラーがある場合は最初のエラー項目へスクロール
            const firstError = form.querySelector('.error');
            if (firstError) {
                firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }
        return false;
    }

    // フォームにhandleSubmit関数を設定
    form.onsubmit = handleSubmit;

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