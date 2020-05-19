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
    Dokimes\Yiannis\TestServiceProvider::class,  
    ...
]
```

### STEP 3
`php artisan vendor:publish --provider="Dokimes\Yiannis\TestServiceProvider"`

## HOW TO USE
```php
@php
    Dokimes\SayHello::world()
@endphp
```

## SUPPORT
Feel free to contact me at yiannis@web357.com if you have any questions or need any help with installation.