<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewRequest;
use App\Models\ImageNew;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewManagementController extends Controller
{
    public function ListOfNew()
    {

        $data = DB::table("news")
            ->where('deleted_at', null)
            ->get();
            $imageNew = DB::table("image_news")
            ->get();

        return view('admin.New.ListOfNew', compact('imageNew','data'));
    }

    public function CreateNew(Request $request)
    {
        $data = new News();
        $newCategory = DB::table('new_categorys')->pluck('name', 'id');
        $imageNew = DB::table("image_news")->get();
        return view('admin.New.CreateNew', ["data" => $data, "newCategory" => $newCategory, "imageNew" => $imageNew]);
    }

    public function EditNew($id)
    {
        $data = News::find($id);
        $newCategory = DB::table('new_categorys')->pluck('name', 'id');
        $imageNew = DB::table("image_news")
            ->where('id_new', $id)
            ->get();
        return view('admin.New.UpdateNew', compact('newCategory', 'imageNew', 'data'));
    }
    public function UpdateNew(Request $request, $id)
    {
        $data = News::find($id);
        $data->id_category_new = $request->id_category_new;
        $data->name = $request->name;
        $data->description = $request->description;
        $data->address = $request->address;
        $data->go_date = $request->go_date;
        $data->status = $request->status;
        if ($request->hasFile('background_image')) {
            $file = $request->file('background_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('upload/newbg/', $filename);
            $data->background_image = $filename;
            $data->save();
        } else {
            echo "chưa có file";
        }
        $data->save();
        foreach ($request->filImage as $item) {
            if (isset($item)) {
                $extension = $item->getClientOriginalExtension();
                if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                    return redirect()->back()->with('error', 'Vui lòng chọn file hình ảnh');
                }
                $name = $item->getClientOriginalName();
                $image = str_random(4) . '_' . $name;
                while (file_exists('upload/news/' . $image)) {
                    $image = str_random(4) . '_' . $name;
                }
                $item->move('upload/news/', $image);

                $imageNew = new ImageNew();
                $imageNew->name_image = $image;
                $imageNew->id_new = $data->id;
                $imageNew->save();
            }
        }
        if (isset($request->chkDeleteImage)) {
            foreach ($request->chkDeleteImage as $item) {
                $imageNew = ImageNew::find($item);
                $imageNew->delete();
            }
        }
        return redirect()->route('ListOfNew')->with('message', 'Cập nhập thành công');
    }

    public function InsertNew(Request $request)
    {
        $data  = new News();
        $data->id_category_new = $request->id_category_new;
        $data->name = $request->name;
        $data->description = $request->description;
        $data->address = $request->address;
        $data->go_date = $request->go_date;
        $data->status = $request->status;
        if ($request->hasFile('background_image')) {
            $file = $request->file('background_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('upload/newbg/', $filename);
            $data->background_image = $filename;
            $data->save();
        } else {
            echo "chưa có file";
        }
        $data->save();

        foreach ($request->filImage as $item) {
            if (isset($item)) {
                $extension = $item->getClientOriginalExtension();
                if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                    return redirect()->back()->with('error', 'Vui lòng chọn file hình ảnh');
                }
                $name = $item->getClientOriginalName();
                $image = str_random(4) . '_' . $name;
                while (file_exists('upload/news/' . $image)) {
                    $image = str_random(4) . '_' . $name;
                }
                $item->move('upload/news/', $image);

                $imageNew = new ImageNew();
                $imageNew->name_image = $image;
                $imageNew->id_new = $data->id;
                $imageNew->save();
            }
        }
        return redirect()->route('ListOfNew')->with('message', 'Thêm mới thành công');
    }

    public function DeleteNew($id)
    {
        $data = DB::table('news')->where('id', $id)->update(["deleted_at" => Carbon::now(), "updated_at" => Carbon::now()]);
        return redirect()->route('ListOfNew')->with('message', 'Xóa thành công');
    }
}
