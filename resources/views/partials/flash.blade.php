 <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/sweet/sweetalert2.min.css')}}">
</head>
<body>
           <script type="text/javascript" src="{{asset('assets\js\vendor\jquery-1.12.4.min.js')}}"></script>

           <script src="{{asset('assets/sweet/sweetalert2.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>


  <script>
      @if(Session::has('success_message'))
        swal({
          title:"successfully Done!",
          text:"{{Session::get('success_message')}}",
          type:'success'
      });

      @endif
  </script>




</body>
</html>