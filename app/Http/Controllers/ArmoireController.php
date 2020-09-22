<?php

namespace App\Http\Controllers;

use App\Armoire;
use App\Cell;
use App\Folder;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;

class ArmoireController extends Controller
{
    public function create()
    {
        return view('armoire.form');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);
        Armoire::create($request->all());

        return redirect()->route('app/index');
    }

    public function edit($id)
    {
        $armoire = Armoire::find($id);
        $folders = Folder::getFolders();
        return view('armoire.edit',[
            'armoire' => $armoire,
        ]);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);
        $armoire = Armoire::find($id);
        $armoire->fill($request->all());
        $armoire->save();

        return redirect()->route('app.index');
    }

    public function view($id)
    {
        $armoire = Armoire::find($id);
        return view('armoire.view',[
            'armoire' => $armoire
        ]);
    }

    public function destroy($id)
    {
        Armoire::find($id)->delete();
        return redirect()->route('app/index');
    }
}
