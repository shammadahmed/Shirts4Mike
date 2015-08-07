<?php

namespace Shirts4Mike\Http\Controllers;

use Illuminate\Http\Request;
use Shirts4Mike\Http\Controllers\Controller;
use Shirts4Mike\Http\Requests;
use Shirts4Mike\Shirt;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function search(Request $request)
    {
        $q = $request->get('q');

        if ($request->has('q')) {

            if (empty($q)) {
                return redirect('search')->with('status', 'Please, insert a search term.');
            } else {
                $shirts = Shirt::where('name', 'LIKE', '%'.$q.'%')->get();

                if (empty($shirts->toArray())) {
                    return redirect('search')->with('status', 'No products were found matching that search term.')->withInput();
                }
            }

            return view('search', compact('shirts'));
        }

        return view('search');
    }
}
