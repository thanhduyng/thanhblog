<?php

namespace App\Http\Controllers;

use App\Http\Requests\SlideRequest;
use App\Models\Slide;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SlideManagementController extends Controller
{
    public function ListOfSlide()
    {
        $data = DB::table("slides")
        ->where('deleted_at',null)
        ->get();
        return view('admin.Slide.ListOfSlide', ["data" => $data]);
    }

    public function CreateSlide (Request $request)
    {
        $id = $request->id;
        if ($id > 0) {
            $data = Slide::find($id);
        } else {
            $data = new slide();
        }
        return view('admin.Slide.CreateSlide', ["data" =>$data]);
    }

    public function InsertSlide(SlideRequest $request)
    {
        $id = $request->id;
        if ($id > 0) {
            $data = slide::find($id);
            $data->name = $request->name;
            $data->sort_desc = $request->sort_desc;
            $data->status = $request->status;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('upload/slides/', $filename);
                $data->image = $filename;
                $data->save();
            } else {
                echo "chưa có file";
            }
            $data->save();
        } else {
            $data  = new slide();
            $data->name = $request->name;
            $data->sort_desc = $request->sort_desc;
            $data->status = $request->status;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('upload/slides/', $filename);
                $data->image = $filename;
                $data->save();  
            } else {
                echo "chưa có file";
            }
          }
        return redirect()->route('ListOfSlide')->with('message','Lưu thành công');
    }

    public function DeleteSlide($id)
    {
        $data = DB::table('slides')->where('id', $id)->update(["deleted_at" => Carbon::now(), "updated_at" => Carbon::now()]);
        return redirect()->route('ListOfSlide')->with('message','Xóa thành công');
    }
}
