<?php

namespace Muazan\Dell\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Muazan\Dell\Inspire;
class InspirationController extends Controller
{
    // public function greeting()
    // {
    //     echo 'this is Greeting Message from Controller';
    // }

    public function __invoke(Inspire $inspire)
    {
        // dd('Muazan');
        $quote = $inspire->alert();

        return $quote;
    }

    public function google(Request $request)
    {
        return view('muazan::google');
    }
}
