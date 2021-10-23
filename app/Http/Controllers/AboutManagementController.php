<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Models\About;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutManagementController extends Controller
{
    public function ListOfAbout()
    {
        $data = DB::table("abouts")
        ->where('deleted_at',null)
        ->get();
        return view('admin.About.ListOfAbout', ["data" => $data]);
    }

    public function CreateAbout (Request $request)
    {
        $id = $request->id;
        if ($id > 0) {
            $data = About::find($id);
        } else {
            $data = new About();
        }
        return view('admin.About.CreateAbout', ["data" =>$data]);
    }

    public function InsertAbout(AboutRequest $request)
    {
        $id = $request->id;
        if ($id > 0) {
            $data = About::find($id);
            $data->title = $request->title;
            $data->description = $request->description;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('upload/abouts/', $filename);
                $data->image = $filename;
                $data->save();
            } else {
                echo "chưa có file";
            }
            $data->save();
        } else {
            $data  = new About();
            $data->title = $request->title;
            $data->description = $request->description;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('upload/abouts/', $filename);
                $data->image = $filename;
                $data->save();  
            } else {
                echo "chưa có file";
            }
          }
        return redirect()->route('ListOfAbout')->with('message','Lưu thành công');
    }

    public function DeleteAbout($id)
    {
        $data = DB::table('abouts')->where('id', $id)->update(["deleted_at" => Carbon::now(), "updated_at" => Carbon::now()]);
        return redirect()->route('ListOfAbout')->with('message','Xóa thành công');
    }
}
