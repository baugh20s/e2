<?php

namespace App\Commands;

class AppCommand extends Command
{
    /**
     * 
     */
    public function test()
    {
        dump('It works! You invoked your first command.');
    }

    public function migrate()
    {
        $this->app->db()->createTable('products', [
            'name' => 'varchar(255)',
            'description' => 'text',
            'price' => 'decimal(10,2)',
            'available' => 'int',
            'weight' => 'decimal(10,2)',
            'perishable' => 'tinyint(1)'
        ]);
        
        $this->app->db()->createTable('reviews', [
            'name' => 'varchar(255)',
            'content' => 'text',
            'product_id' => 'int',
        ]);
        
        dump('Migration complete; check the database for your new tables.');
    }

    public function seed()
    {
        $products = new \App\Products($this->app->path('database/products.json'));
        
            foreach ($products->getAll() as $product) {
        
                # We're not tracking categories in our table
                unset($product['categories']);
        
                # Don't need ID - that will get automatically added
                unset($product['id']);
        
                # Convert perishable boolean to int
                $product['perishable'] = $product['perishable'] ? 1 : 0;
        
                # Insert product
                $this->app->db()->insert('products', $product);
            }
        
            # Display all products to confirm results
            dump($this->app->db()->all('products'));
    }

    public function fresh() {
        $this->migrate();
        $this->seed();
    }
}