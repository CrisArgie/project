<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class DivisionsController extends Controller
{
    public function update()
    {


        switch (request()->action) {
            case 'submit':
                $this->validate(
                    request(),
                    [
                        'divisions_id' => ['required', 'filled'],
                    ]
                );
                // dd(request());

                Users::where('id', request()->id)->update([
                    'divisions_id' => request()->divisions_id,
                ]);

                return back()->with('success', 'Update Success.');
                break;
        }
    }
}
