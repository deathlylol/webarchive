<?php

namespace App\Http\Controllers;

use App\Cell;
use App\File;
use App\Folder;
use DB;
use Illuminate\Http\Request;

class FolderController extends Controller
{
    public function create()
    {
        $cells = Cell::getCell();
        return view('folder.form',[
            'cells' => $cells,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'cell_id'=>'required',
        ]);
        Folder::create($request->all());

        return redirect()->route('app/index');
    }

    public function edit($id)
    {
        $folder = Folder::find($id);
        $cells = Cell::getCell();
        return view('folder.edit',[
            'folder' => $folder,
            'cells' => $cells
        ]);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required',
            'cell_id' => 'required',
        ]);
        $folder = Folder::find($id);
        $folder->fill($request->all());
        $folder->save();

        return redirect()->route('app/index');
    }

    public function view($id)
    {
        $folder = Folder::find($id);
        return view('folder.view',[
            'folder' => $folder,
        ]);
    }

    public function search(Request $request)
    {
        $search = $request->get('folder');
        if(!empty($search))
        {
            $files = DB::table('folder')
                ->join('cell', 'cell.id', '=', 'folder.cell_id')
                ->join('armoire', 'armoire.id', '=', 'cell.armoire_id')
                ->select('folder.title as folder_title',
                    'armoire.title as armoire_title',
                    'cell.title as cell_title',
                    'folder.id as folder_id',
                    'armoire.id as armoire_id',
                    'cell.id as cell_id'
                )
                ->where('folder.title', 'like','%'. $search.'%')
                ->get();
            return view('folder.search',[
                'files' => $files,
                'search' => $search
            ]);
        }else{
            return redirect()->route('app/index');
        }

    }
}
