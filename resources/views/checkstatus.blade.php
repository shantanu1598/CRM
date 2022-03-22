@extends('master')
 
@section('content')
   



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
                <form action="checkstatus" method="POST">
                  @csrf


            <div class=" row justify-content-center"> 
                 <label for="ticketNumber" style="text-align:center">Enter your Ticket no</label>
            </div>

            <div class=" row"> 
                <input type="text" name="ticketNumber" id="ticketNumber" style="text-align:center"  class="form-control border border-danger shadow" required style="width:500px;align-items:center;">
           </div>
<br>
            <div class="row"> 
                <button type="submit" class="btn btn-outline-primary" style="width:250px;align-items:center;text-align:center" >View Status</button>
            </div>  

         


        
          



            


          
            

            </form>

</div>
</body>



@endsection