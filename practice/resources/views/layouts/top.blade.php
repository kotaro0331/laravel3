<div class="innertop">
<h2 class="toph2">当サイトへようこそ</h2>
<table style="border-collapse: collapse; width: 100%; height: 80px;">
<tbody>
<tr style="height: 18px;">
<td style="width: 33.3333%; height: 51px;"><a href="{{route('student.create')}}" 
    class=''list-group-item {{url()->current()==route('student.create')? 'active' : ''}}"><span class="topbtn">学生登録</span></td>
<td style="width: 33.3333%; height: 51px;"><a href="{{route('student.index')}}" 
    class=''list-group-item {{url()->current()==route('student.index')? 'active' : ''}}"><span class="topbtn">学生表示</span></td>
<td style="width: 33.3333%; height: 51px;"><span class="topbtn">学生更新</span></td>
</tr>
</tbody>
</table>
</div>
