<?php

/**
 * @file
 * Random Drink API.
 */

/**
 * Returns weight of module.
 */
function random_drink_weight() {
  return 2;
}

/**
 * Returns endpoint details.
 */
function random_drink_endpoint() {
  return [
    'name' => 'Random Cocktail',
    'type' => 'GET',
    'endpoint' => '/random',
    'description' => 'Lookup a random cocktail.',
  ];
}

/**
 * Returns expected request parameters.
 */
function random_drink_request() {
  return [];
}

/**
 * Returns expected response parameters.
 */
function random_drink_response() {
  return [
    200 => [
      [
        'drinks' => [
          [
            'drinkId' => 11007,
            'drink' => 'Margarita',
            'tags' => [
              'IBA', 'Contemporary', 'Classic',
            ],
            'drinkCategory' => 'Cocktail',
            'isAlcoholic' => 'Alcoholic',
            'glassType' => 'Cocktail Glass',
            'drinkInstructions' => 'Rub the rim of the glass with the lime slice to make the salt stick to it. Take care to moisten only the outer rim and sprinkle the salt on it. The salt should present to the lips of the imbiber and never mix into the cocktail. Shake the other ingredients with ice, then carefully pour into the glass.',
            'drinkThumb' => 'https://cdn.pixabay.com/photo/2016/07/05/22/38/margarita-1499498_960_720.jpg',
            'drinkIngredients' => [
              [
                'name' => 'Tequila',
                'measure' => '1 1/2 oz',
              ],
              [
                'name' => 'Triple sec',
                'measure' => '1/2 oz',
              ],
              [
                'name' => 'Lime juice',
                'measure' => '1 oz',
              ],
              [
                'name' => 'Salt',
                'measure' => NULL,
              ],
            ],
          ],
        ],
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
