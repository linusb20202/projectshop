<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="shortcut icon" href="{!! FAVICON_PATH !!}" type="image/x-icon"/>
        <link rel="icon" href="{!! FAVICON_PATH !!}" type="image/x-icon"/>
                <meta name="csrf-token" content="{{ csrf_token() }}">

<?php
        $currentURl = url()->current();
        $pageLink = $currentURl;
        $checkUrl = substr($currentURl, -1);

        if ($checkUrl == '/') {
            $pageLink = substr($currentURl, 0, strrpos($currentURl, "/"));
        }
        ?>
        <link rel="canonical" href="<?php echo $pageLink; ?>" />
        <?php if (isset($subCatInfo) && !empty($subCatInfo->meta_title)) {
            ?>
            <title><?php echo $subCatInfo->meta_title; ?></title>
            <meta name="description" itemprop="description" content="<?php echo $subCatInfo->meta_description; ?>">
            <meta name="keywords" itemprop="keywords" content="<?php echo $subCatInfo->meta_keyword; ?>">
        <?php } else if (isset($catInfo) && !empty($catInfo->meta_title)) {
            ?>
            <title><?php echo $catInfo->meta_title; ?></title>
            <meta name="description" itemprop="description" content="<?php echo $catInfo->meta_description; ?>">
            <meta name="keywords" itemprop="keywords" content="<?php echo $catInfo->meta_keyword; ?>">
        <?php } else if (Request::segment(1) == 'gigs') {
            ?>
            <title>{{$title.TITLE_FOR_LAYOUT}}</title>
            <meta name="description" itemprop="description" content="Post & browse the freelance gigs jobs, services & projects. Find the best online freelance jobs for Writing, Graphic, Digital Marketing, Software & other services.">
            <meta name="keywords" itemprop="keywords" content="freelance gigs, gig jobs, find gigs, online gigs, post a gig">
<?php } else { ?>
            <title>{{$title.TITLE_FOR_LAYOUT}}</title>
        <?php }
         ?>
        {{-- {{ HTML::style('public/css/front/bootstrap.min.css')}}
        {{ HTML::style('public/css/front/style.css')}}
        {{ HTML::style('public/css/front/stylee.css')}}
        {{ HTML::style('public/css/front/inner.css')}}
        {{ HTML::style('public/css/front/owl.carousel.min.css')}}
        {{ HTML::style('public/css/front/owl.theme.default.min.css')}}
        {{ HTML::style('public/css/front/media.css')}}
        {{ HTML::style('public/css/front/font-awesome.css')}}

        {{ HTML::script('public/js/jquery-2.1.0.min.js')}}
        {{ HTML::script('public/js/jquery.validate.js')}}
        {{ HTML::script('public/js/front/menu.js')}}
        {{ HTML::script('public/js/front/owl.carousel.js')}}
        {{ HTML::script('public/js/front/pageScript.js')}}
        {{ HTML::script('public/js/front/bootstrap.min.js')}}
        {{ HTML::script('public/js/ajaxsoringpagging.js')}} --}}

        <link href="{{ url(config('app.url')) }}/public/css/front/bootstrap.min.css" rel="stylesheet">
        <link href="{{ url(config('app.url')) }}/public/css/front/style.css" rel="stylesheet">
        <link href="{{ url(config('app.url')) }}/public/css/front/owl.carousel.min.css" rel="stylesheet">
        <link href="{{ url(config('app.url')) }}/public/css/front/inner.css" rel="stylesheet">
        <link href="{{ url(config('app.url')) }}/public/css/front/stylee.css" rel="stylesheet">
        <link href="{{ url(config('app.url')) }}/public/css/front/font-awesome.css" rel="stylesheet">
        <link href="{{ url(config('app.url')) }}/public/css/front/media.css" rel="stylesheet">
        <link href="{{ url(config('app.url')) }}/public/css/front/owl.theme.default.min.css" rel="stylesheet">

        
        <script type="text/javascript" src="{{ url(config('app.url')) }}/public/js/jquery-2.1.0.min.js"></script>
        <script type="text/javascript" src="{{ url(config('app.url')) }}/public/js/jquery.validate.js"></script>
        <script type="text/javascript" src="{{ url(config('app.url')) }}/public/js/front/menu.js"></script>
        <script type="text/javascript" src="{{ url(config('app.url')) }}/public/js/front/owl.carousel.js"></script>
        <script type="text/javascript" src="{{ url(config('app.url')) }}public/js/front/pageScript.js"></script>
        <script type="text/javascript" src="{{ url(config('app.url')) }}/public/js/front/bootstrap.min.js"></script>
        <script type="text/javascript" src="{{ url(config('app.url')) }}/public/js/ajaxsoringpagging.js"></script>
        
    </head>
    <body>
        @include('elements.header')
        @yield('content') 
        @include('elements.footer')
         <script type="text/javascript">window.$zopim || (function (d, s) {
        var z = $zopim = function (c) {
            z._.push(c)
        }, $ = z.s =
                d.createElement(s), e = d.getElementsByTagName(s)[0];
        z.set = function (o) {
            z.set.
                    _.push(o)
        };
        z._ = [];
        z.set._ = [];
        $.async = !0;
        $.setAttribute("charset", "utf-8");
        $.src = "https://v2.zopim.com/?4toXhVRHXOtCLes7sRNCMItG7HdblsBt";
        z.t = +new Date;
        $.
                type = "text/javascript";
        e.parentNode.insertBefore($, e)
    })(document, "script");</script>
<script>
    $zopim(function () {
        $zopim.livechat.bubble.setColor('#F1484A');
    });
</script>
    </body>
</html>