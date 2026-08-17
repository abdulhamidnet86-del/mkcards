# MKCards - Scaffold (Laravel)

مرحبا — هذا الفرع يحتوي على بداية مشروع Laravel مع واجهة Dashboard مبدئية جاهزة لتشغيل محلي عبر XAMPP أو أي سيرفر محلي.

ملاحظات سريعة:
- هذا ليس إطار عمل Laravel الكامل (الـ framework) داخل الريبو؛ بدلاً من ذلك وضعت ملفات scaffold (routes, views, service) لتُنسخ داخل مشروع Laravel. للتشغيل السهل اتبع تعليمات التثبيت أدناه.

متطلبات:
- PHP >= 8.1
- Composer
- XAMPP أو أي سيرفر محلي (MAMP, WAMP)

خطوات التثبيت (باستخدام XAMPP):
1. ضع هذا المشروع داخل مجلد `htdocs` أو clone الريبو:
   - git clone git@github.com:abdulhamidnet86-del/mkcards.git
   - cd mkcards
2. ثبت laravel ونزّل تبعيات المشروع (إن لم يتم تضمين إطار العمل):
   - composer create-project --prefer-dist laravel/laravel . "10.*"
   - composer require vluzrmos/php-routeros (أو مكتبة RouterOS تفضّلها)
3. انسخ ملف .env.example إلى .env وغيّر الإعدادات (DB, ROUTEROS...):
   - cp .env.example .env
   - php artisan key:generate
4. ضع الملفات المرسلة (routes, resources, app/Services) إذا لم تكن قد تم إنشاؤها أو استبدل الموجود.
5. شغّل XAMPP (Apache + MySQL)، ثم افتح المشروع عبر http://localhost/mkcards/public أو اضف VirtualHost مناسب.

لتشغيل محلي سريع (بدون XAMPP):
- php artisan serve

كيفية إعداد الاتصال بـ MikroTik:
- في .env ضع:
  ROUTEROS_HOST=172.16.0.1
  ROUTEROS_PORT=8728
  ROUTEROS_USER=api_user
  ROUTEROS_PASS=secret

ملحوظة أمنيّة: لا تضع كلمات مرور حقيقية في هذا المستودع العام. استعمل GitHub Secrets أو environment variables على السيرفر.

---

قمت بإضافة:
- routes/web.php
- resources/views/layouts/app.blade.php
- resources/views/dashboard.blade.php
- public/css/app.css
- app/Services/RouterOsService.php
- .env.example
- README.md
- .gitignore
- LICENSE (MIT)

التالي سأقوم به: افتح Pull Request مع وصف التغييرات وتفاصيل التشغيل وطلب منك تأكيد ومراجعة. إذا أردت تغييرات في الألوان أو خطوط إضافية أعد لي.
