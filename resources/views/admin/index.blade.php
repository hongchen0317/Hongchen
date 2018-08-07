@include('./admin/header')
<body>
    <div class="div"></div>
    <h1>{{-- {{ $title }} --}}</h1>
    <ul>
        <li>{{ date('Ymd',time()) }}</li>
        <li>{{ $str or 'aaaa' }}</li>
        <li>{!! $data !!}</li>
    </ul>
    @if($s == true)
        <a href="">登录</a>
    @else
        <a href="">未登录</a>
    @endif
    @for($i=0;$i<5;$i++)
        {{ $i }}<br>
    @endfor
    <ul>
        @foreach($arr as $k=>$v)
            <li>{{ $k }}----{{ $v['name'] }}----{{ $v['age'] }}</li>
        @endforeach
    </ul>
</body>
</html>