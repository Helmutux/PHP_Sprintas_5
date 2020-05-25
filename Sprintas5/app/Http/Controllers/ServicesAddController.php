<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Service;
use Validator;

class ServicesAddController extends Controller
{
    public function execute(Request $request) {
    	
    	if($request->isMethod('post')) {
			$input = $request->except('_token');
			
			
			
			 $validator = Validator::make($input, [
	            'name' => 'required|max:255',
	            'text' => 'required'
	        ]);

	        if ($validator->fails()) {
	        	
	            return redirect()->route('servicesAdd')
	                        ->withErrors($validator)
	                        ->withInput();
	        }
	        
	        $service = new Service();
	        // Page::unguard();
	        $service->fill($input);
	        if($service->save()) {
				return redirect('admin')->with('status', 'Paslaugos aprašymas pridėtas');
			}
		}
		
		if(view()->exists('admin.services_add')) {
			
			$data = [
					
					'title' => 'Naujos paslaugos pridėjimas'
					
					];
			return view('admin.services_add',$data);
		}
	}
}
