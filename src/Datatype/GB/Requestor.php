<?php

namespace Mtc\Dhl\Datatype\GB;

use Mtc\Dhl\Datatype\Base;

/**
 * Class Requestor
 *
 * @package Mtc\Dhl
 */
class Requestor extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = true;

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'AccountType' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Account type',
        ],
        'AccountNumber' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Account number',
        ],
        'RequestorContact' => [
            'type' => 'RequestorContact',
            'required' => false,
            'subobject' => true,
            'comment' => 'RequestorContact',
        ],
        'CompanyName' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Company Name',
        ],
        'Address1' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Company Name',
        ],
        'City' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Company Name',
        ],
        'CountryCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Company Name',
        ],
        'PostalCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Company Name',
        ],
    ];
}
