<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Menu;
use App\Models\NewCategory;
use App\Models\Slide;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;

class PageHomeController extends Controller
{
    function home()
    {
        $slide = Slide::all();
        $aboutMe = About::all();
        $newCategory = DB::table('new_categorys')->orderBy('created_at', 'asc')->get()->take(9);
        $new = DB::table('news')->orderBy('created_at', 'DESC')->get()->take(6);
        return view('home.index', compact('slide', 'aboutMe', 'newCategory', 'new'));
    }

    public function allPostNew()
    {
        $aboutMe = About::all();
        $allNewPost = DB::table('news as n')
            ->join('new_categorys as nc', 'nc.id', '=', 'n.id_category_new')
            ->select('n.id_category_new', 'nc.name as namecategory', 'n.name', 'n.background_image', 'n.created_at')
            ->orderBy('created_at', 'DESC')
            ->get();
        // dd($allNewPost);
        return view('home.demo', compact('aboutMe', 'allNewPost'));
    }

    public function allNewCategory($id)
    {
        $aboutMe = About::all();
        $category = DB::table('news as n')
            ->join('new_categorys as nc', 'nc.id', '=', 'n.id_category_new')
            ->where('n.id_category_new', $id)
            ->select('n.id_category_new', 'nc.name as namecategory', 'n.name', 'n.background_image', 'n.created_at')
            ->orderBy('created_at', 'DESC')
            ->get();
        if (count($category) < 1) {
            return redirect('/');
        } else {
            return view('home.allNewCategory', compact('category', 'aboutMe'));
        }
    }
}
