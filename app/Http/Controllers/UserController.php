<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function save(Request $request)
    {

       $applicationID = $request->input('applicationID');
       $description =  $request->input('description');
       $type =  $request->input('type');
       $contactMobileNo = $request->input('contactMobileNo');
       $firstName =  $request->input('firstName');
       $lastName =  $request->input('lastName');
       $contactEmailId = $request->input('contactEmailId');
       $probCategory =  $request->input('probCategory');
       $probType =  $request->input('probType');
       $probItem =  $request->input('probItem');
       $probSummary =  $request->input('probSummary');

        //Movetodatabase

        $data=array(
           
             'applicationID'=>$applicationID,
             'description'=>$description,
             'type'=>$type,
             'contactMobileNo'=>$contactMobileNo,
             'firstName'=>$firstName,
             'lastName'=>$lastName,
             'contactEmailId'=>$contactEmailId,
             'probCategory'=>$probCategory,
             'probType'=>$probType,
             'probItem'=>$probItem,
             'probSummary'=>$probSummary
        
        
        );

    
        $response=DB::table('articles')->insert($data);

        //echo !$response;
      
       //Alert::success('Congrats','You\'ve Successfully Registered');

       if($response==1)
       {
          $token = $this->generateToken();
         $crmCreateResponse= $this->createCase($data, $token);

         $response_type=json_decode($crmCreateResponse)->response_type;

         if($response_type=='SUCCESS')
         {
          $response_status=json_decode($crmCreateResponse)->respose_status;

        
         // return $response_status;

         Session::flash('success',$response_status);
              return view('authwithotp',compact('response_status') );
         }

            if($response_type=='FAILURE')
            {
              
              $response_status=json_decode($crmCreateResponse)->response_failed_at;
              $responseTest=str_replace('>',' ',$response_status);
              Session::flash('error',$responseTest);
              return view('crm',compact('responseTest') );
             // return $responseTest;
            }
          
       
        
       }
       else
       {
        
         return "Form not Submitted";
       }

     //return $response;




    }
    
    public function createCase($data, $token){
      $token=$token;
      
   $crm_id = $data['applicationID'];
   $description = $data['description'];
   $type = $data['type'];
 $contactMobileNo = $data['contactMobileNo'];
 $firstName = $data['firstName'];

   $lastName = $data['lastName'];
   $contactEmailId = $data['contactEmailId'];
   $probCategory = $data['probCategory'];
   $probType = $data['probType'];

 $probItem = $data['probItem'];
 $probSummary = $data['probSummary'];
  
     
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://training.tcsion.com/CRM/crmrest/crmGetCase/casefileuploadsknew',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('casebody' => '{
"clientId": "'.$crm_id.'",
"description": "'.$description.'",
"type": "'.$type.'",
"contactMobileNo": "'.$contactMobileNo.'",
"contactEmailId": "'.$contactEmailId.'",
"firstName" : "'.$firstName.'",
"lastName" : "'.$lastName.'",
"source" : "Branch",
"probCategory" : "'.$probCategory.'",
"probType" : "'.$probType.'",
"probItem" : "'.$probItem.'",
"probSummary" : "'.$probSummary.'",
"source_AppId":"AHFL10012",
}'),
  CURLOPT_HTTPHEADER => array(
    'token_id:'.$token,
    'identifier: 00288113401687'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
//echo $response;
 return $response;

    }
    public function generateToken(){
      
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://training.tcsion.com/CRM/crmrest/clientCom/generateToken',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_HTTPHEADER => array(
    'user_name: NbMd/6vWIGOA0HeT1dNmI44RZJzBkaRVm3p/JnuIy34yX0ToAJhnCx2m0pliEySyWsRadmXUfQ4OoHnBkSYHYMzcxYE78IsgtozjRbHff5G8pVe6vKGoNf541sShXhUDbEQQRatPmu42JF0YXSF+FULEjQ7LppWcZuhKzKPLa3a73tViIFpwbPdf4VvIdfjqhNsC1VlfPeLW5XCkvtS9k9eHDjadJzLjdsab9ZCXQIRiIXx4eYupS4wkdL/qQ78psBqIoKoj9GeBn8XA2sBzVZxvNvUQ2NJKUDiBcU+AXZNLKgWvdil0NEK0yzwRYGDG82frDJrhDuvJbyqVjmDuqni+W/g+CgnXGiCGBjEweViKY3tTXjTxqIJgG4oCWItj+tPBWWVob38BzEPhll5Fpg/SiJCQazjYtOQpuMWSxrwlBllXdkDm2mGwjNs6XpuxeUJtPJtghuy28KyPga/qqHruh3vupByPDwmLc0c2F8psrchjg+6siIsyxnJK4xtv/0CwNPq4z3mimT2NZxbNvfIEOg3y/oBQeTLRFu2jVgqt3C7jR5MWS97ynq7ZTw+UlnWemuWswDy3t7pRFiAudyFQVpr9Ns8hIBO+OmQXUiJ0C88AIRDECGUrzO5P3K+iB5RYi7VNm/k4FYJrqo5J8dpXejIQoxUjzMbT/bP+bEg=',
    'password: TGwkQJzKZIqlO/KH0Wx2HchcRjTB09ybFaT1LTyqY0PUXPk3JpJepSqiu328QhLarGHzB7s8qKcvb894PFMer6MYOyqRHxUXbC/WO+1iUPNkILCeJe9sqLuSI2enwXLTrbYjPzVxUXwX6YpH+KWe19z8Me7Vb87p1MlQYEpMUNUYxtpWTQ1verbyl9hd1Ga8qsrJexWzlqQGgyqSPIkcFNFpOxJgn14Sh/FWXZke1hf/i31Vc2GY6U25L/kFLB7Rl634/eVrWeq9xnYJ/4YRr6AI7FgvpZhj32NVA/UkWnpy3bk7Psmrtl64QyMKcSAMW9qFTJ8rc412hlZ+GdbWjs1T1ydWUUktklhIHwSdqOkTAK34J+EReI9ibAMFeoVM6zESOXhBr09346gnfZ0eD3idGqjSFr/vZglc4TXU3A4kh2nw61KOp2hO2hIyDj95lSW0YvgKo4BQ9y9i4I0nI7C33lOoYZFBR4dUzXxYfghbxuwtVfOHaG3Aq7WdxOhPXL8+3IGdEbtbWyTpaW6Hl0kH3fP3XLLAHXfcAEFfVUSDREHMmqHw7MY/rJq0biWtBqWhM3AGZISEJUase8y/EA0jb0HMYh8vEHEPjbTqz8NXUOB9NdPJYKKyw3qdNwVPrxxsGH+uCRiQ7xPfMlnxBaKVwEcWRDYNHJAYEC3WY4c=',
    'identifier: 00288113401687',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
 
return json_decode($response)->token_id;
    }


  
    
}
