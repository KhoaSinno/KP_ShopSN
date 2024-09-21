<?php

namespace App\Http\Services\Menu;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class MenuService
{
    public function create($request)
    {
        try {
            $active = $request->input('active') === 'on' ? 1 : 0;
            Menu::create([
                'name' => (string) $request->input('name'),
                'parent_id' => (int) $request->input('parent_id'),
                'description' => (string)  $request->input('description'),
                'content' => (string)  $request->input('content'),
                'active' => $active,
                // 'slug' =>  Str::slug($request->input('name'), '-'),
            ]);

            Session::flash('success', 'Added Menu successfully');
        } catch (\Exception $ex) {
            Session::flash('error', $ex->getMessage());
            return false;
        }
        return true;
    }

    public function getParent()
    {
        return Menu::where('parent_id', 0)->get();
    }
    
    public function getAll()
    {
        return Menu::orderByDesc('id')->paginate(20);
    }
}
