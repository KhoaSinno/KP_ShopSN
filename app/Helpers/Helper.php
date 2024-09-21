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
                    <td>' . $menu->update_at . '</td>
                    <td>&nbsp;</td>
                </tr>
                ';

                unset($menus[$key]);

                $html .= self::menu($menus, $menu->id, $char .' --  ');
            }
        }
        return $html;
    }
}
