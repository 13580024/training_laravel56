<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Exports\BladeExport;
use App\User as UserMod; 


class DemoController extends Controller
{
    public function index()
    {
        echo "i love it";
    }

    public function demotwo()
    {
        return "Method POST: demotwo";
    }

    public function demothree()
    {
        return "Method GET, POST : demothree";
    }

    public function demofour()
    {
        return "Method GET, POST, PUT/PATCH, DELETE : demofour";
    }


    public function testlinenoti()
    {
        $line_noti_token = "4MLW11iiHkLKjKAO8rtrnoN7liOS9KnkpbzKkNVK5HO";
        
        $message = array(
          'message' => "โย่วห์ๆ",//required message
          'stickerPackageId'=> 3,
          'stickerId'=> 189
        );
        
        notify_message($message,$line_noti_token);
        
        return 'ok';
    }

    public function testexcel(){
        $user = UserMod::all();
        return \Excel::download(new BladeExport($user->toArray()), 'invoices.xlsx');
    }



}
