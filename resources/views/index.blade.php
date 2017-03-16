<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>VPS List</title>
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
                <li><a href="/map">地图</a></li>
                <li><a href="/list">列表</a></li>
            </ul>
        </div>
    </div>
</header>
<div class="col-md-12" style="margin-top: 120px;">
    <table class="table .table-hover">
        <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>ip</th>
            <th>webSite</th>
            <th>accounts</th>
            <th>continent</th>
            <th>country</th>
            <th>province</th>
            <th>city</th>
            <th>coordinate</th>
            <th>startTime</th>
            <th>billing</th>
            <th>status</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($vpss as $vps)
            <tr>
                <td>{{ $vps->id }}</td>
                <td>{{ $vps->ip }}</td>
                <td>{{ $vps->ip }}</td>
                <td>{{ $vps->ip }}</td>
                <td>{{ $vps->ip }}</td>
                <td>{{ $vps->ip }}</td>
                <td>{{ $vps->ip }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<footer>

</footer>
</body>
</html>
