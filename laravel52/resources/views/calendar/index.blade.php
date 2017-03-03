<html>
<head>
    <title>月曆</title>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <link rel='stylesheet' href='{{ asset('style.css') }}'>
</head>
<body>
<table class='table font24'>
    <tr class='titleColor'>
        <th colspan='7'>
            {{ $y }}年{{ $m }}月
        </th>
    </tr>
    <tr class='trColor'>
        <th class='weekendColor'>日</th>
        <th>一</th>
        <th>二</th>
        <th>三</th>
        <th>四</th>
        <th>五</th>
        <th class='weekendColor'>六</th>
    </tr>
@for($j = 0; $j < 5; $j++)
    <tr class='trColor'>
@for($i = 0; $i < 7; $i++)
        <td>{{ $i }}</td>
@endfor
    </tr>
@endfor
</table>
<input type='button' value='上一年' class='btn_y_p button1' onclick="location.href='{{ route('calendar') }}'"/>
<input type='button' value='下一年' class='btn_y_n button1' onclick="location.href='{{ route('calendar') }}'"/>
<input type='button' value='上個月' class='btn_m_p button2' onclick="location.href='{{ route('calendar') }}'"/>
<input type='button' value='下個月' class='btn_m_n button2' onclick="location.href='{{ route('calendar') }}'"/>
</body>
</html>