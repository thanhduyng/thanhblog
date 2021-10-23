<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuRequest;
use App\Models\Menu;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuManagementController extends Controller
{
    public function ListOfMenu()
    {
        $data = DB::table("menus")
            ->where('deleted_at', null)
            ->get();
        return view('admin.Menu.ListOfMenu', ["data" => $data]);
    }

    public function CreateMenu(Request $request)
    {
        $id = $request->id;
        if ($id > 0) {
            $data = Menu::find($id);
        } else {
            $data = new Menu();
        }
        return view('admin.Menu.CreateMenu', ["data" => $data]);
    }

    public function InsertMenu(MenuRequest $request)
    {
        $id = $request->id;
        if ($id > 0) {
            $data = Menu::find($id);
            $data->name = $request->name;
            $data->link = $request->link;
            $data->status = $request->status;
            $data->sort_desc = $request->sort_desc;
        } else {
            $data  = new Menu();
            $data->name = $request->name;
            $data->link = $request->link;
            $data->status = $request->status;
            $data->sort_desc = $request->sort_desc;
        }
        $data->save();
        return redirect()->route('ListOfMenu')->with('message', 'Lưu thành công');
    }

    public function DeleteMenu($id)
    {
        $data = DB::table('menus')->where('id', $id)->update(["deleted_at" => Carbon::now(), "updated_at" => Carbon::now()]);
        return redirect()->route('ListOfMenu')->with('message', 'Xóa thành công');
    }
}
