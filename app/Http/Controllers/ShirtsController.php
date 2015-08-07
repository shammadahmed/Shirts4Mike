<?php

namespace Shirts4Mike\Http\Controllers;

use Illuminate\Http\Request;
use Shirts4Mike\Http\Controllers\Controller;
use Shirts4Mike\Http\Requests;
use Shirts4Mike\Shirt;

class ShirtsController extends Controller
{
    /**
     * Display a listing of all shirts.
     *
     * @return Response
     */
    public function index()
    {
        $shirts = Shirt::paginate(8);

        return view('shirts.index', compact('shirts'));
    }

    /**
     * Display the recent shirts..
     *
     * @return Response
     */
    public function recent()
    {
        $shirts = Shirt::recent(4);

        return view('welcome', compact('shirts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $shirt = Shirt::findOrFail($id);

        return view('shirts.shirt', compact('shirt'));
    }
}
