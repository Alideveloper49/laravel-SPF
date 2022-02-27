# laravel-SPF

## Installation

> You can pull the package via composer 

```bash
$ composer require Alideveloper49/laravel-spf
```

## Next, You must publish the config file to define your FCM server key :

```bash
$ php artisan vendor:publish --provider="Alideveloper49\Fcm\FcmServiceProvider"
```

## This is the contents of the published file :

```bash
return [

    /**
     * Set your FCM Server Key
     * Change to yours
     */

    'server_key' => env('FCM_SERVER_KEY', ''),

];
```

## Set your FCM Server Key in .env file :

```bash
APP_NAME="Laravel"
# ...
FCM_SERVER_KEY=putYourKeyHere
```

## Usage
## If You want to send a FCM with just notification parameter, this is an example of usage sending a FCM with only data parameter :

```bash
$recipients = [
    'clKMv.......',
    'GxQQW.......',
];

fcm()
    ->to($recipients)
    ->priority('high')
    ->timeToLive(0)
    ->data([
        'title' => 'Test FCM',
        'body' => 'This is a test of FCM',
    ])
    ->send();
```
