<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkExperienceModel; 
use DB;

class WorkExperienceController extends Controller
{
    public function addWorkExperience(Request $request){                  
        $experience = new WorkExperienceModel();
        $experience->job_title = $request->input('title');
        $experience->company = $request->input('company'); 
        $experience->from = $request->input('from'); 
        $experience->to = $request->input('to'); 
        $experience->refference_email = $request->input('email'); 
        $experience->refference_contact = $request->input('contact'); 
        $experience->country = $request->input('country'); 
        $experience->state = $request->input('state'); 
        $experience->city = $request->input('city'); 
        $experience->user_id = $request->input('id'); 
        $result = $experience->save();
        return response()->json(['success'=>'Experience Has Been Added.']);              

    }


    public function updateWorkExperience(Request $request){            
            
        $experience = WorkExperienceModel::find($request->input('experienceId'));
        $experience->job_title = $request->input('title');
        $experience->company = $request->input('company'); 
        $experience->from = $request->input('from'); 
        $experience->to = $request->input('to'); 
        $experience->refference_email = $request->input('email'); 
        $experience->refference_contact = $request->input('contact'); 
        $experience->country = $request->input('country'); 
        $experience->state = $request->input('state'); 
        $experience->city = $request->input('city'); 
        $experience->user_id = $request->input('id'); 
        $result = $experience->save();
        return response()->json(['success'=>'Experience Has Been Updated.']);              

    }



    public function getWorkExperience(Request $request){        
        $WorkExperience = WorkExperienceModel::orderBy('id', 'desc')                         
                         ->take(1)
                         ->get()
                         ->sortByDesc('created_at');      
        return response()->json(['success'=>$WorkExperience]);              
    }
}
