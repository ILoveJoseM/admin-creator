<?php
/**
 * Created by PhpStorm.
 * User: chenyu
 * Date: 2018/12/4
 * Time: 17:32
 */

namespace JoseChan\AdminCreator\Extensions\Actions;

use Encore\Admin\Actions\RowAction;

/**
 * 生成控制器页面跳转按钮
 * Class DashBoardCreate
 * @package JoseChan\AdminCreator\Extensions\Actions
 */
class DashBoardCreate extends RowAction
{
    public $name = "生成控制器";

    /**
     * @return string
     */
    public function href()
    {
        return "/admin/dash/{$this->getKey()}/edit";
    }
}