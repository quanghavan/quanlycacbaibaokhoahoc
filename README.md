# quanlycacbaibaokhoahoc
## How to run

> composer update --no-scripts

> php artisan key:generate

> Cài đặt form & HTML cho composer
    > composer require "laravelcollective/html"
    > thêm dòng sao vào providers trong config/app.php:
        Collective\Html\HtmlServiceProvider::class,
    > thêm hai dòng sau vào aliases trong config/app.php:
        'Form' => Collective\Html\FormFacade::class,
        'Html' => Collective\Html\HtmlFacade::class,