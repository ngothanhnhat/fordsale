<?php namespace Creatihub\CarModule\Http\Controller\Admin;

use Creatihub\CarModule\Category\Form\CategoryFormBuilder;
use Creatihub\CarModule\Category\Table\CategoryTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class CategoriesController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param CategoryTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(CategoryTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param CategoryFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(CategoryFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param CategoryFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(CategoryFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
