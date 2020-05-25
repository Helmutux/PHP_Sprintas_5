<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Service;

class ServicesController extends Controller
{
    //
    public function execute(){

        if(view()->exists('admin.services')){

            $services = Service::all();
            $data = [

                'title' => 'Paslaugos',
                'services' => $services
            ];
            return view('admin.services', $data);
        }
        abort(404);
    }
}
