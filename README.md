# metaform-api-client-php
REST API for Metaform

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 0.0.1
- Package version: 0.0.4
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/metatavu/metaform-api-client-php.git"
    }
  ],
  "require": {
    "metatavu/metaform-api-client-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/metaform-api-client-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
Metatavu\Metaform\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Metatavu\Metaform\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Metatavu\Metaform\Api\EmailNotificationsApi();
$realmId = "realmId_example"; // string | realm id
$metaformId = "metaformId_example"; // string | Metaform id
$payload = new \Metatavu\Metaform\Api\Model\EmailNotification(); // \Metatavu\Metaform\Api\Model\EmailNotification | Payload

try {
    $result = $api_instance->createEmailNotification($realmId, $metaformId, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailNotificationsApi->createEmailNotification: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*EmailNotificationsApi* | [**createEmailNotification**](docs/Api/EmailNotificationsApi.md#createemailnotification) | **POST** /realms/{realmId}/metaforms/{metaformId}/emailNotifications | create new form email notification
*EmailNotificationsApi* | [**deleteEmailNotification**](docs/Api/EmailNotificationsApi.md#deleteemailnotification) | **DELETE** /realms/{realmId}/metaforms/{metaformId}/emailNotifications/{emailNotificationId} | Deletes an email notification
*EmailNotificationsApi* | [**findEmailNotification**](docs/Api/EmailNotificationsApi.md#findemailnotification) | **GET** /realms/{realmId}/metaforms/{metaformId}/emailNotifications/{emailNotificationId} | Find a single emai notification
*EmailNotificationsApi* | [**listEmailNotifications**](docs/Api/EmailNotificationsApi.md#listemailnotifications) | **GET** /realms/{realmId}/metaforms/{metaformId}/emailNotifications | Lists form email notifications
*EmailNotificationsApi* | [**updateEmailNotification**](docs/Api/EmailNotificationsApi.md#updateemailnotification) | **PUT** /realms/{realmId}/metaforms/{metaformId}/emailNotifications/{emailNotificationId} | Updates email notification
*MetaformsApi* | [**createMetaform**](docs/Api/MetaformsApi.md#createmetaform) | **POST** /realms/{realmId}/metaforms | create new Metaform
*MetaformsApi* | [**deleteMetaform**](docs/Api/MetaformsApi.md#deletemetaform) | **DELETE** /realms/{realmId}/metaforms/{metaformId} | Deletes Metaform
*MetaformsApi* | [**findMetaform**](docs/Api/MetaformsApi.md#findmetaform) | **GET** /realms/{realmId}/metaforms/{metaformId} | Finds single Metaform
*MetaformsApi* | [**listMetaforms**](docs/Api/MetaformsApi.md#listmetaforms) | **GET** /realms/{realmId}/metaforms | Lists Metaforms
*MetaformsApi* | [**updateMetaform**](docs/Api/MetaformsApi.md#updatemetaform) | **PUT** /realms/{realmId}/metaforms/{metaformId} | Updates Metaform
*RepliesApi* | [**createReply**](docs/Api/RepliesApi.md#createreply) | **POST** /realms/{realmId}/metaforms/{metaformId}/replies | create new form reply
*RepliesApi* | [**deleteReply**](docs/Api/RepliesApi.md#deletereply) | **DELETE** /realms/{realmId}/metaforms/{metaformId}/replies/{replyId} | Deletes a reply
*RepliesApi* | [**export**](docs/Api/RepliesApi.md#export) | **GET** /realms/{realmId}/metaforms/{metaformId}/export | Exports metaform data
*RepliesApi* | [**findReply**](docs/Api/RepliesApi.md#findreply) | **GET** /realms/{realmId}/metaforms/{metaformId}/replies/{replyId} | Find a single reply
*RepliesApi* | [**listReplies**](docs/Api/RepliesApi.md#listreplies) | **GET** /realms/{realmId}/metaforms/{metaformId}/replies | Lists form replies
*RepliesApi* | [**updateReply**](docs/Api/RepliesApi.md#updatereply) | **PUT** /realms/{realmId}/metaforms/{metaformId}/replies/{replyId} | Updates reply


## Documentation For Models

 - [BadRequest](docs/Model/BadRequest.md)
 - [EmailNotification](docs/Model/EmailNotification.md)
 - [Forbidden](docs/Model/Forbidden.md)
 - [InternalServerError](docs/Model/InternalServerError.md)
 - [Metaform](docs/Model/Metaform.md)
 - [MetaformField](docs/Model/MetaformField.md)
 - [MetaformFieldFlags](docs/Model/MetaformFieldFlags.md)
 - [MetaformFieldOption](docs/Model/MetaformFieldOption.md)
 - [MetaformFieldType](docs/Model/MetaformFieldType.md)
 - [MetaformSection](docs/Model/MetaformSection.md)
 - [MetaformTableColumn](docs/Model/MetaformTableColumn.md)
 - [MetaformTableColumnType](docs/Model/MetaformTableColumnType.md)
 - [MetaformTableColumnValues](docs/Model/MetaformTableColumnValues.md)
 - [MetaformVisibleIf](docs/Model/MetaformVisibleIf.md)
 - [NotFound](docs/Model/NotFound.md)
 - [NotImplemented](docs/Model/NotImplemented.md)
 - [Reply](docs/Model/Reply.md)
 - [ReplyData](docs/Model/ReplyData.md)


## Documentation For Authorization


## bearer

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author




