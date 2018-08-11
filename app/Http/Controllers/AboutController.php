<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Category;
class AboutController extends Controller
{
    public function index()
    {
    //$arr[1] = array('name' => 'yut' ,'content' => 'good' );
    //or
    //$arr[1]['name'] = 'yut';
    //$arr[2]['content'] = 'good';
    $arr = array(
      1 => array('name'=> 'ROYAL PHNOM PENH HOSPITAL','content' => 'Construction of Structural and Architectural.'),
      2 => array('name'=> 'MULTI SHOWROOM','content' => 'Construction of ISUZU ,HONDA SHOWROOM and Service Workshop.'),
      3 => array('name'=> 'PAILIN FEED MILL (C.P.CAMBODIA)','content' => 'Feedmill foundation, Warehouse, Road work and Tunnel.'),
      4 => array('name'=> 'CONSTRUCTION OF BRIDGES, PAPUA NEW GUINEA','content' => 'Construction of Structural'),
      5 => array('name'=> 'SIEM REAP LAKE RESORT GOLF COURSE CLUB HOUSE','content' => 'Construction of Structural'),
      6 => array('name'=> 'CASTING YARD','content' => 'Construction of Structural'),
      7 => array('name'=> 'ANGKOR INTERNATIONAL HOSPITAL (SIEM REAP CAMBODIA)','content' => 'Civil structural and achitectural works.'),
      8 => array('name'=> 'RENOVATION OF RN1 PHASE 1 (LAOS)','content' => 'Reconstruction of the existing Highway from Mittaphap Bridge to Vientiane.'),
      9 => array('name'=> 'REHABILITATION OF ARTERIAL ROADS REPUBLIC OF PALAU','content' => 'Repairing existing pavement and overlay with asphaltic concrete include all drainage structure.'),
      10 => array('name'=> 'ROAD REHABILITATION PROJECT NATIONAL ROUTE NO.51' ,'content' => 'Construction of Structural'),
      11 => array('name'=> 'BETAGRO FACTORY PHNOM PENH' ,'content' => 'Construction of Structural and Architectural PPSEZ Phase 2 Phnom Penh.'),
      12 => array('name'=> 'ROAD WORK IN DUBAI' ,'content' => 'Road Work including pavement widenning Excavation,Subbase,Base and Asphaltic Concrete Laying.'),
      13 => array('name'=> 'LE MERIDIEN ANGKOR HOTEL SIEM REAP' ,'content' => 'Construction of structure architecture and Mechanical & Electrical System Total 214 Rooms 5 Star Hotel.'),
      14 => array('name'=> 'THE ROYAL THAI EMBASSY IN PHNOM PENH CAMBODIA' ,'content' => 'Construction of new Royal Thai Embassy Ambassador Resident, Include MEPS.'),
      15 => array('name'=> 'THE ROYAL THAI EMBASSY IN YANGON MYANMA' ,'content' => 'Construction of 4,047 m2 of Embassy Building (Structure, achitect incld. M&E)'),
      16 => array('name'=> 'TRANSPORTATION' ,'content' => 'Truck crane & Six wheels truck.'),
      17 => array('name'=> 'TRANSPORTATION' ,'content' => 'Trailer & Transit mixer.')
    );
      return view('abouts.index')
      ->with('title', 'About company')
      ->with('categories', Category::take(5)->get())
      ->with('settings', Setting::first())
      ->with('data',$arr);
    }
}
