<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Page Title</title>
    <link rel="stylesheet" type="text/css" href="/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<script type="text/javascript" src="/bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/jquery-1.8.3.min.js"></script>
</head>
<body>
    <h1 class="text-center">用户列表</h1>
    <div style="width:600px;" class="center-block">
        <table class="table table-bordered">
            <a href="#" class="btn btn-warning" style="margin:1px;">批量删除</a>
            <a href="/home/create" class="btn btn-info" style="margin:1px;">用户注册</a>
            <tr>
                <td><button>全选</button></td>
                <td>用户</td>
                <td>ID</td>
                <td>年龄</td>
                <td>性别</td>
                <td>手机号</td>
                <td>邮箱</td>
                <td>操作</td>
            </tr>
            @foreach($data as $k => $v)
            <tr>
                <td> <input type="checkbox" name="che[]"></td>
                <td>{{ $v['name'] }}</td>
                <td>{{ $v['id'] }}</td>
                <td>{{ $v['age'] }}</td>
                <td>{{ $v['sex'] }}</td>
                <td>{{ $v['phone'] }}</td>
                <td>{{ $v['email'] }}</td>
                <td>
                    <button><a href="/home/edit/{{ $v['id'] }}" style="margin:1px;">修改</a></button>
                     <button class="but" style="margin:1px;">删除</button>
                </td>
            </tr>
            @endforeach
        </table>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.but').click(function(){
                var bt = $(this);
                var a = bt.parent().siblings().eq(2).html();
           
                // console.log(a);
                //  console.log($(this).parent().parent());
                    $.get('/home/del/'+a,function(msg){
                    console.log(msg);
                        // console.log(msg);
                        if(msg == 'success'){
                        // 移除选中的节点
                            alert('删除成功');
                        //    $(this).parent().parent());
                              bt.parent().parent().remove();
                        }else{
                            alert('删除失败');
                        }
                    },'html');
            });

            $('button').eq(0).click(function(){
                $('td input:checkbox').attr({'checked':true});
            });
            $('a').eq(0).click(function(){
                var a = $('td input:checkbox:checked').index();
                console.log(a);
                // for(var i=0;i<a.length;i++){
                //     console.log($('td input:checkbox:checked').eq(i));
                // }
                // $.each(a,function(k,v){
                //     console.log($('td input:checkbox:eq('+k+')'));
                // });
                
                // console.log(a);
            });
        </script>
    </div>
</body>
</html>