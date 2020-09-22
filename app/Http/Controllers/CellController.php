<?php

namespace App\Http\Controllers;

use App\Armoire;
use App\Cell;
use App\Folder;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;

class CellController extends Controller
{
    public function create()
    {
        $bookcases = Armoire::getArmoire();
        return view('cell.form',[
            'bookcases' => $bookcases,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'armoire_id'=>'required',
        ]);
        Cell::create($request->all());

        return redirect()->route('app/index');
    }

    public function edit($id)
    {
        $bookcases = Armoire::getArmoire();
        $cell = Cell::find($id);
        return view('cell.edit',[
            'bookcases' => $bookcases,
            'cell' => $cell
        ]);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required',
            'armoire_id' => 'required',
        ]);
        $cell = Cell::find($id);
        $cell->fill($request->all());
        $cell->save();

        return redirect()->route('app/index');

    }

    public function view($id)
    {
        $cell = Cell::find($id);
        return view('cell.view',[
            'cell' => $cell
        ]);
    }

    public function destroy($id)
    {
        Cell::find($id)->delete();
        return redirect()->back();
    }
}
