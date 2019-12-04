<?php

return [
    '/' => ['AppController', 'index'],
    '/products' => ['ProductController', 'index'],
    '/product' => ['ProductController', 'show'],
    '/products/save-review' => ['ProductController', 'saveReview'],
    '/about' => ['AboutController', 'index'],
    '/practice' => ['AppController', 'practice'],
    '/practice2' => ['AppController', 'practice2'],
    '/products/new' => ['ProductController', 'addProduct'],
    '/products/save-new' => ['ProductController', 'saveProduct'],
];
