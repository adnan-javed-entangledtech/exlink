<!DOCTYPE html>
<html>
<head>
    <title>Exlink</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.css" rel="stylesheet">
</head>
<body>
  
<div class="container">
    <div class="row m-t">
        <div class="col-lg-12 margin-tb m-t">
            <div class="pull-left">
                <h2>Exlink Project</h2>
            </div>
        </div>
    </div>
    @yield('content')
</div>

<script>
  $( function() {
    $( "#dateTime").datetimepicker({
        format:'D d M Y h:m:s A'
        // format:'Y-m-d H:m:s'
    });
  });
  </script>
</body>
</html>