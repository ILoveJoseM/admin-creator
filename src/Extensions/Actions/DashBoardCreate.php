<?php
/**
 * Created by PhpStorm.
 * User: chenyu
 * Date: 2018/12/4
 * Time: 17:32
 */

namespace JoseChan\AdminCreator\Extensions\Actions;


use Encore\Admin\Admin;

class DashBoardCreate
{
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    protected function script()
    {
        return <<<SCRIPT

$('.grid-edit-row').on('click', function () {

    location.href = "/admin/dash/{$this->id}/edit";

});

SCRIPT;
    }

    protected function render()
    {
        Admin::script($this->script());

        return "<a class='btn btn-xs btn-success fa fa-plus grid-edit-row' data-id='{$this->id}'></a>";
    }

    public function __toString()
    {
        return $this->render();
    }
}