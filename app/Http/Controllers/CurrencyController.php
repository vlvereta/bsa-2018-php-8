<?php

namespace App\Http\Controllers;

use App\Currency;
use \Illuminate\Http\Request;
use App\Http\Requests\ValidatedCurrencyRequest;

class CurrencyController extends Controller
{
    public function showAll()
    {
        return view('currency-list', ['currencies' => Currency::all()]);
    }

    public function showById(int $id)
    {
        $currency = Currency::find($id);
        if (!$currency) {
            abort(404);
        }
        return view('currency', ['currency' => $currency]);
    }

    public function add()
    {
        return view('forms/add-form');
    }

    public function create(ValidatedCurrencyRequest $request)
    {
        Currency::create($request->only(['title', 'short_name', 'logo_url', 'price']));
        return view('currency-list', ['currencies' => Currency::all()]);
    }

    public function edit(int $id)
    {
        $currency = Currency::find($id);
        if (!$currency) {
            abort(404);
        }
        return view('forms/edit-form', ['currency' => $currency]);
    }

    public function update(ValidatedCurrencyRequest $request)
    {
        $currency = Currency::find($request->id);
        if (!$currency) {
            abort(404);
        }
        $currency->fill($request->only(['title', 'short_name', 'logo_url', 'price']));
        $currency->save();
        return view('currency', ['currency' => $currency]);

    }

    public function delete(Request $request)
    {
        Currency::destroy($request->id);
        return view('currency-list', ['currencies' => Currency::all()]);
    }
}
