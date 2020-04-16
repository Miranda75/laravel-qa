<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {!! $MyNavBar->asUl() !!}

        <title>المكتبة القبطية الأرثوذكسية</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: lavender;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 54px;
            }

            .links > a {
                color: #1A15A6;
                padding: 0 35px;
                font-size: 15px;
                font-weight: 700;
                letter-spacing: 0rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">الرئيسية</a>
                    @else
                        <a href="{{ route('login') }}">دخول</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">تسجيل</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    المكتبة القبطية الأرثوذكسية
                </div>

                <div class="links">
                    <a href="https://laravel.com/aaa">aaa</a>
                    <a href="https://تاريخ كنيسة.laravel.com/docs">تاريخ كنيسة</a>
                    <a href="https://طقس.laravel.com">طقس</a>
                    <a href="https://عقيدة.laravel.com">عقيدة</a>
                    <a href="https://لاهوت مقارن.laravel.com">لاهوت مقارن</a>
                    <a href="https://لاهوت روحي.laravel.com">لاهوت روحي</a>
                    <a href="https://لغة قبطية.laravel.com">لغة قبطية</a>
                    <a href="https://لغة يونانية.laravel.com">لغة يونانية</a>
                    <a href="https://سير قديسين.laravel.com">سير قديسين</a>
                    <a href="https://أدب رهباني ونسكيات.laravel.com">أدب رهباني ونسكيات</a>
                    <a href="https://علوم كتاب مقدس.laravel.com">علوم كتاب مقدس</a>
                    <a href="https://تفسيرات كتابية.laravel.com">تفسيرات كتابية</a>
                    <a href="https://أبائيات.laravel.com">أبائيات</a>
                    <a href="https://علم النقد الكتابي.laravel.com">علم النقد الكتابي</a>
                    <a href="https://العذراء مريم.laravel.com">العذراء مريم</a>
                    <a href="https://البابا شنودة الثالث.laravel.com">البابا شنودة الثالث</a>
                    <a href="https://فن قبطي وعمارة قبطية.laravel.com">فن قبطي وعمارة قبطية</a>
                    <a href="https://مشورة وأرشاد.laravel.com">مشورة وأرشاد</a>
                    <a href="https://روحيات.laravel.com">روحيات</a>
                    <a href="https://كنائس شقيقة.laravel.com">كنائس شقيقة</a>
                    <a href="https://تعريف بمؤلف من أعلام القبط.laravel.com">تعريف بمؤلف من أعلام القبط</a>
                    <a href="https://مجلات.laravel.com">مجلات</a>
                </div>
                <div class="container">
                    <div class="jumbotron">

                        <h1>أسال اي سؤال وستتم الأجابة عليه</h1>
                        <p>
                            <a href="#" class="btn btn-primary btn-lg" role="button">اسال الآن</a>
                        </p>
                        <h2>أحدث الأسئلة</h2>
                    </div>
            </div>
        </div>
    </body>
</html>
