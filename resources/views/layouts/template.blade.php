<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DemoV2</title>
    <link href="{{asset('/css/all.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{mix('/css/style.css')}}">
</head>

<body>
<div id="root">
    <div id="app-container" class="default">
        <!-- header -->
        @include('layouts.header')
        <!-- body -->
        @include('layouts.body.body')
        <!-- footer -->
        @include('layouts.footer')
    </div>
</div>
</body>
<script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v4.0&appId=122692321932627&autoLogAppEvents=1">
</script>
</html>
