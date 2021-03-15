# env-token-auth
[![Latest Version on Packagist](https://img.shields.io/packagist/v/mark-domkan/env-token-auth.svg?style=flat-square)](https://packagist.org/packages/mark-domkan/env-token-auth)
[![Total Downloads](https://img.shields.io/packagist/dt/mark-domkan/env-token-auth.svg?style=flat-square)](https://packagist.org/packages/mark-domkan/env-token-auth)

Adds the ability to use token saved in env for the auth:api middleware.


## Install
1. Install the package with composer:
    ```bash
    composer require markdomkan/env-token-auth
    ```

2. Set the api guard driver to `env-token` in the file `config/auth.php`:
    ```php    
    'guards' => [
        // ...
    
        'api' => [
            'driver'   => 'env-token', // <- Change this FROM token TO env-token
            
            // ...
        ],
    ],
    ```

## Usage

1. Add `AUTH_TOKEN` in .env file. 

2. Make a call with Authorization header with token *(without Bearer)*.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
