<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

<style>
body{

  font-family: 'Poppins', sans-serif;

}

</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

@include('sweetalert::alert')
<body>
 <style>
.crm{
  background-color:#ea2225;
  color:white;
  font-weight:bold;
  text-align:center;
  height:38px;
  font-size:25px;


}
.form-control{
  border-radius:10px;
}

</style>
<div class="logo" style="padding-top:15px;padding-left:70px;padding-bottom:5px;">
<img src="img/logo.png">

<a href="welcome" class="btn btn-outline-danger" style="border-radius:30px;">Home</a>
<a href="#" class="btn btn-outline-danger" style="border-radius:30px;">Check Status</a>

</div>


  
<div class="row">
 
  <label for="crm" class="crm"> Customer Relationship Management</label>
</div>
  
 
    <form action="submit" method="POST">
      @csrf
    <div class="container">
      <div class="row">
  <div class="col-sm-6">
 

        
  <div class="row">
  
    <div class="col">
    <br>
      <label for="clientId"> Client ID:</label>
      <input type="number" name="clientId" class="form-control border border-danger shadow" placeholder="Enter Client ID" required>
    </div>
    <div class="col">
    <br>
      <label for="description">Discription:</label>
      <input type="text" name="description" class="form-control border border-danger shadow" placeholder="Enter Description" required>
    </div>
  </div>

  <div class="row">
        <div class="col">
                    <label for="type" class="label">Type: </label>
                          <select name=type class="form-control border border-danger shadow" id="type" required>
                          <option disabled="disabled" selected="selected">--Choose Option--</option>
                          <option value="Karnataka">Karnataka</option>                
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Tamil Nadu">Tamil Nadu</option>   
            </select>
          </div>
    <div class="col">
      <label for="contactMobileNo">Mobile Number:</label>
      <input type="number" name="contactMobileNo" class="form-control border border-danger shadow"required placeholder="Enter Mobile Number">
    </div>
  </div> 

  <div class="row">
              <div class="col">
      <label for="firstName">First Name:</label>
      <input type="text" name="firstName" class="form-control border border-danger shadow"required placeholder="Enter First Name">
    </div>        
    <div class="col">
      <label for="lastName">Last Name:</label>
      <input type="text" name="lastName" class="form-control border border-danger shadow"required placeholder="Enter Last Name">
    </div>
  </div>

     <div class="row">
        <div class="col">
              <label for="contactEmailId">Email ID:</label>
              <input type="email" name="contactEmailId" class="form-control border border-danger shadow"required placeholder="Enter Email ID">
            </div>        
            <div class="col">
                <label for="source" class="label">Source: </label>
                      <select name="source" class="form-control border border-danger shadow" required id="source">
                      <option disabled="disabled" selected="selected">--Choose Option--</option>
                      <option value="Karnataka">Karnataka</option>                
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
          </select>
        </div>
       </div>
      

   <div class="row">
          <div class="col">
                <label for="probCategory" class="label">Problem Category: </label>
                      <select name="probCategory"class="form-control border border-danger shadow" id="probCategory" required="true">
                      <option disabled="disabled" selected="selected">--Choose Option--</option>
                      <option value="Karnataka">Karnataka</option>                
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
        </select>
          </div>
          <div class="col">
                <label for="probType" class="label">Problem Type: </label>
                      <select name="probType" class="form-control border border-danger shadow"required id="probType">
                      <option disabled="disabled" selected="selected">--Choose Option--</option>
                      <option value="Karnataka">Karnataka</option>                
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
        </select>
          </div>
     </div>

     <div class="row">
        <div class="col">
                <label for="probItem" class="label">Problem Item: </label>
                      <select name="probItem" required class="form-control border border-danger shadow" id="probItem">
                      <option disabled="disabled" selected="selected">--Choose Option--</option>
                      <option value="Karnataka">Karnataka</option>                
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
        </select>
      </div>
      <div class="col">
                <label for="probSummary" class="label">Problem Summary: </label>
                      <select name="probSummary" required class="form-control border border-danger shadow" id="probSummary">
                      <option disabled="disabled" selected="selected">--Choose Option--</option>
                      <option value="Karnataka">Karnataka</option>                
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
        </select>
      </div>
     </div>

  <div class="row">
    <div class="col-sm-6">
      <label for="source_AppId"> Source Application ID:</label>
      <input type="number" name="source_AppId" required class="form-control border border-danger shadow" placeholder="Enter Source App ID">
    </div>

<div class="col">
<br>
    <button type="submit" class="btn btn-outline-primary" style="width:250px;">Submit</button>
</div>
  </div>        

</div>
<div class="col-sm-6">
<div class="d-flex justify-content-end">

<img src="img/crm.png" style="height:450px; width:550px; margin-right:0px;">
</div>

</div>


</div>

</div>





</div>


</div>


</form>





</body>