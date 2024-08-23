<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Accesorio;

class AccesorioController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Accesorio';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Accesorio());

        $grid->column('id', __('Id'));
        $grid->column('No_ECONOMICO', __('No ECONOMICO'));
        $grid->column('PLACA', __('PLACA'));
        $grid->column('FECHA', __('FECHA'));
        $grid->column('DESCRIPCION', __('DESCRIPCION'));
        $grid->column('IMPORTE', __('IMPORTE'));

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
        $show = new Show(Accesorio::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('No_ECONOMICO', __('No ECONOMICO'));
        $show->field('PLACA', __('PLACA'));
        $show->field('FECHA', __('FECHA'));
        $show->field('DESCRIPCION', __('DESCRIPCION'));
        $show->field('IMPORTE', __('IMPORTE'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Accesorio());

        $form->text('No_ECONOMICO', __('No ECONOMICO'));
        $form->text('PLACA', __('PLACA'));
        $form->date('FECHA', __('FECHA'))->default(date('Y-m-d'));
        $form->textarea('DESCRIPCION', __('DESCRIPCION'));
        $form->decimal('IMPORTE', __('IMPORTE'));

        return $form;
    }
}
