<?php namespace Creatihub\CarModule\Http\Controller\Admin;

use Creatihub\CarModule\Car\Form\CarFormBuilder;
use Creatihub\CarModule\Car\Table\CarTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class CarsController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param CarTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(CarTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param CarFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(CarFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param CarFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(CarFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
