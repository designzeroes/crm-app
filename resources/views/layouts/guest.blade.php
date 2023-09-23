<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.controlpanel.head')
    <link rel="stylesheet" href="{{asset('assets')}}/vendor/css/pages/page-auth.css" />
<style>
    .dot-pattern-bg {
    background-image: radial-gradient(circle, #000 5%, transparent 5%),
                      radial-gradient(circle, #000 5%, transparent 5%);
    background-size: 10px 10px;
    background-position: 0 0, 9px 9px;
}
.right{
    float:right;
}

</style>
</head>
<body class="dot-pattern-bg">


<!-- Content -->     
@yield('content')
<!-- Content --> 

</body>
</html>
