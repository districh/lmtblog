<!doctype html>
<html lang="en">
<head >
    <meta name="csrf-token" content="{!!csrf_token()!!}" charset="UTF-8">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/animate.css@3.5.1" rel="stylesheet" type="text/css">
    <title>LMT</title>
</head>
<body>



<div id="avatar">
    <span v-bind:title="message">
    <p  class="avatar_s1" >
        <img src="{{URL::asset('/images/1.jpg')}}"/>
        <img src="{{URL::asset('/images/2.jpg')}}"/>
        <img src="{{URL::asset('/images/3.jpg')}}"/>
    </p>
    <p  class="avatar_s2" >
        <img src="{{URL::asset('/images/4.jpg')}}"/>
        <img src="{{URL::asset('/images/5.jpg')}}"/>
        <img src="{{URL::asset('/images/6.jpg')}}"/>
        <img src="{{URL::asset('/images/7.jpg')}}"/>
    </p>
    </span>
</div>

<div id="clock">
    <p class="date">@{{ date }}</p>
    <p class="time">@{{ time }}</p>
</div>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>