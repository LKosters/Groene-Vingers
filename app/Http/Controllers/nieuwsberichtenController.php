<?php

namespace App\Http\Controllers;

use App\Models\nieuwsberichten;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

use DateTime;


class nieuwsberichtenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nieuwsberichten = nieuwsberichten::all();
        return View('dashboard-nieuwsberichten', ['nieuwsberichten' => $nieuwsberichten]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('dashboard-nieuwsberichten-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = array(
            'titel'       => 'required',
            'content'      => 'required'
        );
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('dashboard-nieuwsberichten-create')
                ->withErrors($validator)
                ->withInput($request::except('password'));
        } else {
            $nieuwsberichten = new nieuwsberichten;
            $nieuwsberichten->titel = $request->titel;
            $nieuwsberichten->content = $request->content;
            $nieuwsberichten->created_at = new DateTime();
            $nieuwsberichten->save();

            return Redirect::to('dashboard-nieuwsberichten');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $nieuwsberichten = nieuwsberichten::find($id);

        return View('dashboard-nieuwsberichten-edit')
            ->with('nieuwsberichten', $nieuwsberichten);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = array(
            'titel'       => 'required',
            'content'      => 'required',
        );
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('dashboard-nieuwsberichten/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput($request::except('password'));
        } else {
            $nieuwsberichten = nieuwsberichten::find($id);
            $nieuwsberichten->titel = $request->titel;
            $nieuwsberichten->content = $request->content;
            $nieuwsberichten->save();

            return Redirect::to('dashboard-nieuwsberichten');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $nieuwsberichten = nieuwsberichten::find($id);

        if (empty($nieuwsberichten)) {
            abort(404);
        }

        $nieuwsberichten->delete();

        return Redirect::to('dashboard-nieuwsberichten');
    }
}
