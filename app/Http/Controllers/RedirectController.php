<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\View;

class RedirectController extends Controller
{
    public function redirect(Request $request){
        if($request->filled('q')){
            //Todo change logic
            $view = View::findOrFail($request->q);
            if($view) return redirect()->route('view-kyma', $view->slug);
        }


        return view('redirect');
    }
}
