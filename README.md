# Google Translate API Kullanımı - LARAVEL

## BİLGİLENDİRME

Herkese merhaba. Bu projede **Google Translate API** kullanarak web sitemizde, farklı dile çevirilmesi gereken kelime ve cümleleri hızlı bir şekilde çevirmemizi sağlayan **Google Translate API** kullandık.

## ADIM 1: Kütüphane Kurulumu

```bash
composer require stichoza/google-translate-php
```

## ADIM 2: Controller Oluşturma

```bash
php artisan make:controller TranslateController
```

## ADIM 3: Çevirilecek Kelime Veya Cümleyi Belirleme

```bash
public function index(){
        $en = new GoogleTranslate('en');

        $translatedText = $en->translate('merhaba');

        dd($translatedText);
    }
```
