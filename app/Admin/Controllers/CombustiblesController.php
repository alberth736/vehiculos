<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Combustibles;

class CombustiblesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Combustibles';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Combustibles());

        $grid->column('id', __('Id'));
        $grid->column('No_ECONOMICO', __('No ECONOMICO'));
        $grid->column('PLACA', __('PLACA'));
        $grid->column('FECHA', __('FECHA'));
        $grid->column('IMPORTE', __('IMPORTE'));
        $grid->column('LITROS', __('LITROS'));

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
        $show = new Show(Combustibles::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('No_ECONOMICO', __('No ECONOMICO'));
        $show->field('PLACA', __('PLACA'));
        $show->field('FECHA', __('FECHA'));
        $show->field('IMPORTE', __('IMPORTE'));
        $show->field('LITROS', __('LITROS'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Combustibles());

        $form->text('No_ECONOMICO', __('No ECONOMICO'));
        $form->text('PLACA', __('PLACA'));
        $form->date('FECHA', __('FECHA'))->default(date('Y-m-d'));
        $form->decimal('IMPORTE', __('IMPORTE'));
        $form->decimal('LITROS', __('LITROS'));

        return $form;
    }
}
