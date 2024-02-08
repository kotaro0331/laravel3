@extends('layouts.app')
@section('content')

<div class="innertop">
<h2 class="toph2">学生詳細画面</h2>
<table style="border-collapse: collapse; width: 100%; height: 80px;">
<tbody>
<tr style="height: 18px;">
<td style="width: 33.3333%; height: 51px;"><a href="{{url('/post2')}}"><span class="topbtn">学生編集</span></a></td>
<td style="width: 33.3333%; height: 51px;"><a href="{{url('/grade2')}}"><span class="topbtn">成績編集</span></a></td>
<td style="width: 33.3333%; height: 51px;"><a href="{{route('grade.create')}}" 
    class=''list-group-item {{url()->current()==route('grade.create')? 'active' : ''}}"><span class="topbtn">成績登録</span></td>
</tr>
</tbody>
</table>
</div>


@endsection 