<?php

namespace App\Http\Controllers;

use App\Callback;
use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * Class CallbackController
 * @package App\Http\Controllers
 */
class CallbackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('lang');
    }
    
    /**
     * Display all the callbacks.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data['query'] = Callback::all();
    	return view('callbacks/list', $data);
    }


    /**
     * Create a new callback.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('callbacks.create');
    }

    /**
     * Store a callback request.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        return redirect()->back(302);
    }

    /**
     * Show update form for a callback.
     * 
     * @param  int $id the callback id in the database.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
    	return view('callbacks/details');
    }

    /**
     * Destroy a callback out off the system.
     *
     * @param  int $id The callback id in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        return redirect()->back(302);
    }

}
