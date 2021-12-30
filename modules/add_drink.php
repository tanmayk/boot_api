<?php

/**
 * @file
 * Add Drink API.
 */

/**
 * Returns endpoint details.
 */
function add_drink_endpoint() {
  return [
    'name' => 'Add Cocktail',
    'type' => 'POST',
    'endpoint' => '/add',
    'description' => 'Add new cocktail.',
  ];
}

/**
 * Returns expected request parameters.
 */
function add_drink_request() {
  return [
    'drink' => [
      'required' => TRUE,
      'description' => 'String. Name of the drink to be added.',
    ],
    'tags' => [
      'description' => 'Array. An array of tags.',
    ],
    'drinkCategory' => [
      'required' => TRUE,
      'description' => 'String. Name of the category to which the drink belongs.',
    ],
    'isAlcoholic' => [
      'description' => 'Boolean. Indicates if the drink is alcoholic. Defaults to false.',
    ],
    'glassType' => [
      'description' => 'String. Type of the glass to use to serve the drink.',
    ],
    'drinkInstructions' => [
      'description' => 'String. Instructions to prepare & serve the drink.',
    ],
    'drinkThumb' => [
      'description' => 'String. A URL of thumbnail image of the drink.',
    ],
    'drinkIngredients' => [
      'description' => 'Array. An array of ingredients used to prepare the drink.<ul><li><strong>name</strong> - Required. Name of the ingredient.</li><li><strong>measure</strong> - Required. Measure of the ingredient.</li></ul>',
    ],
  ];
}

/**
 * Returns expected response parameters.
 */
function add_drink_response() {
  return [
    200 => [
      [
        'drinkId' => 11118,
      ],
    ],
    400 => [
      [
        'status' => 'bool',
        'error' => 'string',
      ],
    ],
  ];
}
