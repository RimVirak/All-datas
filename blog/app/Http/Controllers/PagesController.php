<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller


{

    public function about(){
        return view('pages.about');

    }

    public function servicess(){
        $data = array('title'=>'This is servicess pages', 
        'servicess'=> ['Web Design','Programing','SEO']);
        return view('pages.servicess')->with($data);

    }

    public function index(){
        $testValuse ='Hell word will to index soon !!!';
        return view('pages.index')->with('test',$testValuse);// Pass values to view (folder view)
        // return view('pages.index',compact($testValuse)); // Pass values to view (folder view)

    }

    public function customer(){
                   
        $data = array(
        '0'=> array('id'=> 1,'name'=>'Bunsin','email'=>'Bunsin@example.org','Province'=>'Phnom Phen'),
        '1'=> array('id'=> 2,'name'=>'MahaKosal','email'=>'MahaKosal@example.org','Province'=>'Phnom Phen'),
        '2'=> array('id'=> 3,'name'=>'Houch','email'=>'Houch@example.org','Province'=>'Phnom Phen'),
        '3'=> array('id'=> 4,'name'=>'SreyNech','email'=>'SreyNech@example.org','Province'=>'Phnom Phen'),
        '4'=> array('id'=> 5,'name'=>'Pharim','email'=>'Pharim@example.org','Province'=>'Phnom Phen'),
        '5'=> array('id'=> 6,'name'=>'Sovannthai','email'=>'Sovannthai@example.org','Province'=>'Phnom Phen'),
        '6'=> array('id'=> 7,'name'=>'Sit','email'=>'Sit@example.org','Province'=>'Phnom Phen'),
        '7'=> array('id'=> 8,'name'=>'Vibol','email'=>'Vibol@example.org','Province'=>'Phnom Phen'),
        '8'=> array('id'=> 9,'name'=>'Khuntea','email'=>'Khuntea@example.org','Province'=>'Phnom Phen'),
        '9'=> array('id'=> 10,'name'=>'Rothana','email'=>'Rothana@example.org','Province'=>'Phnom Phen'),
        '10'=> array('id'=> 11,'name'=>'Chom','email'=>'Chom@example.org','Province'=>'Phnom Phen'),
        '11'=> array('id'=> 12,'name'=>'Samai','email'=>'Samai@example.org','Province'=>'Phnom Phen'),
        '12'=> array('id'=> 13,'name'=>'SreyEm','email'=>'SreyEm@example.org','Province'=>'Phnom Phen'),
        '13'=> array('id'=> 14,'name'=>'Virak','email'=>'Virak@example.org','Province'=>'Phnom Phen'),
        '14'=> array('id'=> 15,'name'=>'Phanna','email'=>'Phanna@example.org','Province'=>'Phnom Phen'),
        '15'=> array('id'=> 16,'name'=>'Sreykhouch','email'=>'Sreykhouch@example.org','Province'=>'Phnom Phen'),
        '16'=> array('id'=> 17,'name'=>'Remach','email'=>'Remack@example.org','Province'=>'Phnom Phen'),
        '17'=> array('id'=> 18,'name'=>'KimSean','email'=>'KimSean@example.org','Province'=>'Phnom Phen'),
        '18'=> array('id'=> 19,'name'=>'SamOun','email'=>'SamOun@example.org','Province'=>'Phnom Phen'),
        '19'=> array('id'=> 20,'name'=>'Chandar','email'=>'Chandar@example.org','Province'=>'Phnom Phen'),
        '20'=> array('id'=> 21,'name'=>'Sinat','email'=>'Sinat@example.org','Province'=>'Phnom Phen'),
        '21'=> array('id'=> 22,'name'=>'Kay','email'=>'Kay@example.org','Province'=>'Phnom Phen'),
        '22'=> array('id'=> 23,'name'=>'Sokhun','email'=>'Sokhun@example.org','Province'=>'Phnom Phen'),
        '23'=> array('id'=> 24,'name'=>'Houch','email'=>'Houch@example.org','Province'=>'Phnom Phen'),
        '24'=> array('id'=> 25,'name'=>'Dara','email'=>'Dara@example.org','Province'=>'Phnom Phen'),
        );

    return view('pages.customer')->with('data',$data);

    }

    
}
