@extends('master')
 
@section('content')
   




@if(Session::has('success'))
<script>
swal("Successfully submitted","{{ $response_status }}", "success");

</script>
@endif

@if(Session::has('error'))
<script>
swal("Something went wrong","{{ $responseTest }}", "error");

</script>
@endif






    <form action="submit" method="POST">
    @csrf
    <div class="container">
      <div class="row">
  <div class="col-sm-6">
 

        
  <div class="row">
  
    <div class="col">
    <br>
      <label for="applicationID">  Application ID:</label>
      <input type="number" name="applicationID" class="form-control border border-danger shadow" placeholder="Enter Apllication ID" value={{$crm_id}} required readonly>
    </div>
    <div class="col">
    <br>
      <label for="description">Discription:</label>
      <input type="text" name="description" class="form-control border border-danger shadow" placeholder="Enter Description" required>
    </div>
  </div>

  <div class="row">
        <div class="col">
                    <label for="type" class="label">Customer Type: </label>
                          <select name=type class="form-control border border-danger shadow" id="type" required>
                          <option disabled="disabled" selected="selected">--Choose Option--</option>
                      <option value="Deposits">Existing Customer</option>  
            </select>
          </div>
    <div class="col">
      <label for="contactMobileNo">Mobile Number:</label>
      <input type="number" name="contactMobileNo" class="form-control border border-danger shadow"required value={{$mobileNumber}} readonly placeholder="Enter Mobile number">
    </div>
  </div> 

  <div class="row">
              <div class="col">
      <label for="firstName">First Name:</label>
      <input type="text" name="firstName" class="form-control border border-danger shadow"required value={{$firstName}} readonly placeholder="Enter first name">
    </div>        
    <div class="col">
      <label for="lastName">Last Name:</label>
      <input type="text" name="lastName" class="form-control border border-danger shadow"required  value={{$lastName}} readonly placeholder="Enter Last name">
    </div>
  </div>

     <div class="row">
        <div class="col">
              <label for="contactEmailId">Email ID:</label>
              <input type="email" name="contactEmailId" class="form-control border border-danger shadow"required placeholder="Enter Email ID">
            </div>   
            <div class="col">
                <label for="probCategory" class="label">Problem Category: </label>
                      <select name="probCategory"class="form-control border border-danger shadow" id="probCategory" >
                      <option disabled="disabled" selected="selected">--Choose Option--</option>
                      <option value="Request">Request</option> 
        </select>
          </div>     
       </div>
      

   <div class="row">
          <div class="col">
                <label for="probType" class="label">Problem Type: </label>
                      <select name="probType" class="form-control border border-danger shadow"required id="probType">
                      <option disabled="disabled" selected="selected">--Choose Option--</option>
                      <option value="Deposits">Deposits</option>  
        </select>
          </div>
          <div class="col">
                <label for="probItem" class="label">Problem Item: </label>
                      <select name="probItem" required class="form-control border border-danger shadow" id="probItem">
                      <option disabled="disabled" selected="selected">--Choose Option--</option>
                      <option value="FD Closer">FD Closer</option>                
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
        </select>
      </div>
     </div>

     <div class="row">
      <div class="col-6">
                <label for="probSummary" class="label">Problem Summary: </label>
                      <select name="probSummary" required class="form-control border border-danger shadow" id="probSummary">
                      <option disabled="disabled" selected="selected">--Choose Option--</option>
                      <option value="Maturity Payment Request">Maturity Payment Request</option>                
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
        </select>
      </div>
     </div>
<div class="col-sm-6">
<br>
    <button type="submit" class="btn btn-outline-primary" style="width: 250px;">Submit</button>
</div>
  </div>        

</div>



</div>

</div>





</div>


</div>


</form>





</body>



@endsection

