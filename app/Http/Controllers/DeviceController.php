<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class DeviceController extends Controller
{
    
       /**
        * @param \Illuminate\Http\Request
        *@return \Illuminate\Http\Response
        */


        public function mainSearch(Request $request)
        {
            $applicationid=$request->application_id;
            $dateOfBirth=$request->date_of_birth;

        

             $mandateStatusResponse = $this->mandateStatus($applicationid,$dateOfBirth);
             

             $mandate_status = json_decode($mandateStatusResponse,true);

             if( isset( $mandate_status['mandate_status'] ) ){
                $mobileNumber = json_decode($mandateStatusResponse)->mandate_status->mobile_number;
                       
             $request->session()->push('applicationid', $applicationid);
             
             $name = json_decode($mandateStatusResponse)->mandate_status->customer_name;

         
         $wordCount = str_word_count($name);


          if($wordCount == 4) {
            $aftersplit = explode(" ",$name);

           $firstName = $aftersplit[1];
           $lastName = $aftersplit[3];


          }
          elseif($wordCount == 3){
          
            $aftersplit = explode(" ",$name);

            $firstName = $aftersplit[1];
            $lastName = $aftersplit[2];


          }

         
          $request->session()->push('firstName', $firstName);
          $request->session()->push('lastName', $lastName);
          $request->session()->push('mobileNumber', $mobileNumber);
         
    
           return view('mobileotp',compact('mobileNumber'));
             }
             else
             {
              Session::flash('warning','Invalid Application ID or DOB');
                  return view('authwithotp');
             }
            //  if()
            //  {
            //   $mobileNumber = json_decode($mandateStatusResponse)->mandate_status->mobile_number;
                       
            //  $request->session()->push('applicationid', $applicationid);

            // return view('mobileotp',compact('mobileNumber'));
            //  }

            //  else{
            //    Session::flash('warning','Invalid Application ID or DOB');
            //    return view('authwithotp');
            //  }
             
  
              //return $mandate_status;
        

    }
   

    public function mandateStatus($applicationid,$dateOfBirth)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://amwuat.aadharhousing.com/uat/achmandate/1.0/achmandate_status',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'{
            "application_id":"'.$applicationid.'",
            "date_of_birth" :"'.$dateOfBirth.'"
        }',
          CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer 93b136ce-8437-347c-bad8-d86a9899e7fd',
            'Content-Type: application/json'
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        return $response;
    }

    }




