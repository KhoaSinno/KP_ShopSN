<?php

namespace App\Helpers;

class Helper
{

    public static function menu($menus, $parent_id = 0, $char = '')
    {
        $html = '';

        foreach ($menus as $key => $menu) {
            if ($parent_id == $menu->parent_id) {
                $html .= '
                <tr>
                    <td>' . $menu->id . '</td>
                    <td>' . $char . $menu->name . '</td>
                    <td>' . $menu->active . '</td>
                    <td>' . $menu->updated_at . '</td>
                    <td class="d-flex justify-content-end">
                        <a class="btn btn-warning btn-sm mr-2" href="admin/menus/edit/' . $menu->id . '"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a class="btn btn-danger btn-sm  mr-2" onclick="removeRow(' . $menu->id . ',  \'/admin/menus/destroy\')" href="#" ><i class="fa-solid fa-trash"></i></a>
                </td>
                </tr>
                ';

                unset($menus[$key]);

                $html .= self::menu($menus, $menu->id, $char . ' --  ');
            }
        }
        return $html;
    }
}
