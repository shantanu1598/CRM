




@extends('master')
 
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>


<style>

.center{
  position: absolute;
  top:50%;
  left: 50%;
  transform: translate(-50% , -50%);
  justify-content:center;
  align-items:center;
}

</style>
 <div class="center justify-content-center text-align-center">
                <form action="sendOtp" method="POST">
                  @csrf


            <div class=" row justify-content-center"> 
                 <label for="mobileNumber" style="text-align:center">Your Phone number</label>
            </div>

            <div class=" row"> 
                <input type="text" name="mobileNumber" id="mobileNumber" style="text-align:center"  class="form-control border border-danger shadow" value={{$mobileNumber}} required style="width:400px;align-items:center;">
           </div>
<br>
            <div class="row"> 
                <button type="submit" class="btn btn-outline-primary" style="width:250px;align-items:center;text-align:center" >Get OTP</button>
            </div>  

         


        
          



            


          
            

            </form>

</div>
</body>



@endsection