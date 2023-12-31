<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AmrShawky\LaravelCurrency\Facade\Currency;

class DemoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $converted = '';

        if($request->filled("currency_from")){
            $convertedObj = Currency::convert()
                    ->from($request->get('currency_from'))
                    ->to($request->get('currency_to'))
                    ->amount($request->get('amount'));
            if($request->filled('date')){
                $convertedObj = $convertedObj->date($request->get('date'));
                dd($convertedObj);
            }

            $converted = $convertedObj->withoutVerifying()->get();
        }
        
        return view('currency',compact('converted'));
    }
}