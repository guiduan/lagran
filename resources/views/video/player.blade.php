<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"/>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta name="renderer" content="webkit"/>
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" id="viewport"
          name="viewport">
    <title>播放器 - 拉格朗工作室</title>
    <style type="text/css">body, html, .dplayer {
            padding: 0;
            margin: 0;
            width: 100%;
            height: 100%;
            color: #aaa;
            background-color: #000;
        }

        a {
            text-decoration: none;
        }</style>
    <script type="text/javascript" src="{{asset('dplayer/hls.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('dplayer/DPlayer.min.js')}}"></script>
    <link type="text/css" href="{{asset('dplayer/DPlayer.min.css')}}" rel="stylesheet">
</head>
<body>
<div id="dplayer"></div>
<script type="text/javascript">
    const dp = new DPlayer({
        container: document.getElementById('dplayer'),
        autoplay: true,
        loop: true,
        video: {
            url: '{{$url}}',
            type: 'hls'
        }
    });
</script>
<span style="display:none">

</span>
</body>
</html>
