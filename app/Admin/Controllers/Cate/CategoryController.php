<?php

namespace App\Admin\Controllers\Cate;

use App\Admin\Models\CategoryModel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '分类列表';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CategoryModel);

        $grid->column('id', __('ID'));
        $grid->column('cate_name', __('类别名称'));
        $grid->column('cate_id', __('类别id'));
        $grid->column('pid', __('上级分类ID'));
//        $grid->column('created_at', __('Created at'));
//        $grid->column('updated_at', __('Updated at'));

        $grid->actions(function ($actions) {

            // 没有`delete-image`权限的角色不显示删除按钮
            if (!Admin::user()->can('delete-image')) {
                $actions->disableDelete();
            }
        });

// 只有具有`view-title-column`权限的用户才能显示`title`这一列
        if (Admin::user()->can('view-title-column')) {
            $grid->column('title');
        }
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(CategoryModel::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('cate_name', __('Cate name'));
        $show->field('cate_id', __('Cate id'));
        $show->field('pid', __('Pid'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new CategoryModel);

        $form->text('cate_name', __('Cate name'));
        $form->number('cate_id', __('Cate id'));
        $form->number('pid', __('Pid'));

        return $form;
    }
}
