<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class BuyersController extends Controller {

    public function show($id)
    {
        $buyer = Buyer::where('id', $id)->with('addresses')->get()->first();

        if ($buyer != null) {
            return view('buyer')->with('buyer', $buyer);
        } else
            return "buyer not found";
    }

    public function filter(Request $request)
    {
        $filters = [
            'name' => $request->get('name'),
            'phone_number' => $request->get('phone_number'),
            'email' => $request->get('email'),
            'is_blocked' => $request->get('is_blocked')
        ];

        $query = Buyer::query();

        if ($filters['is_blocked'] && $filters['is_blocked'] != 'null') {
            $isBlocked = $filters['is_blocked'] == "true";
            $query = $query->where('is_blocked', $isBlocked);
        }
        if ($filters['name']) {
            $query = $query->where(DB::raw("concat(\"name\", ' ',\"surname\")"), 'like', "%{$filters['name']}%");
        }
        if ($filters['email']) {
            $query = $query->where('email', 'like', "%{$filters['email']}%");
        }
        if ($filters['phone_number']) {
            $query = $query->where('phone_number', 'like', "%{$filters['phone_number']}%");
        }
        $query = $query->paginate(20);

        $query->appends($request->except('page'));

        return view('buyers')->with('buyers', $query);
    }
}
