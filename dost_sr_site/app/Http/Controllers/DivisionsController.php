<?php

namespace App\Http\Controllers;

use App\Models\Divisions;
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

                Users::where('id', request()->id)->update([
                    'divisions_id' => request()->divisions_id,
                ]);

                return back()->with('success', 'Update Success.');
                break;
        }
    }

    public function destroy()
    {
        switch (request()->action) {
            case 'delete_division':
                $div = Divisions::findOrFail(request()->divisions_id);

                $validate = $div->delete();

                if ($validate) {
                    $userDiv = Users::where('divisions_id', request()->divisions_id)->get();
                    if ($userDiv->isEmpty()) {
                    } else {
                        foreach ($userDiv as $item) {
                            $item->update([
                                'divisions_id' => null,
                            ]);
                        }
                    }
                    return back()->with('success', 'Deletion Success of ' . request()->divisions_id . '.');
                } else {
                    return back()->with('fail', 'Deletion fail.');
                }

                break;
        }
    }
}
