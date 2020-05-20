<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use App\Service;
use App\Portfolio;
use App\People;

class IndexController extends Controller
{
    
    public function execute(Request $request){

        $pages = Page::all();//pasiimam visus puslapius
        $portfolios = Portfolio::get(['name', 'filter', 'images']);//pasiimam pasirinktinius elementus
        $services = Service::where('id', '<', 20)->get();//pasiimam pasirinktinius elementus
        $peoples = People::take(3)->get();//paimam pirmus tris

        //pasitikrinimui ar veikia fgalime panaudoti komanda dd
        // dd($pages);
        // dd($portfolios);
        // dd($services);
        // dd($peoples);

        return view('site.index');
    }
}
