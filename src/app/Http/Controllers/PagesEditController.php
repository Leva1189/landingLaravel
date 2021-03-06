<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesEditController extends Controller
{
    //
    public function execute(Page $page, Request $request)
    {
        //delete
        if ($request->isMethod('delete')){
            $page->delete();
            return redirect('admin')->with('status', 'Страница удалена');
        }

        if ($request->isMethod('post')){

            $input = $request->except('_token');

            $validator = Validator::make($input, [
                'name'=>'required|max:255',
                'alias'=>'required|max:255|unique:pages,alias,'.$input['id'],
                'text'=>'required'
            ]);

            if ($validator->fails()){
                return redirect()
                    ->route('pagesEdit', ['page'=>$input['id']])
                    ->withErrors($validator);
            }

            //download file
            if ($request->hasFile('images')){
                $file = $request->file('images');

                //download file in Direct
                //getClientOriginalName() - name file
                $file->move(public_path().'/assets/img',$file->getClientOriginalName());

                //read to db
                $input['images']=$file->getClientOriginalName();
            }
            else{
                $input['images'] = $input['old_images'];
            }

            unset($input['old_images']);

            $page->fill($input);

            if ($page->update()){
                return redirect('admin')->with('status', 'Страница обновлена');
            }

        }

        $old = $page->toArray();

        if (view()->exists('admin.pages_edit')){

            $data = [
                'title'=>'Редактирование страницы - '.$old['name'],
                'data'=>$old

            ];
            return view('admin.pages_edit', $data);
        }
    }
}
