<?php

namespace App\Http\Controllers\Handler;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\View;

class KymaServiziController extends Controller
{
    public function index(string $slug){
        $view = View::where('slug', $slug)->firstOrFail();
        $view->increment('views');

        return view('qrView.view-kyma', compact('view'));
    }
}
