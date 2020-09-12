<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ArticleRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ArticleCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ArticleCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CloneOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\BulkCloneOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\BulkDeleteOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Article::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/article');
        CRUD::setEntityNameStrings('article', 'articles');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('category_id');
        CRUD::column('title');
        CRUD::column('slug');
        CRUD::column('tags')->type('relationship');
        CRUD::column('content');
        CRUD::column('photo')->type('image');
        CRUD::column('status')->options([
            0 => 'Draft',
            1 => 'Published'
        ]);
        CRUD::column('date');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ArticleRequest::class);

        CRUD::field('category_id');
        CRUD::field('title')->size(6);
        CRUD::field('slug')->size(6);
        CRUD::field('content')->type('ckeditor');
        // CRUD::field('photo')->type('image');
        $this->crud->addField([
            'label' => "photo",
            'name' => "photo",
            'type' => 'image',
            'crop' => true, // set to true to allow cropping, false to disable
            'aspect_ratio' => 1, // ommit or set to 0 to allow any aspect ratio
            'disk'      => 'photo', // in case you need to show images from a different disk
            'prefix'    => 'uploads/images/photo/' // in case your db value is only the file name (no path), you can use this to prepend your path to the image src (in HTML), before it's shown to the user;
        ]);
        CRUD::addField([
            'name'=> 'status',
            'label'=> 'Status',
            'type'=> 'radio',
            'options'=> [
                0 => 'Draft',
                1 => 'Published'
            ]
            ]);
        // CRUD::field('status')->options([
        //     0 => 'Draft',
        //     1 => 'Published'
        // ]);;
        CRUD::field('date');
        CRUD::field('tags')->type('relationship');


        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
