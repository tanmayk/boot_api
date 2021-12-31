<?php

/**
 * @file
 * User Login API.
 */

/**
 * Returns endpoint details.
 */
function user_login_endpoint() {
  return [
    'name' => 'User Login',
    'type' => 'POST',
    'endpoint' => '/user/login',
    'description' => 'Logs user into the system.',
    'group' => 'users',
  ];
}

/**
 * Returns expected request parameters.
 */
function user_login_request() {
  return [
    'username' => [
      'required' => TRUE,
      'description' => 'String. The user name for the login.',
    ],
    'password' => [
      'required' => TRUE,
      'description' => 'String. The password for the login.',
    ],
  ];
}

/**
 * Returns expected response parameters.
 */
function user_login_response() {
  return [
    200 => [
      [
        'userId' => 232,
        'accessToken' => 'AABBCCDDEEFFGGHH',
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
