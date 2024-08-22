<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Vehiculo;

class VehiculoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Vehiculo';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Vehiculo());

        $grid->column('id', __('Id'));
        $grid->column('No_ECONOMICO', __('No ECONOMICO'));
        $grid->column('MARCA', __('MARCA'));
        $grid->column('TIPO', __('TIPO'));
        $grid->column('MODELO', __('MODELO'));
        $grid->column('PLACA', __('PLACA'));
        $grid->column('No_SERIE', __('No SERIE'));
        $grid->column('No_MOTOR', __('No MOTOR'));
        $grid->column('AREA_ASIGNACION', __('AREA ASIGNACION'));
        $grid->column('RESGUARDANTE', __('RESGUARDANTE'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Vehiculo::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('No_ECONOMICO', __('No ECONOMICO'));
        $show->field('MARCA', __('MARCA'));
        $show->field('TIPO', __('TIPO'));
        $show->field('MODELO', __('MODELO'));
        $show->field('PLACA', __('PLACA'));
        $show->field('No_SERIE', __('No SERIE'));
        $show->field('No_MOTOR', __('No MOTOR'));
        $show->field('AREA_ASIGNACION', __('AREA ASIGNACION'));
        $show->field('RESGUARDANTE', __('RESGUARDANTE'));
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
        $form = new Form(new Vehiculo());

        $form->text('No_ECONOMICO', __('No ECONOMICO'));
        $form->text('MARCA', __('MARCA'));
        $form->text('TIPO', __('TIPO'));
        $form->number('MODELO', __('MODELO'));
        $form->text('PLACA', __('PLACA'));
        $form->text('No_SERIE', __('No SERIE'));
        $form->text('No_MOTOR', __('No MOTOR'));
        $form->text('AREA_ASIGNACION', __('AREA ASIGNACION'));
        $form->text('RESGUARDANTE', __('RESGUARDANTE'));

        return $form;
    }
}
