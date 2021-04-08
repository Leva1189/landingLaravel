<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Page;
use App\Service;
use App\Portfolio;
use App\People;




class IndexController extends Controller
{
    //
    public function execute (Request $request) {

        $pages = Page::all();
        $portfolio = Portfolio::get(array('name', 'filter'));
        $services = Service::where('id', '<', 20)->get();
        $peoples = People::take(3)->get();

        $menu = array();
        foreach ($pages as $page){
            $item = array('title'=>$page->name, 'alias'=>$page->alias);
            array_push($menu, $item);
        }
        //Services
        $item = array('title'=>'Services', 'alias'=>'service');
        array_push($menu, $item);

        //Portfolio
        $item = array('title'=>'Portfolio', 'alias'=>'Portfolio');
        array_push($menu, $item);

        //Team
        $item = array('title'=>'Team', 'alias'=>'team');
        array_push($menu, $item);

        //Team
        $item = array('title'=>'Contact', 'alias'=>'contact');
        array_push($menu, $item);


        return view ('site.index', array(
            'menu'=>$menu,
            'pages'=>$pages,
            'services'=>$services,
            'portfolio'=>$portfolio,
            'peoples'=>$peoples

        ));
    }
}
