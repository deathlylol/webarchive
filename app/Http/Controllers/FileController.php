<?php

namespace App\Http\Controllers;

use App\File;
use App\Folder;
use DB;
use Illuminate\Http\Request;


class FileController extends Controller
{
    public function create()
    {
        $folders = Folder::getFolders();
        return view('file.form',[
            'folders' => $folders
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'file_name'=>'required',
            'folder_id'=>'required',
        ]);

        $path = $request->file('file_name')->store('uploads','public');
        $fileName = $request->file('file_name')->hashName();
        $extension = $request->file('file_name')->extension();


        File::create([
            'title' => $request->get('title').'.'.$extension,
            'file_name' => $fileName,
            'folder_id' => $request->get('folder_id')
        ]);

        return redirect()->route('app/index');
    }

    public function edit($id)
    {
        $file = File::find($id);
        $folders = Folder::getFolders();
        return view('file.edit',[
            'file' => $file,
            'folders' => $folders
        ]);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'title'=>'required',
            'file_name'=>'required',
            'folder_id'=>'required',
        ]);

        $path = $request->file('file_name')->store('uploads','public');
        $fileName = $request->file('file_name')->hashName();
        $extension = $request->file('file_name')->extension();

        $model = File::find($id);
        $model->title = $request->get('title').'.'.$extension;
        $model->file_name = $fileName;
        $model->folder_id = $request->get('folder_id');
        $model->save();

        return redirect()->route('app/index');
    }

    public function destroy($id)
    {
        File::find($id)->delete();
        return redirect()->back();
    }

}
