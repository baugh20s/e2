<?php
namespace App\Controllers;

use App\Products;

class ProductController extends Controller
{
    private $products;

    public function __construct($app)
    {
        parent::__construct($app);        
    }

    public function index()
    {

        return $this->app->view('products.index', [
            'products' => $this->app->db()->all('products')
        ]);

    }

    public function show()
    {
        # Get the 'id' route paramter
        $id = $this->app->param('id');

        # If no id is present, send the user to the products page
        if (is_null($id)) {
            $this->app->redirect('/products');
        }

        # Load the product details
        $product = $this->app->db()->findById('products', $id);

        # If we couldn't find the product, return the "product missing" view
        if (is_null($product)) {
            return $this->app->view('products.missing', ['id' => $id]);
        }

        # Load the review details
        $reviews = $this->app->db()->findbyColumn('reviews', 'product_id', '=', $id);
        
        # If the suer submitted the review form, we'll have a confirmation name
        # that we'll pass to the view to show them a confirmation message
        $confirmationName = $this->app->old('confirmationName');        
        
        return $this->app->view('products.show', [
            'product' => $product,
            'reviews' => $reviews,
            'confirmationName' => $confirmationName,
        ]);

    }

    public function saveReview()
    {        
        # Validation
        $this->app->validate([
            'name' => 'required',
            'content' => 'required|<minLength:5></minLength:5>0',
        ]);

        # Extract data from the form submission
        $name = $this->app->input('name');
        $content = $this->app->input('content');
        $id = $this->app->input('id');

        # Persist the review to the database    
        $data = [
            'name' => $name,
            'content' => $content,
            'product_id' => $id,
        ];
        
        $this->app->db()->insert('reviews', $data);

        # Send the user back to the product page with a `confirmationName`
        # we'll use to display a confirmation message.
        $this->app->redirect('/product?id='.$id, ['confirmationName' => $name]);
    }

    public function saveNew()
    {
        # Validation
        $this->app->validate([
            'name' => 'required',
            'newProduct' => 'required|minLength:5',
        ]);

        # Extract data from the form submission
        $name = $this->app->input('name');
        $newProduct = $this->app->input('newProduct');
        $id = $this->app->input('id');

        # TODO: Persist the review to the database

        # Send the user back to the product page with a `confirmationName`
        # we'll use to display a confirmation message.
        $this->app->redirect('/product?id='.$id, ['confirmationName' => $name]);
    }
}