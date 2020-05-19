# Yiannis Christodoulou - Laravel Dokimes

This repo is just for my laravel tests.

# INSTALLATION
### STEP 1
`composer require yiannis/dokimes`

### STEP 2
Edit config\app.php and add the below line in the providers.

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