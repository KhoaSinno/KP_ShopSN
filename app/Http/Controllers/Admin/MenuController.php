<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\CreateFormRequest;
use App\Http\Services\Menu\MenuService;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    protected $menuService;

    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }

    public function create()
    {
        return view("admin.menu.add", [
            'title' => 'Add new menu',
            'menus' => $this->menuService->getParent(),
        ]);
    }
    public function store(CreateFormRequest $request)
    {
        $result = $this->menuService->create($request);

        return redirect()->back();
    }

    public function index()
    {
        return view("admin.menu.list", [
            'title' => 'List menu',
            'menus' => $this->menuService->getAll(),
        ]);
    }
    public function destroy(Request $request)
    {
        $result = $this->menuService->destroy($request);

        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Menu deleted successfully'
            ]);
        }
        return response()->json([
            'error' => true,
            'message' => 'Error from server 500!'
        ]);
    }
}
