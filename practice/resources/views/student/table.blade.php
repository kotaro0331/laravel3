<table class="table">
<table id="example" class="table">
  <thead>
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">sex</th>
      <th scope="col">age</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Wada</td>
      <td>Male</td>
      <td>35</td>  
    </tr>
    <tr>
      <td>Sugiyama</td>
      <td>Male</td>
      <td>20</td>  
    </tr>
    <tr>
      <td>Fukui</td>
      <td>Female</td>
      <td>49</td>  
    </tr>
  </tbody>
</table>

<script
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

  <link href="https://cdn.datatables.net/v/dt/dt-2.0.0/datatables.min.css" rel="stylesheet">
  <script src="https://cdn.datatables.net/v/dt/dt-2.0.0/datatables.min.js"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable();
});
</script>