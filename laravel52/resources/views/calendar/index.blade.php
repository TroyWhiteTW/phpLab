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
{{--日期表格--}}
@for($i = 1; $i <= count($iDays); $i++)
@if($i % 7 == 1)
    <tr class="trColor">
@endif
@if($iDays[$i-1] <= 0 || $iDays[$i-1] > $monDays)
        <td class="noDateColor">
@elseif($y == date('Y') && $m == date('n') && $iDays[$i-1] == date('j'))
        <td class="today">
@elseif($i % 7 == 1)
        <td class="weekendColor">
@elseif($i % 7 == 0)
        <td class="weekendColor">
@else
        <td>
@endif
@if($iDays[$i-1] > 0 && $iDays[$i-1] <= $monDays)
        {{ $iDays[$i-1] }}
@endif
@foreach($holiday as $key => $value)
@if($value[0] == $y && $value[1] == $m && $value[2] == $iDays[$i-1])
        <div class='font12'>{{ $value[3] }}</div>
@endif
@endforeach
        </td>
@if($i % 7 == 0)
    </tr>
@endif
@endfor
</table>
<input type='button' value='上一年' class='btn_y_p button1' onclick="location.href='{{ route('calendar') }}/{{ $iYear_p }}/{{ $m }}'"/>
<input type='button' value='下一年' class='btn_y_n button1' onclick="location.href='{{ route('calendar') }}/{{ $iYear_n }}/{{ $m }}'"/>
<input type='button' value='上個月' class='btn_m_p button2' onclick="location.href='{{ route('calendar') }}/{{ $iYear_1 }}/{{ $iMon_p }}'"/>
<input type='button' value='下個月' class='btn_m_n button2' onclick="location.href='{{ route('calendar') }}/{{ $iYear_2 }}/{{ $iMon_n }}'"/>
</body>
</html>