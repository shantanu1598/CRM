@extends('master')
@section('content')


@if(Session::has('warning'))
<script>
swal("Invalid OTP!", "Ensure that you have entered correct OTP!", "warning");

</script>
@endif

@if(Session::has('success'))
<script>
swal("Successfully Sent!", "OTP sent on your registered mobile number", "success");

</script>
@endif
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

<form action="verifyOtp" method="POST">
                  @csrf


                  <div class=" row justify-content-center">
                  <input type="text"  id="codeotp"name="codeotp" class="invisible" value={{$otp}} >
                </div>

                <div class="row">
                <br>
                  <label for="userotp" style="text-align:center">Enter your OTP</label>
                  <input type="text"  id="userotp"name="userotp" class="form-control border border-danger shadow" style="align-item:center" maxlength="6" required >
                </div>
<br>
                <div class="row  justify-content-center">
            <br>
                <button type="submit" class="btn btn-outline-primary" style="width:250px;align-items:center;text-align:center">Submit</button>
            </div>


</div>
             

            </div>
</form>

</div>

@endsection