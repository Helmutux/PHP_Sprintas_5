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

        //suformuojame meniu atvaizdavima imant duomenis is DB
        $menu = array();
        foreach($pages as $page){
            //atskiras meniu punktas
            $item = array('title'=>$page->name,'alias'=>$page->alias);
            array_push($menu, $item);
        }
        //pasitikrinam ar veikia
        //dd($menu);

        //sufromuojam likusio turinio paemima is db 
        //paslaugu
        $item = array('title'=>'Paslaugos', 'alias'=>'service');//alias <- id html koed
        array_push($menu, $item);

        //portfolio
        $item = array('title'=>'Portfolio', 'alias'=>'Portfolio');
        array_push($menu, $item);

        //komandos
        $item = array('title'=>'Komanda', 'alias'=>'team');
        array_push($menu, $item);

        //kontaktu
        $item = array('title'=>'Kontaktai', 'alias'=>'contact');
        array_push($menu, $item);

      

        return view('site.index', array(
                'menu'=>$menu,
                'pages'=>$pages,
                'services'=>$services,
                'portfolios'=>$portfolios,
                'peoples'=>$peoples,
        ));
    }
}
