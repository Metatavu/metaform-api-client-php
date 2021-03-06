<?php
/**
 * MetaformFieldType
 *
 * PHP version 5
 *
 * @category Class
 * @package  Metatavu\Metaform
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Metaform REST API
 *
 * REST API for Metaform
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Metatavu\Metaform\Api\Model;
use \Metatavu\Metaform\ObjectSerializer;

/**
 * MetaformFieldType Class Doc Comment
 *
 * @category Class
 * @package  Metatavu\Metaform
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MetaformFieldType
{
    /**
     * Possible values of this enum
     */
    const TEXT = 'text';
    const HIDDEN = 'hidden';
    const EMAIL = 'email';
    const NUMBER = 'number';
    const MEMO = 'memo';
    const BOOLEAN = 'boolean';
    const RADIO = 'radio';
    const CHECKLIST = 'checklist';
    const DATE = 'date';
    const TIME = 'time';
    const DATE_TIME = 'date-time';
    const FILES = 'files';
    const TABLE = 'table';
    const LOGO = 'logo';
    const SMALL_TEXT = 'small-text';
    const HTML = 'html';
    const SUBMIT = 'submit';
    const SELECT = 'select';
    const AUTOCOMPLETE = 'autocomplete';
    const AUTOCOMPLETE_MULTIPLE = 'autocomplete-multiple';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TEXT,
            self::HIDDEN,
            self::EMAIL,
            self::NUMBER,
            self::MEMO,
            self::BOOLEAN,
            self::RADIO,
            self::CHECKLIST,
            self::DATE,
            self::TIME,
            self::DATE_TIME,
            self::FILES,
            self::TABLE,
            self::LOGO,
            self::SMALL_TEXT,
            self::HTML,
            self::SUBMIT,
            self::SELECT,
            self::AUTOCOMPLETE,
            self::AUTOCOMPLETE_MULTIPLE,
        ];
    }
}


