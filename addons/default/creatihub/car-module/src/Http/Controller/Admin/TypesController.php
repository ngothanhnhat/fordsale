<?php namespace Creatihub\CarModule\Http\Controller\Admin;

use Creatihub\CarModule\Type\Form\TypeFormBuilder;
use Creatihub\CarModule\Type\Table\TypeTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class TypesController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param TypeTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(TypeTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param TypeFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(TypeFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param TypeFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(TypeFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
