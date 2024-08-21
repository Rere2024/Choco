<!DOCTYPE html>
<html>

<body class="sub_page">
<div class="main_body_content">
<div class="hero_area">
@include('includes.header')
@yield('content')
</div>

@include('includes.info')
</div>
@include('includes.footer')
@include('includes.footerjs')
</body>

</html>