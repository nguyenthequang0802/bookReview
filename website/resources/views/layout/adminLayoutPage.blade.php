<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Book Review Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    @include("partial.head")
</head>
<body class="cbp-spmenu-push">
    <div class="main-content">
        @include("partial.sidebar")
        <!--left-fixed -navigation-->

        <!-- header-starts -->
        @include("partial.header")
        <!-- //header-ends -->
        <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page">
                @yield("content")
            </div>
        </div>
        <!--footer-->
        @include("partial.footer")
        <!--//footer-->
    </div>
    @include("partial.bodyJs")
</body>
</html>
