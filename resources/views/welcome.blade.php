<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="/css/basic.css">
        <script src="/js/jquery-3.3.1.min.js"></script>
        @include('import')
    </head>
    <script type="text/javascript">
        $(document).ready(function(e) {
            setInterval(function(){
                $('.shape').shape('flip up');
            }, 1000);
        });
    </script>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="ui content">
                <div class="title m-b-md">
                    <a href="/basic" id="iterateEffects">
                        基于百度贴吧舆情分析报告
                    </a>
                </div>
            </div>
        </div>
            <style>
                html, body {
                    background-color: #fff;
                    color: #636b6f;
                    font-family: 'Raleway', sans-serif;
                    font-weight: 100;
                    /* height: 100%; */
                    margin: 0;
                }

                .full-height {
                    height: 100vh;
                }
                a,a:hover,a:active,a:visited,a:link,a:focus{
                    text-decoration:none;
                     color:#333;
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
                    font-size: 64px;
                }

                .links > a {
                    color: #636b6f;
                    padding: 0 25px;
                    font-size: 22px;
                    font-weight: 600;
                    letter-spacing: .1rem;
                    text-decoration: none;
                    text-transform: uppercase;
                }

                .m-b-md {
                    margin-bottom: 30px;
                }
            </style>
    </body>
</html>
