<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Portfolio;
use Validator;

class PortfoliosAddController extends Controller
{
    public function execute(Request $request){
     
        if($request->isMethod('post')){

            $input = $request->except('_token');

        
            $validator = Validator::make($input, [
                'name' =>'required|max:255',
                'filter' => 'required|max:255'
            ]);

            if($validator->fails()){
                return redirect()->route('portfoliosAdd')
                    ->withErrors($validator)
                    ->withInput(); 
            }

            if($request->hasFile('images')){
                $file = $request->file('images');
                $input['images'] = $file->getClientOriginalName();
                $file->move(public_path().'/img', $input['images']);
            }
            
            $portfolio = new Portfolio();
            
            $portfolio->fill($input);
            
            if($portfolio->save()){
                return redirect('admin')->with('status', 'Puslapis sėkmingai pridėtas');
            }
        }

        if(view()->exists('admin.portfolios_add')) {
            $data = [
                'title'=>'Naujas puslapis'
            ];
            return view('admin.portfolios_add', $data);
        }
        abort(404);
    }
}
