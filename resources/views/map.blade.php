<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>VPS Map</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body class="container">
<header class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container" id="topbar-content">
        <a class="navbar-brand" href="/" style="padding: 5px 15px;line-height:46px;">
            IPIP.net VPS
        </a>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/add">新增节点</a></li>
                <li><a href="/map">地图</a></li>
                <li><a href="/">列表</a></li>
            </ul>
        </div>
    </div>
</header>
<div class="col-md-12" style="margin-top: 120px; height: 600px;" id="map"></div>
<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 3,
            center: {lat: 17, lng: 65},
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, google.maps.MapTypeId.SATELLITE],
            mapTypeControl: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
                mapTypeIds: [
                    google.maps.MapTypeId.ROADMAP, google.maps.MapTypeId.SATELLITE
                ]
            },
            scaleControl: false
        });
        var image = {
            url: '/tb.png',

        };
                @foreach($res as $t)
        var marker = new google.maps.Marker({
                position: {lat: {{$t->lat}}, lng: {{$t->lng}}},
                map: map,
                    @if($t->status!=='正常')
                        icon: image,
                    @endif
                    title: '{{$t->nickname}}'
            });
                @endforeach

    }
</script>
<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyD-xjynCrcSSBuF_ThWtEwKTAvldjjv-M0&callback=initMap"
        charset="utf-8"></script>
</body>
</html>