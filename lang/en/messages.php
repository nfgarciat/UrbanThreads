<?php

return [
    'success' => [
        'product_created' => 'Product created successfully!',
        'product_updated' => 'Product updated successfully!',
        'product_disabled' => 'Product disabled successfully.',
        'product_enabled' => 'Product enabled successfully.',
        'user_updated' => 'User updated successfully!',
        'user_disabled' => 'User disabled successfully.',
        'user_enabled' => 'User enabled successfully.',
        'review_created' => 'Review created successfully.',
    ],

    'error' => [
        'insufficient_funds' => 'Insufficient funds. Your budget is $:budget, but the total cost is $:total',
        'stock_not_available' => 'There is not enough stock available for the selected product.',
        'purchase_failed' => 'An error occurred while processing your purchase. Please try again.',
    ],

    'review' => [
        'validation' => [
            'qualification_required' => 'The rating is required.',
            'qualification_integer' => 'The rating must be an integer.',
            'qualification_min' => 'The minimum rating is 1.',
            'qualification_max' => 'The maximum rating is 5.',
            'description_required' => 'The description is required.',
            'description_max' => 'The description cannot exceed 1000 characters.',
            'product_required' => 'The product is required.',
            'product_exists' => 'The selected product does not exist.',
        ],
    ],

    'welcome_user' => 'Welcome, :name',
];
