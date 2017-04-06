<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>Add VPS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalabel=no">
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
<div class="col-md-12" style="margin-top: 80px;">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/add" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" name="nickname" class="form-control" id="name" value="{{ old('nickname') }}" placeholder="服务器名">
        </div>
        <div class="form-group">
            <label for="ipv4">ipv4</label>
            <input type="text" name="ip" class="form-control" id="ipv4" value="{{ old('ip') }}" placeholder="ipv4地址">
        </div>
        <div class="form-group">
            <label for="website">website</label>
            <input type="text" name="website" class="form-control" id="website" value="{{old('website')}}" placeholder="所属vps提供商网站">
        </div>
        <div class="form-group">
            <label for="continent">continent</label>
            <input type="text" name="continent" class="form-control" id="continent" value="{{old('continent')}}" placeholder="大洲">
        </div>
        <div class="form-group">
            <label for="accounts">accounts</label>
            <input type="text" name="accounts" class="form-control" id="accounts" value="{{old('accounts')}}" placeholder="账户">
        </div>
        <div class="form-group">
            <label for="country">country</label>
            <input type="text" name="country" class="form-control" id="country" value="{{old('country')}}" placeholder="国家">
        </div>
        <div class="form-group">
            <label for="province">province</label>
            <input type="text" name="province" class="form-control" id="province" value="{{old('province')}}" placeholder="省／直辖市">
        </div>
        <div class="form-group">
            <label for="city">city</label>
            <input type="text" name="city" class="form-control" id="city" value="{{old('city')}}" placeholder="城市">
        </div>
        <div class="form-group">
            <label for="lat">lat</label>
            <input type="text" name="lat" class="form-control" id="lat" value="{{old('lat')}}" placeholder="lat">
        </div>
        <div class="form-group">
            <label for="lng">lng</label>
            <input type="text" name="lng" class="form-control" id="lng" value="{{old('lng')}}" placeholder="lng">
        </div>
        <div class="form-group">
            <label for="startTime">startTime</label>
            <input type="text" name="startTime" class="form-control" id="startTime" value="{{old('startTime')}}" placeholder="开始启用时间">
        </div>
        <div class="form-group">
            <label for="billing">billing</label>
            <input type="text" name="billing" class="form-control" id="billing" value="{{old('billing')}}" placeholder="账单周期">
        </div>
        <div class="form-group">
            <label for="accounts">status</label>
            <input type="text" name="status" class="form-control" id="status" value="{{old('status')}}" placeholder="状态">
        </div>
        <button type="submit" class="btn btn-default" rel="提交">Submit</button>
    </form>
</div>
<script>

</script>
<footer>

</footer>
</body>
</html>
