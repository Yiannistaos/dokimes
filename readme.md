# Yiannis Christodoulou - Laravel Dokimes

This repo is just for my laravel tests.

# INSTALLATION
### STEP 1
`composer require yiannis/dokimes`

### STEP 2
Add the following to app/config/app.php

```
'providers' => [
    ...
    Yiannis\Dokimes\TestServiceProvider::class,  
    ...
]
```

and

```
'aliases' => [
    ...
    'SayHello' => Yiannis\Dokimes\SayHello::class,
    ...
]
```

### STEP 3
`php artisan vendor:publish --provider="Yiannis\Dokimes\TestServiceProvider"`

## HOW TO USE
```php
@php
    SayHello::world()
@endphp
```

## SUPPORT
Feel free to contact me at yiannis@web357.com if you have any questions or need any help with installation.