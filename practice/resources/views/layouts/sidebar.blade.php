<div class="innertop">
<h2 class="toph2"></h2>
<table style="border-collapse: collapse; width: 100%; height: 100px;">
<tbody>
<tr style="height: 18px;">
<td style="width: 33.3333%; height: 51px;"><a href="{{route('dashboard')}}" 
    class=''list-group-item {{url()->current()==route('dashboard')? 'active' : ''}}">
    <span class="topbtn2">TOP画面

    </toppe-ji></span></td>
<td style="width: 33.3333%; height: 51px;"><a href="{{route('grade.create')}}" 
    class=''list-group-item {{url()->current()==route('grade.create')? 'active' : ''}}">
    <span class="topbtn2">成績登録</span></td>
</tr>
</tbody>
</table>
</div>
