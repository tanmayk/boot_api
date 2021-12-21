<?php

/**
 * @file
 * Search Drink API.
 */

/**
 * Returns weight of module.
 */
function search_drink_weight() {
  return 1;
}

/**
 * Returns endpoint details.
 */
function search_drink_endpoint() {
  return [
    'name' => 'Search Cocktail',
    'type' => 'GET',
    'endpoint' => '/search',
    'description' => 'Search cocktail by name.',
  ];
}

/**
 * Returns expected request parameters.
 */
function search_drink_request() {
  return [
    's' => [
      'required' => TRUE,
      'description' => 'String. Name of the cocktail you wish to search for.',
    ],
  ];
}

/**
 * Returns expected response parameters.
 */
function search_drink_response() {
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
          [
            'drinkId' => 11118,
            'drink' => 'Blue Margarita',
            'tags' => NULL,
            'drinkCategory' => 'Cocktail',
            'isAlcoholic' => 'Alcoholic',
            'glassType' => 'Cocktail Glass',
            'drinkInstructions' => 'Rub rim of cocktail glass with lime juice. Dip rim in coarse salt. Shake tequila, blue curacao, and lime juice with ice, strain into the salt-rimmed glass, and serve',
            'drinkThumb' => 'https://cdn.pixabay.com/photo/2016/11/19/13/53/margarita-1839361_960_720.jpg',
            'drinkIngredients' => [
              [
                'name' => 'Tequila',
                'measure' => '1 1/2 oz',
              ],
              [
                'name' => 'Blue Curacao',
                'measure' => '1 oz',
              ],
              [
                'name' => 'Lime juice',
                'measure' => '1 oz',
              ],
              [
                'name' => 'Salt',
                'measure' => 'Coarse',
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
