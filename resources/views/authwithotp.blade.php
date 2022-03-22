@extends('master')
 
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>



@if(Session::has('warning'))
<script>
swal("Invalid Application ID or DOB", "Ensure that you have entered Application ID or Dob!", "warning");

</script>
@endif

@if(Session::has('success'))
<script>
swal("Successfully submitted","{{ $response_status }}", "success");

</script>
@endif



 <div class="d-plex justify-content-center align-item-center">
                <form action="search" method="POST">
                  @csrf


                  
                <div class="container text-center">
                  <div class="row">
                      <div class="col-sm-6">
            


                <br>
                  <label for="applicationid"> Application ID:</label>
                  <input type="text" name="application_id" class="form-control border border-danger shadow" placeholder="Enter Client ID" required>
                </div>

              <div class="col">
                <br>
                  <label for="dateOfBirth">Date of Birth:</label>
                 

                  <input class="date form-control border border-danger shadow" type="text" name="date_of_birth" placeholder="yyyy-mm-dd" required>
               </div>
              </div>

<br>
            <div class="col">
            <br>
                <button type="submit" class="btn btn-outline-primary" style="width:250px;">Submit</button>
            </div>

         


        
          



              </div>        

            </div>



          
            

            </form>

</div>
</body>


<script type="text/javascript">

    $('.date').datepicker({  

       format: 'yyyy-mm-dd'

     });  

</script> 
@endsection