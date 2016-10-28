<?php
/**
 * Created by PhpStorm.
 * User: Iven.Wu
 * Date: 2016-10-28
 * Time: 11:15
 */

namespace tool_demo\output;

use plugin_renderer_base;

class renderer extends plugin_renderer_base
{
    public function render_index_page($page) {
        $data = $page->export_for_template($this);
        return parent::render_from_template('tool_demo/index_page', $data);
    }
}