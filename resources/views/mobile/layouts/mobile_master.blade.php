<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="stylesheet" href="//g.alicdn.com/msui/sm/0.6.2/css/sm.min.css">
    <link rel="stylesheet" href="//g.alicdn.com/msui/sm/0.6.2/css/sm-extend.min.css">

    <script type="text/javascript">
        <?php
        $user = \Auth::user();
        if ($user) {
            $user->setVisible([
                'user_id',
                'name',
            ]);
            $user = $user->toArray();
        } else {
            $user = new ArrayObject();
        }
        $data = [
            'locale' => app_locale(),
            'baseUrl' => url('/'),
            'state' => [
                'user' => $user,
            ],
        ];
        echo 'window.Someline = ' . json_encode($data);
        ?>
    </script>
    <script type="text/javascript">
        <?php
        $data = [
            'csrfToken' => csrf_token(),
        ];
        echo 'window.Laravel = ' . json_encode($data);
        ?>
    </script>
</head>
<body>
<div id="app" class="app @yield('div.app.class')">
    <div class="page-group">
        @yield('page-group')
    </div>
</div>

@yield('extra')

<script type='text/javascript' src='//g.alicdn.com/sj/lib/zepto/zepto.min.js' charset='utf-8'></script>
<script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm.min.js' charset='utf-8'></script>
<script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm-extend.min.js' charset='utf-8'></script>
@stack('scripts')
</body>
</html>