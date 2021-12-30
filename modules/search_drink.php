<?php

/**
 * @file
 * Search Drink API.
 */

/**
 * Returns endpoint details.
 */
function search_drink_endpoint() {
  return [
    // Name of your API endpoint.
    'name' => 'Search Cocktail',
    // Type of API. It can be GET, POST, PUT, PATCH etc.
    'type' => 'GET',
    // API endpoint.
    'endpoint' => '/search',
    // Detailed description of your API.
    'description' => 'Search cocktail by name.',
  ];
}

/**
 * Returns expected request parameters.
 */
function search_drink_request() {
  return [
    // Name of the request parameter.
    's' => [
      // Specify if the parameter is required or not. You can skip this if
      // parameter is not required.
      'required' => TRUE,
      // Description of your parameter.
      'description' => 'String. Name of the cocktail you wish to search for.',
    ],
  ];
}

/**
 * Returns expected response parameters.
 */
function search_drink_response() {
  return [
    // HTTP code. 200 means OK.
    200 => [
      // All the responses that can be returned under 200 response.
      [
        // This array contains single response under 200 http code.
        'drinks' => [
          [
            'drinkId' => 11007,
            'drink' => 'Margarita',
            'tags' => [
              'IBA', 'Contemporary', 'Classic',
            ],
            'drinkCategory' => 'Cocktail',
            'isAlcoholic' => TRUE,
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
            'isAlcoholic' => TRUE,
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
      // You can add one more array of response under 200 http code.
    ],
    // HTTP code. 400 means Bad Request.
    400 => [
      // All the responses that can be returned under 400 response.
      [
        'status' => 'bool',
        'error' => 'string',
      ],
      // You can add one more array of response under 400 http code.
    ],
    // You can also include other HTTP codes & specify responses for each.
  ];
}
