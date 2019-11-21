<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
          <div class="span12">
            <div class="widget-box">
              <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                <h5>View Brands</h5>
              </div>
              <div class="widget-content nopadding">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Full Name</th>
                      <th>Designation</th>
                      <th>Department</th>
                      <th>Faculty</th>
                      <th>Tel</th>
                      <th>Email</th>
                      <th></th>
                      
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($details as $detail)
                   <tr class="gradeX">
                       <td>{{$detail->id}}</td>
                       <td>{{$detail->full_name}}</td>
                       <td>{{$detail->designation}}</td>
                       <td>{{$detail->department}}</td>
                       <td>{{$detail->faculty}}</td>
                       <td>{{$detail->tel}}</td>
                       <td>{{$detail->email}}</td>
                     </tr>
    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
</body>
</html>