<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;
use App\Models\Product;

class AdminController extends Controller
{
    public function admin(){
        $works = Work::all();
        $products = Product::all();
        return view('admin.admin',compact('works','products'));
    }

    public function workCreate(){
        return view('admin.workCreate');
    }

    public function workStore(Request $request){
        $inputs = $request->validate([
            'title' => 'required',
            'url' => 'required',
            'body' => 'required',
            'eyecatch' => 'required|max:1024',
        ]);

        $work = new Work();
        $work->title = $inputs['title'];
        $work->url = $inputs['url'];
        $work->slug = $work->url;
        $work->body = $inputs['body'];
        $original = $request->file('eyecatch')->getClientOriginalName();
        $name = date('Ymd_His').'_'.$original;
        $request->file('eyecatch')->move('storage/images',$name);
        $work->eyecatch = $name;
        $work->save();
        return back()->with('message','制作実績の投稿が完了しました');
    }

    public function uploadImage(Request $request){
        $result = $request->file('image')->isValid();
        if($result){
            $original = request()->file('image')->getClientOriginalName();
            $name = $original.'_'.date('Ymd_His');
            request()->file('image')->move('workImage',$name);
            echo '/workImage/'.$name;
        }
    }

    public function workImageEdit(Request $request){
        $result = $request->file('image')->isValid();
        if($result){
            $original = request()->file('image')->getClientOriginalName();
            $name = $original.'_'.date('Ymd_His');
            request()->file('image')->move('workImage',$name);
            echo '/workImage/'.$name;
        }
    }

    public function workDelete($id){
        Work::destroy($id);
        return back();
    }

    public function index(){
        $works = Work::all();
        $products = Product::all();
        return view('admin.index',compact('works','products'));
    }

    public function workShow(Work $work){
        return view('admin.workShow',compact('work'));
    }

    public function workEdit(Work $work){
        return view('admin.workEdit',compact('work'));
    }

    public function workUpdate(Request $request,Work $work){
        $inputs = $request->validate([
            'title' => 'required',
            'url' => 'required',
            'body' => 'required',
        ]);

        $work->title = $inputs['title'];
        $work->url = $inputs['url'];
        $work->slug = $work->url;
        $work->body = $inputs['body'];
        if($request->eyecatch){
            $original = $request->file('eyecatch')->getClientOriginalName();
            $name = date('Ymd_His').'_'.$original;
            $request->file('eyecatch')->move('storage/images',$name);
            $work->eyecatch = $name;
        }
        $work->save();
        return back()->with('message','制作実績の更新が完了しました');
    }

    public function productImage(Request $request){
        $result = $request->file('image')->isValid();
        if($result){
            $original = request()->file('image')->getClientOriginalName();
            $name = $original.'_'.date('Ymd_His');
            request()->file('image')->move('productImage',$name);
            echo '/productImage/'.$name;
        }
    }
    public function productImageEdit(Request $request){
        $result = $request->file('image')->isValid();
        if($result){
            $original = request()->file('image')->getClientOriginalName();
            $name = $original.'_'.date('Ymd_His');
            request()->file('image')->move('productImage',$name);
            echo '/productImage/'.$name;
        }
    }
    
    public function productCreate(){
        return view('admin.productCreate');
    }
    
    public function productStore(Request $request){
        $inputs = $request->validate([
            'title' => 'required',
            'url' => 'required',
            'body' => 'required',
            'eyecatch' => 'required|max:1024',
        ]);
        $product = new Product();
        $product->title = $inputs['title'];
        $product->url = $inputs['url'];
        $product->slug = $product->url;
        $product->body = $inputs['body'];
        $original = $request->file('eyecatch')->getClientOriginalName();
        $name = date('Ymd_His').'_'.$original;
        $request->file('eyecatch')->move('storage/images',$name);
        $product->eyecatch = $name;
        $product->save();
        return back()->with('message','自主制作の投稿が完了しました');
    }

    public function productDelete($id){
        product::destroy($id);
        return back();
    }

    public function productShow(Product $product){
        return view('admin.productShow',compact('product'));
    }

    public function productEdit(Product $product){
        return view('admin.productEdit',compact('product'));
    }

    public function productUpdate(Request $request,Product $product){
        $inputs = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $product->title = $request->title;
        $product->body = $request->body;
        if($request->eyecatch){
            $original = $request->file('eyecatch')->getClientOriginalName();
            $name = date('Ymd_His').'_'.$original;
            $request->file('eyecatch')->move('storage/images',$name);
            $product->eyecatch = $name;
        }
        $product->save();
        return back()->with('message','自主制作の更新が完了しました');
    }
}
