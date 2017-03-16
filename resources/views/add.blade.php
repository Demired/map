<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>Add VPS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalabel=no">
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css">
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
                <li><a href="/map">MAP</a></li>
                <li><a href="/list">LIST</a></li>
            </ul>
        </div>
    </div>
</header>
<div class="col-md-12" style="margin-top: 120px;">
    <form action="/" method="post">
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" name="nickname" class="form-control" id="name" placeholder="name">
        </div>
        <div class="form-group">
            <label for="ipv4">ipv4</label>
            <input type="text" name="ip" class="form-control" id="ipv4" placeholder="ipv4">
        </div>
        <div class="form-group">
            <label for="website">website</label>
            <input type="text" name="website" class="form-control" id="website" placeholder="website">
        </div>
        <div class="form-group">
            <label for="continent">continent</label>
            <input type="text" name="continent" class="form-control" id="continent" placeholder="continent">
        </div>
        <div class="form-group">
            <label for="accounts">accounts</label>
            <input type="text" name="accounts" class="form-control" id="accounts" placeholder="accounts">
        </div>
        <div class="form-group">
            <label for="continent">continent</label>
            <input type="text" name="continent" class="form-control" id="continent" placeholder="continent">
        </div>
        <div class="form-group">
            <label for="country">country</label>
            <input type="text" name="country" class="form-control" id="country" placeholder="country">
        </div>
        <div class="form-group">
            <label for="province">province</label>
            <input type="text" name="province" class="form-control" id="province" placeholder="province">
        </div>
        <div class="form-group">
            <label for="city">city</label>
            <input type="text" name="city" class="form-control" id="city" placeholder="city">
        </div>
        <div class="form-group">
            <label for="coordinate">coordinate</label>
            <input type="text" name="coordinate" class="form-control" id="coordinate" placeholder="coordinate">
        </div>
        <div class="form-group">
            <label for="startTime">startTime</label>
            <input size="16" name="startTime" type="text" value="2012-06-15 14:45" id="startTime" placeholder="startTime" readonly class="form_datetime">
        </div>
        <div class="form-group">
            <label for="billing">billing</label>
            <input type="text" name="billing" class="form-control" id="billing" placeholder="billing">
        </div>
        <div class="form-group">
            <label for="accounts">status</label>
            <input type="text" name="status" class="form-control" id="status" placeholder="status">
        </div>
        <div class="form-group">
            <label for="coordinate">coordinate</label>
            <input type="text" class="form-control" id="coordinate" placeholder="coordinate">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
<script src="//cdn.bootcss.com/jquery/3.1.1/jquery.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script>
    ;(function($){
        $.fn.datetimepicker.dates['zh_CN'] = {
            days: ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六", "星期日"],
            daysShort: ["周日", "周一", "周二", "周三", "周四", "周五", "周六", "周日"],
            daysMin:  ["日", "一", "二", "三", "四", "五", "六", "日"],
            months: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
            monthsShort: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
            today: "今日",
            suffix: [],
            meridiem: []
        };
    }(jQuery));
//    $('#datetimepicker').datetimepicker('show');
$(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});

</script>
<footer>

</footer>
</body>
</html>
