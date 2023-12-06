<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\NotesModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NotesController extends Controller
{
    //
    public function vue(){
        $datas = NotesModel::select()->get();

        return view('vue', ['datas' => $datas]);
    }
    public function create_notes(Request $request)
    {
            $url = '';

            if ($request->hasFile('user_img')) {
                if ($request->file('user_img')->isValid()) {
                    $extension = $request->user_img->extension();

                    if (!Storage::exists('public/image')) {
                        Storage::makeDirectory('public/image', 0775, true);
                    }

                    $date = Carbon::now()->format('YM');

                    if (!Storage::exists('public/image/' . $date)) {
                        Storage::makeDirectory('public/image/' . $date, 0775, true);
                    }

                    $name = mt_rand(100000000, 999999999999) . '.' . $extension;
                    $xyz = $request->user_img->storeAs('public/image/' . $date, $name);
                    $url = Storage::url('image/' . $date . '/' . $name);
                }
            }
        $adminNotification = (isset($request->admin_note)) ? 1 : '0';
        $userNotification = $request->has('user_note') ? 1 : '0';

        NotesModel::create([

            'date' => $request->date,
            'houres' => $request->houres,
            'minute' => $request->minute,
            'user_name' => $request->user_name,
            'user_phone' => $request->user_phone,
            'work_type' => $request->work_type,
            'user_img' => $url,
            'description' => $request->description,
            'user_id' => 1,
            'name'=>' ',
             'admin_note' => $adminNotification,
            'user_note'=>$userNotification

        ]);
        return redirect(route('vue'));


    }


//    public function getProducts()
//    {
//        $products = NotesModel::get(); // Retrieve all products
//
//
//
//
//        return response()->json(['products' => $products]);
//    }


    public function Note_update($id){

        $user=NotesModel::find($id);
        return view('vue_update',['user'=>$user]);

    }
    public function update_note(Request $request)
    {
        $id = $request->id;
        $data = NotesModel::find($id);
        if (!$data) {
            abort(404);
        }

        $url = $data->user_img;

        if ($request->hasFile('user_img') && $request->file('user_img')->isValid()) {
            $extension = $request->user_img->extension();

            if (!Storage::exists('public/image')) {
                Storage::makeDirectory('public/image', 0775, true);
            }

            $date = Carbon::now()->format('YM');

            if (!Storage::exists('public/image' . $date)) {
                Storage::makeDirectory('public/image' . $date, 0775, true);
            }

            $name = mt_rand(100000000, 999999999999) . '.' . $extension;
            $xyz = $request->user_img->storeAs('public/image' . $date, $name);
            $url = Storage::url('/image' . $date . '/' . $name);  // Added a slash here
        }

        $data->update([
            'houres' => $request->houres,
            'minute' => $request->minute,
            'date' => $request->date,
            'user_img' => $url,
            'user_name' => $request->user_name,
            'user_phone' => $request->user_phone,
            'work_type' => $request->work_type,
            'description' => $request->description,
            'user_id' => 1,
            'name' => '',
        ]);

        return redirect('/vue');
    }


    public function note_delete(Request $request){

        $id = $request->id;
        NotesModel::where('id',$id)->delete();
        return redirect('/vue');


    }
//    public function getid(Request $request)
//    {
//        $data = NotesModel::find($request->id);
//
//
//
//        return response()->json(['datas' => $data]);
//    }

}
