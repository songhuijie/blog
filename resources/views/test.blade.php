<html>
<head>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<h1 style="text-align: center">测试接口</h1>
<div class="container-fluid">
    <form class="form-horizontal" action="/test" method="POST">
        <div class="form-group">
            <label for="a" class="col-sm-2 control-label">A</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="a" name="a" placeholder="A">
            </div>
        </div>
        <div class="form-group">
            <label for="b" class="col-sm-2 control-label">B</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="b" name="b" placeholder="B">
            </div>
        </div>
        <div class="form-group">
            <label for="c" class="col-sm-2 control-label">C</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="c" name="c" placeholder="C">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">测试</button>
            </div>
        </div>
    </form>
</div>

</body>

</html>




