<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <link rel="stylesheet" type="text/css" href="/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<script type="text/javascript" src="/bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<body class="bg-info">
    <h1 class="text-center">用户注册</h1>
    <div style="width:600px;" class="center-block">
        <a href="/home/index" class="btn btn-warning" style="margin:1px;">用户列表</a>
        <a href="/home/create" class="btn btn-info" style="margin:1px;">用户注册</a>
        <table class="table table-bordered">
        @foreach($data as $k => $v)
        <form action="/home/update/{{ $v['id'] }}" method="post">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">用户:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{ $v['name'] }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">年龄:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="age" value="{{ $v['age'] }}">
            </div>
            <div class="form-group">
                @if($v['sex'] == 'nan')
                    <label for="exampleInputEmail1">性别:</label><br>
                    <label class="radio-inline">
                        <input type="radio" name="sex" checked id="inlineRadio1" value="nan"> 男
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="sex" id="inlineRadio2" value="nv"> 女
                    </label>
                @else
                    <label for="exampleInputEmail1">性别:</label><br>
                    <label class="radio-inline">
                        <input type="radio" name="sex" id="inlineRadio1" value="nan"> 男
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="sex" checked id="inlineRadio2" value="nv"> 女
                    </label>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">手机号:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="phone" value="{{ $v['phone'] }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">邮箱:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="email" value="{{ $v['email'] }}">
            </div>
            <button type="submit" class="btn btn-default center-block">修改</button>
        </form>   
        @endforeach
        </table>
    </div>
</body>
</html>