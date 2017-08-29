<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>
    <link href="/css/app.css" rel="stylesheet">

</head>
<body>
<div id="app">
    {{--<div class="container">--}}
        {{--<div class="content">--}}
            {{--<div class="title">--}}
                {{--<p> @{{ message }} </p>--}}
                {{--<input type="text" v-model="message">--}}
            {{--</div>--}}
        {{--</div>--}}

    {{--</div>--}}

    <div id="app">
        <my-view></my-view>
    </div>
</div>
</body>
<script type="text/javascript" src="/dist/hebing.js"></script>

</html>