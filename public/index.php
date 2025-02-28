<?php

define('LARAVEL_START', microtime(true));

require __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';

// الحصول على الكيرنل المسؤول عن معالجة الطلبات
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

// التقاط الطلب الحالي
$request = Illuminate\Http\Request::capture();

// معالجة الطلب والحصول على الاستجابة
$response = $kernel->handle($request);

// إرسال الاستجابة إلى المتصفح
$response->send();

// إنهاء الطلب وتنفيذ الإجراءات النهائية
$kernel->terminate($request, $response);
