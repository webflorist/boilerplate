<?php

namespace BoilerplateTests\Feature\Elements;

use BoilerplateTests\TestCase;

class MasterViewTest extends TestCase
{

    public function test_master_view()
    {
        $this->assertHtmlEquals(
            '
<!doctype html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="utf-8">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#2d89ef">
        <meta name="theme-color" content="#ffffff">
        <meta name="environment" content="testing">
        <meta name="static" content="false">
        <meta name="csrf-token" content="undefined">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta content=\'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no\' name=\'viewport\'/>      
        <link type="text/css" rel="stylesheet" href="css/app.css">
    </head>
    <body class="">
        <nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">  
            <div class="container">
                <div class="navbar-translate">
                    <a class="navbar-brand" href="/"> My Awesome Brand </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="sr-only">Toggle navigation</span> <span class="navbar-toggler-icon"></span> <span class="navbar-toggler-icon"></span> <span class="navbar-toggler-icon"></span> </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto"></ul>
                </div>
            </div>
        </nav>
        <header class="page-header header-filter " data-parallax="true" style="background-image: url(\'\');"> My Awesome Header Content
</header>
        <main class="main main-raised"> My Awesome Main Content
</main>
        <footer class="footer footer-default">
            <div class="container">
                <nav class="float-left">
                    <ul></ul>
                </nav>
                <div class="copyright float-right"> &copy; 2019 webflorist </div>
            </div>
        </footer>
        <div class="alert alert-dismissible text-center cookiealert" role="alert">
            Diese Website verwendet Cookies, um Ihnen einen bestmöglichen Service zu bieten. Durch die Nutzung der Webseite erklären Sie sich mit der Verwendung von Cookies einverstanden. <a href="/datenschutz">Mehr Info</a>
            <button type="button" class="btn btn-primary btn-sm acceptcookies" aria-label="OK">OK</button>
        </div>
        <script src="js/app.js" type="text/javascript"></script>
        <script>
            let $myAwesomeScript = true;
        </script>
    </body>
</html>
            ',
            view('bootstrap-tests::master')
        );
    }

}