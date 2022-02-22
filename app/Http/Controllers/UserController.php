<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;

use Alert;
class UserController extends Controller
{
    public function save(Request $request)
    {
       
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $clientId = $request->input('clientId');
        $description = $request->input('description');
        $type = $request->input('type');
        $contactMobileNo = $request->input('contactMobileNo');
        $contactEmailId = $request->input('contactEmailId');

        //Dropdown
      $source = $request->input('source');
      $probCategory = $request->input('probCategory');
          $probType = $request->input('probType');
        $probItem = $request->input('probItem');
          $probSummary = $request->input('probSummary');
         $source_AppId = $request->input('source_AppId');
 



        //Movetodatabase



        $data=array(
             'probCategory'=>$probCategory,
           
              "probType"=>$probType,
             "probItem"=>$probItem,
             "probSummary"=>$probSummary,
            "source_AppId"=>$source_AppId,
            "contactEmailId"=>$contactEmailId,
            "contactMobileNo"=>$contactMobileNo,
            "type"=>$type,
            "description"=>$description,
            "clientId"=>$clientId,
            "lastName"=>$lastName,
            "firstName"=>$firstName,
            "source"=>$source,
        
        
        
        );
        DB::table('article_tables')->insert($data);
      
       Alert::success('Congrats','You\'ve Successfully Registered');

    }
    
}
