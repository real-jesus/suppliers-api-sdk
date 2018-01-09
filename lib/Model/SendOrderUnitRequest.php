<?php
/**
 * SendOrderUnitRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  SMS\Suppliers
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Supplier API
 *
 * This documentation describes SMS Suppliers API. To be able use this API you should have an api-key and api-username
 *
 * OpenAPI spec version: 1.4.1
 * Contact: sms.tech@real-digital.de
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SMS\Suppliers\Model;

use \ArrayAccess;

/**
 * SendOrderUnitRequest Class Doc Comment
 *
 * @category    Class
 * @package     SMS\Suppliers
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SendOrderUnitRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SendOrderUnitRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'carrier' => 'string',
        'tracking_number' => 'string',
        'delivery_note_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'carrier' => null,
        'tracking_number' => null,
        'delivery_note_number' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'carrier' => 'carrier',
        'tracking_number' => 'tracking_number',
        'delivery_note_number' => 'delivery_note_number'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'carrier' => 'setCarrier',
        'tracking_number' => 'setTrackingNumber',
        'delivery_note_number' => 'setDeliveryNoteNumber'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'carrier' => 'getCarrier',
        'tracking_number' => 'getTrackingNumber',
        'delivery_note_number' => 'getDeliveryNoteNumber'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const CARRIER_BURSPRED = 'burspred';
    const CARRIER_CARGOLINE = 'cargoline';
    const CARRIER_COMPUTERUNIVERSE = 'computeruniverse';
    const CARRIER_DHL = 'dhl';
    const CARRIER_DHL_2_MH = 'dhl_2_mh';
    const CARRIER_DHL_EXPRESS = 'dhl_express';
    const CARRIER_DHL_FREIGHT = 'dhl_freight';
    const CARRIER_DTL = 'dtl';
    const CARRIER_DPD = 'dpd';
    const CARRIER_DELIVERY_TO_STORE = 'delivery_to_store';
    const CARRIER_DEUTSCHE_POST = 'deutsche_post';
    const CARRIER_DACHSER = 'dachser';
    const CARRIER_EMONS = 'emons';
    const CARRIER_FEDEX = 'fedex';
    const CARRIER_GLS = 'gls';
    const CARRIER_GEL = 'gel';
    const CARRIER_HERMES = 'hermes';
    const CARRIER_HERMES_2_MH = 'hermes_2_mh';
    const CARRIER_HELLMANN = 'hellmann';
    const CARRIER_IDS_LOGISTIK = 'ids_logistik';
    const CARRIER_ILOXX = 'iloxx';
    const CARRIER_KUEHNE_AND_NAGEL = 'kuehne_and_nagel';
    const CARRIER_RHENUS = 'rhenus';
    const CARRIER_OTHER = 'other';
    const CARRIER_OTHER_HAULER = 'other_hauler';
    const CARRIER_POST_ITALIANE = 'post_italiane';
    const CARRIER_SCHENKER = 'schenker';
    const CARRIER_SPEDITION_GUETTLER = 'spedition_guettler';
    const CARRIER_TNT = 'tnt';
    const CARRIER_TRANS_FM = 'trans_fm';
    const CARRIER_TRANS_O_FLEX = 'trans-o-flex';
    const CARRIER_UPS = 'ups';
    const CARRIER_ZUFALL = 'zufall';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getCarrierAllowableValues()
    {
        return [
            self::CARRIER_BURSPRED,
            self::CARRIER_CARGOLINE,
            self::CARRIER_COMPUTERUNIVERSE,
            self::CARRIER_DHL,
            self::CARRIER_DHL_2_MH,
            self::CARRIER_DHL_EXPRESS,
            self::CARRIER_DHL_FREIGHT,
            self::CARRIER_DTL,
            self::CARRIER_DPD,
            self::CARRIER_DELIVERY_TO_STORE,
            self::CARRIER_DEUTSCHE_POST,
            self::CARRIER_DACHSER,
            self::CARRIER_EMONS,
            self::CARRIER_FEDEX,
            self::CARRIER_GLS,
            self::CARRIER_GEL,
            self::CARRIER_HERMES,
            self::CARRIER_HERMES_2_MH,
            self::CARRIER_HELLMANN,
            self::CARRIER_IDS_LOGISTIK,
            self::CARRIER_ILOXX,
            self::CARRIER_KUEHNE_AND_NAGEL,
            self::CARRIER_RHENUS,
            self::CARRIER_OTHER,
            self::CARRIER_OTHER_HAULER,
            self::CARRIER_POST_ITALIANE,
            self::CARRIER_SCHENKER,
            self::CARRIER_SPEDITION_GUETTLER,
            self::CARRIER_TNT,
            self::CARRIER_TRANS_FM,
            self::CARRIER_TRANS_O_FLEX,
            self::CARRIER_UPS,
            self::CARRIER_ZUFALL,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['carrier'] = isset($data['carrier']) ? $data['carrier'] : null;
        $this->container['tracking_number'] = isset($data['tracking_number']) ? $data['tracking_number'] : null;
        $this->container['delivery_note_number'] = isset($data['delivery_note_number']) ? $data['delivery_note_number'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['carrier'] === null) {
            $invalid_properties[] = "'carrier' can't be null";
        }
        $allowed_values = $this->getCarrierAllowableValues();
        if (!in_array($this->container['carrier'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'carrier', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['carrier'] === null) {
            return false;
        }
        $allowed_values = $this->getCarrierAllowableValues();
        if (!in_array($this->container['carrier'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets carrier
     * @return string
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     * @param string $carrier
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $allowed_values = $this->getCarrierAllowableValues();
        if (!in_array($carrier, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'carrier', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['carrier'] = $carrier;

        return $this;
    }

    /**
     * Gets tracking_number
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     * @param string $tracking_number
     * @return $this
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets delivery_note_number
     * @return string
     */
    public function getDeliveryNoteNumber()
    {
        return $this->container['delivery_note_number'];
    }

    /**
     * Sets delivery_note_number
     * @param string $delivery_note_number
     * @return $this
     */
    public function setDeliveryNoteNumber($delivery_note_number)
    {
        $this->container['delivery_note_number'] = $delivery_note_number;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\SMS\Suppliers\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\SMS\Suppliers\ObjectSerializer::sanitizeForSerialization($this));
    }
}


