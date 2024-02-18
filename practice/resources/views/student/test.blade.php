


<table id="data-table" class="table">
  <thead>
      <tr><th>ID</th><th>学年</th><th>名前</th></tr>
  </thead>
  <tbody>
  @foreach ($posts as $post)
    <tr>
    <td>{{ $post->id }}</td>
    <td>{{ $post->grade }}</td>
    <td>{{ $post->name }}</td>
    </tr>

    @endforeach
  </tbody>              
</table>




<script
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

  <link href="https://cdn.datatables.net/v/dt/dt-2.0.0/datatables.min.css" rel="stylesheet">
  <script src="https://cdn.datatables.net/v/dt/dt-2.0.0/datatables.min.js"></script>



<script>
$(function(){
  $("#data-table").DataTable({
    "paging": false,
  });
});
</script>
