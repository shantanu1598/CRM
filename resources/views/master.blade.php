
<!-- verify otp -->

<style>
body{

  font-family: 'Poppins', sans-serif;

}

</style>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<link href="jquery.datetimepicker.min.css" rel="stylesheet"/>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
 <style>
.crm{
  background-color:#ea2225;
  color:white;
  font-weight:bold;
  text-align:center;
  height:38px;
  font-size:25px;
  margin-bottom:60px;
   flex:wrap;

}
.form-control{
  border-radius:10px;
}

</style>

<!-- @if(Session::has('success'))
<script>
swal("Good job!", "You clicked the button!", "success");

</script>
@endif -->
<div class="logo" style="padding-top:15px;padding-left:70px;padding-bottom:5px;">
<div class="form-inline">
<a href="{{url('/')}}"><img  src="img/logo.png"></a>
<a  href="{{url('/')}}" class="btn btn-outline-danger my-2 my-sm-0" style="border-radius:30px; justify-content:center;align-items:center">Home</a>&nbsp;&nbsp;&nbsp;
<a href="{{url('/checkstatus')}}" class="btn btn-outline-danger my-2 my-sm-0" style="border-radius:30px;justify-content:center;align-items:center">Check Status</a>
</div>



</div>


  
<div class="row">
 
  <label for="crm" class="crm"> Customer Relationship Management</label>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudfare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstarp.min.js"></script>
<script src="jquery.datetimepicker.full.min.js"></script>  
@yield('content')
