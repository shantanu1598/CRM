<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class VerifyOtp extends Controller
{
   
  
    /**
        * @param \Illuminate\Http\Request
        *@return \Illuminate\Http\Response
        */
        
        public function verifyUser(Request $request)
        {
        


            $mobileNumber=$request->mobileNumber;

            $otp=$this->generateNumericOTP();
            $equenceApiCallResponse=$this->equneceApiCall($mobileNumber,$otp);
            
            
             return view('verifyotp',compact('otp'));
         
            //var_dump($otp);
  

           //return $otp;

        }

         /**
        * @param \Illuminate\Http\Request
        *@return \Illuminate\Http\Response
        */
        public function verifyOtp(Request $request)
        {
          $codeOtp=$request->codeotp;
          $userOtp=$request->userotp;

          $applicationIdCommon = $request->session()->pull('applicationid');
          $otp=$codeOtp;

          if($codeOtp==$userOtp)
          {

            $crm_id=$this->getCrmId($applicationIdCommon);
            
            $firstNameArray = $request->session()->pull('firstName');
            $lastNameArray = $request->session()->pull('lastName');
            $mobileNumberArray = $request->session()->pull('mobileNumber');

            $firstName=$firstNameArray[0];
            $lastName=$lastNameArray[0];
            $mobileNumber=$mobileNumberArray[0];

            //return view('crm',compact('firstName'));
           

//return $firstName;
            return view('crm',compact('crm_id','firstName','lastName','mobileNumber'));
            //return $this->getCrmId($applicationIdCommon);
          }

          else
          {

                        
           Session::flash('warning','Invalid');
           return view('verifyotp',compact('otp'));
          }
        }


    public function equneceApiCall($personalMobileNo,$otp)
    {
      $mobileNumber=$personalMobileNo;
      $otp=$otp;
   
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.equence.in/pushsms',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'{
            "username": "recruitment",
            "password": "aeGQ-52-",
            "peId": "1001900184535850000",
            "tmplId": "1007276557498698249",
            "to": '.$personalMobileNo.',
            "from": "AHFLCO",
            "charset": "UTF-16",
            "text": "Use OTP '.$otp.' for authenticating your contact no. with Aadhar Housing Finance. Valid for 30 Mins only."
        }',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
          ),
        ));
       
        $response = curl_exec($curl);
       
        curl_close($curl);
        return json_decode($response)->response[0]->status;
    }



    public function getCrmId($applicationIdCommon)
    {

      $applicationIdCommon=$applicationIdCommon;
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://amwuat.aadharhousing.com/getCrmid/1.0.0/crmid',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>'{
          "applicationid":"300098231"
         
      }',
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer 93b136ce-8437-347c-bad8-d86a9899e7fd',
          'Content-Type: application/json',
          'Cookie: TS01eae153=01b8f29953460d7c5021550fdb97dd50efc6cb81d184a3a05b4b709b5d5975827c659b738b81186f353ed62e76ce3a885d4bcfdb21'
        ),
      ));
      
      $response = curl_exec($curl);
      
      curl_close($curl);
      return json_decode($response)->CRM_ID;
    }


    public function generateNumericOTP() {
     
        // Take a generator string which consist of
        // all numeric digits
        $generator = "1357902468";
        $n=6;
     
        // Iterate for n-times and pick a single character
        // from generator and append it to $result
         
        // Login for generating a random character from generator
        //     ---generate a random number
        //     ---take modulus of same with length of generator (say i)
        //     ---append the character at place (i) from generator to result
     
        $result = "";
     
        for ($i = 1; $i <= $n; $i++) {
            $result .= substr($generator, (rand()%(strlen($generator))), 1);
        }
     
        // Return result
        return $result;
    }
}
