<?php
/**
 * Order
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Flora@Home API
 *
 * Flora@Home enables any web shop to sell a range of fresh flowers and plants. Completely integrated into your own web shop. Our REST API allows you to request your own assortment. The API makes a two-way traffic between applications and webshops possible.
 *
 * OpenAPI spec version: 1.1.0
 * Contact: api_support@floraathome.nl
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Order Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Order implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Order';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'reference_webshop' => 'string',
        'reference_customer' => 'string',
        'companyname' => 'string',
        'department' => 'string',
        'firstname' => 'string',
        'lastname' => 'string',
        'street' => 'string',
        'building_name' => 'string',
        'floor' => 'string',
        'housenumber' => 'string',
        'housenumber_addition' => 'string',
        'postalcode' => 'string',
        'city' => 'string',
        'district' => 'string',
        'region' => 'string',
        'country' => 'string',
        'doorcode' => 'string',
        'remark' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'orderlines' => '\Swagger\Client\Model\Orderline[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'reference_webshop' => null,
        'reference_customer' => null,
        'companyname' => null,
        'department' => null,
        'firstname' => null,
        'lastname' => null,
        'street' => null,
        'building_name' => null,
        'floor' => null,
        'housenumber' => null,
        'housenumber_addition' => null,
        'postalcode' => null,
        'city' => null,
        'district' => null,
        'region' => null,
        'country' => null,
        'doorcode' => null,
        'remark' => null,
        'phone' => null,
        'email' => null,
        'orderlines' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'reference_webshop' => 'referenceWebshop',
        'reference_customer' => 'referenceCustomer',
        'companyname' => 'companyname',
        'department' => 'department',
        'firstname' => 'firstname',
        'lastname' => 'lastname',
        'street' => 'street',
        'building_name' => 'buildingName',
        'floor' => 'floor',
        'housenumber' => 'housenumber',
        'housenumber_addition' => 'housenumberAddition',
        'postalcode' => 'postalcode',
        'city' => 'city',
        'district' => 'district',
        'region' => 'region',
        'country' => 'country',
        'doorcode' => 'doorcode',
        'remark' => 'remark',
        'phone' => 'phone',
        'email' => 'email',
        'orderlines' => 'orderlines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reference_webshop' => 'setReferenceWebshop',
        'reference_customer' => 'setReferenceCustomer',
        'companyname' => 'setCompanyname',
        'department' => 'setDepartment',
        'firstname' => 'setFirstname',
        'lastname' => 'setLastname',
        'street' => 'setStreet',
        'building_name' => 'setBuildingName',
        'floor' => 'setFloor',
        'housenumber' => 'setHousenumber',
        'housenumber_addition' => 'setHousenumberAddition',
        'postalcode' => 'setPostalcode',
        'city' => 'setCity',
        'district' => 'setDistrict',
        'region' => 'setRegion',
        'country' => 'setCountry',
        'doorcode' => 'setDoorcode',
        'remark' => 'setRemark',
        'phone' => 'setPhone',
        'email' => 'setEmail',
        'orderlines' => 'setOrderlines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reference_webshop' => 'getReferenceWebshop',
        'reference_customer' => 'getReferenceCustomer',
        'companyname' => 'getCompanyname',
        'department' => 'getDepartment',
        'firstname' => 'getFirstname',
        'lastname' => 'getLastname',
        'street' => 'getStreet',
        'building_name' => 'getBuildingName',
        'floor' => 'getFloor',
        'housenumber' => 'getHousenumber',
        'housenumber_addition' => 'getHousenumberAddition',
        'postalcode' => 'getPostalcode',
        'city' => 'getCity',
        'district' => 'getDistrict',
        'region' => 'getRegion',
        'country' => 'getCountry',
        'doorcode' => 'getDoorcode',
        'remark' => 'getRemark',
        'phone' => 'getPhone',
        'email' => 'getEmail',
        'orderlines' => 'getOrderlines'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['reference_webshop'] = isset($data['reference_webshop']) ? $data['reference_webshop'] : null;
        $this->container['reference_customer'] = isset($data['reference_customer']) ? $data['reference_customer'] : null;
        $this->container['companyname'] = isset($data['companyname']) ? $data['companyname'] : null;
        $this->container['department'] = isset($data['department']) ? $data['department'] : null;
        $this->container['firstname'] = isset($data['firstname']) ? $data['firstname'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['building_name'] = isset($data['building_name']) ? $data['building_name'] : null;
        $this->container['floor'] = isset($data['floor']) ? $data['floor'] : null;
        $this->container['housenumber'] = isset($data['housenumber']) ? $data['housenumber'] : null;
        $this->container['housenumber_addition'] = isset($data['housenumber_addition']) ? $data['housenumber_addition'] : null;
        $this->container['postalcode'] = isset($data['postalcode']) ? $data['postalcode'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['district'] = isset($data['district']) ? $data['district'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['doorcode'] = isset($data['doorcode']) ? $data['doorcode'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['orderlines'] = isset($data['orderlines']) ? $data['orderlines'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['companyname']) && (strlen($this->container['companyname']) > 35)) {
            $invalidProperties[] = "invalid value for 'companyname', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['department']) && (strlen($this->container['department']) > 35)) {
            $invalidProperties[] = "invalid value for 'department', the character length must be smaller than or equal to 35.";
        }

        if ($this->container['firstname'] === null) {
            $invalidProperties[] = "'firstname' can't be null";
        }
        if ((strlen($this->container['firstname']) > 35)) {
            $invalidProperties[] = "invalid value for 'firstname', the character length must be smaller than or equal to 35.";
        }

        if ($this->container['lastname'] === null) {
            $invalidProperties[] = "'lastname' can't be null";
        }
        if ((strlen($this->container['lastname']) > 35)) {
            $invalidProperties[] = "invalid value for 'lastname', the character length must be smaller than or equal to 35.";
        }

        if ($this->container['street'] === null) {
            $invalidProperties[] = "'street' can't be null";
        }
        if ((strlen($this->container['street']) > 95)) {
            $invalidProperties[] = "invalid value for 'street', the character length must be smaller than or equal to 95.";
        }

        if (!is_null($this->container['building_name']) && (strlen($this->container['building_name']) > 35)) {
            $invalidProperties[] = "invalid value for 'building_name', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['floor']) && (strlen($this->container['floor']) > 35)) {
            $invalidProperties[] = "invalid value for 'floor', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['housenumber']) && (strlen($this->container['housenumber']) > 35)) {
            $invalidProperties[] = "invalid value for 'housenumber', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['housenumber_addition']) && (strlen($this->container['housenumber_addition']) > 35)) {
            $invalidProperties[] = "invalid value for 'housenumber_addition', the character length must be smaller than or equal to 35.";
        }

        if ($this->container['postalcode'] === null) {
            $invalidProperties[] = "'postalcode' can't be null";
        }
        if ((strlen($this->container['postalcode']) > 19)) {
            $invalidProperties[] = "invalid value for 'postalcode', the character length must be smaller than or equal to 19.";
        }

        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ((strlen($this->container['city']) > 35)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['district']) && (strlen($this->container['district']) > 35)) {
            $invalidProperties[] = "invalid value for 'district', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['region']) && (strlen($this->container['region']) > 35)) {
            $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 35.";
        }

        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ((strlen($this->container['country']) > 2)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 2.";
        }

        if ((strlen($this->container['country']) < 2)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be bigger than or equal to 2.";
        }

        if (!preg_match("/[A-Z]{2}/", $this->container['country'])) {
            $invalidProperties[] = "invalid value for 'country', must be conform to the pattern /[A-Z]{2}/.";
        }

        if (!is_null($this->container['doorcode']) && (strlen($this->container['doorcode']) > 35)) {
            $invalidProperties[] = "invalid value for 'doorcode', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['remark']) && (strlen($this->container['remark']) > 35)) {
            $invalidProperties[] = "invalid value for 'remark', the character length must be smaller than or equal to 35.";
        }

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['orderlines'] === null) {
            $invalidProperties[] = "'orderlines' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if (strlen($this->container['companyname']) > 35) {
            return false;
        }
        if (strlen($this->container['department']) > 35) {
            return false;
        }
        if ($this->container['firstname'] === null) {
            return false;
        }
        if (strlen($this->container['firstname']) > 35) {
            return false;
        }
        if ($this->container['lastname'] === null) {
            return false;
        }
        if (strlen($this->container['lastname']) > 35) {
            return false;
        }
        if ($this->container['street'] === null) {
            return false;
        }
        if (strlen($this->container['street']) > 95) {
            return false;
        }
        if (strlen($this->container['building_name']) > 35) {
            return false;
        }
        if (strlen($this->container['floor']) > 35) {
            return false;
        }
        if (strlen($this->container['housenumber']) > 35) {
            return false;
        }
        if (strlen($this->container['housenumber_addition']) > 35) {
            return false;
        }
        if ($this->container['postalcode'] === null) {
            return false;
        }
        if (strlen($this->container['postalcode']) > 19) {
            return false;
        }
        if ($this->container['city'] === null) {
            return false;
        }
        if (strlen($this->container['city']) > 35) {
            return false;
        }
        if (strlen($this->container['district']) > 35) {
            return false;
        }
        if (strlen($this->container['region']) > 35) {
            return false;
        }
        if ($this->container['country'] === null) {
            return false;
        }
        if (strlen($this->container['country']) > 2) {
            return false;
        }
        if (strlen($this->container['country']) < 2) {
            return false;
        }
        if (!preg_match("/[A-Z]{2}/", $this->container['country'])) {
            return false;
        }
        if (strlen($this->container['doorcode']) > 35) {
            return false;
        }
        if (strlen($this->container['remark']) > 35) {
            return false;
        }
        if ($this->container['email'] === null) {
            return false;
        }
        if ($this->container['orderlines'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets reference_webshop
     *
     * @return string
     */
    public function getReferenceWebshop()
    {
        return $this->container['reference_webshop'];
    }

    /**
     * Sets reference_webshop
     *
     * @param string $reference_webshop reference_webshop
     *
     * @return $this
     */
    public function setReferenceWebshop($reference_webshop)
    {
        $this->container['reference_webshop'] = $reference_webshop;

        return $this;
    }

    /**
     * Gets reference_customer
     *
     * @return string
     */
    public function getReferenceCustomer()
    {
        return $this->container['reference_customer'];
    }

    /**
     * Sets reference_customer
     *
     * @param string $reference_customer reference_customer
     *
     * @return $this
     */
    public function setReferenceCustomer($reference_customer)
    {
        $this->container['reference_customer'] = $reference_customer;

        return $this;
    }

    /**
     * Gets companyname
     *
     * @return string
     */
    public function getCompanyname()
    {
        return $this->container['companyname'];
    }

    /**
     * Sets companyname
     *
     * @param string $companyname companyname
     *
     * @return $this
     */
    public function setCompanyname($companyname)
    {
        if (!is_null($companyname) && (strlen($companyname) > 35)) {
            throw new \InvalidArgumentException('invalid length for $companyname when calling Order., must be smaller than or equal to 35.');
        }

        $this->container['companyname'] = $companyname;

        return $this;
    }

    /**
     * Gets department
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
     * Sets department
     *
     * @param string $department department
     *
     * @return $this
     */
    public function setDepartment($department)
    {
        if (!is_null($department) && (strlen($department) > 35)) {
            throw new \InvalidArgumentException('invalid length for $department when calling Order., must be smaller than or equal to 35.');
        }

        $this->container['department'] = $department;

        return $this;
    }

    /**
     * Gets firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     *
     * @param string $firstname firstname
     *
     * @return $this
     */
    public function setFirstname($firstname)
    {
        if ((strlen($firstname) > 35)) {
            throw new \InvalidArgumentException('invalid length for $firstname when calling Order., must be smaller than or equal to 35.');
        }

        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     *
     * @param string $lastname lastname
     *
     * @return $this
     */
    public function setLastname($lastname)
    {
        if ((strlen($lastname) > 35)) {
            throw new \InvalidArgumentException('invalid length for $lastname when calling Order., must be smaller than or equal to 35.');
        }

        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street In case you donâ€™t have a separate street and house number, please use this field for the full address.
     *
     * @return $this
     */
    public function setStreet($street)
    {
        if ((strlen($street) > 95)) {
            throw new \InvalidArgumentException('invalid length for $street when calling Order., must be smaller than or equal to 95.');
        }

        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets building_name
     *
     * @return string
     */
    public function getBuildingName()
    {
        return $this->container['building_name'];
    }

    /**
     * Sets building_name
     *
     * @param string $building_name building_name
     *
     * @return $this
     */
    public function setBuildingName($building_name)
    {
        if (!is_null($building_name) && (strlen($building_name) > 35)) {
            throw new \InvalidArgumentException('invalid length for $building_name when calling Order., must be smaller than or equal to 35.');
        }

        $this->container['building_name'] = $building_name;

        return $this;
    }

    /**
     * Gets floor
     *
     * @return string
     */
    public function getFloor()
    {
        return $this->container['floor'];
    }

    /**
     * Sets floor
     *
     * @param string $floor floor
     *
     * @return $this
     */
    public function setFloor($floor)
    {
        if (!is_null($floor) && (strlen($floor) > 35)) {
            throw new \InvalidArgumentException('invalid length for $floor when calling Order., must be smaller than or equal to 35.');
        }

        $this->container['floor'] = $floor;

        return $this;
    }

    /**
     * Gets housenumber
     *
     * @return string
     */
    public function getHousenumber()
    {
        return $this->container['housenumber'];
    }

    /**
     * Sets housenumber
     *
     * @param string $housenumber housenumber
     *
     * @return $this
     */
    public function setHousenumber($housenumber)
    {
        if (!is_null($housenumber) && (strlen($housenumber) > 35)) {
            throw new \InvalidArgumentException('invalid length for $housenumber when calling Order., must be smaller than or equal to 35.');
        }

        $this->container['housenumber'] = $housenumber;

        return $this;
    }

    /**
     * Gets housenumber_addition
     *
     * @return string
     */
    public function getHousenumberAddition()
    {
        return $this->container['housenumber_addition'];
    }

    /**
     * Sets housenumber_addition
     *
     * @param string $housenumber_addition housenumber_addition
     *
     * @return $this
     */
    public function setHousenumberAddition($housenumber_addition)
    {
        if (!is_null($housenumber_addition) && (strlen($housenumber_addition) > 35)) {
            throw new \InvalidArgumentException('invalid length for $housenumber_addition when calling Order., must be smaller than or equal to 35.');
        }

        $this->container['housenumber_addition'] = $housenumber_addition;

        return $this;
    }

    /**
     * Gets postalcode
     *
     * @return string
     */
    public function getPostalcode()
    {
        return $this->container['postalcode'];
    }

    /**
     * Sets postalcode
     *
     * @param string $postalcode postalcode
     *
     * @return $this
     */
    public function setPostalcode($postalcode)
    {
        if ((strlen($postalcode) > 19)) {
            throw new \InvalidArgumentException('invalid length for $postalcode when calling Order., must be smaller than or equal to 19.');
        }

        $this->container['postalcode'] = $postalcode;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        if ((strlen($city) > 35)) {
            throw new \InvalidArgumentException('invalid length for $city when calling Order., must be smaller than or equal to 35.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets district
     *
     * @return string
     */
    public function getDistrict()
    {
        return $this->container['district'];
    }

    /**
     * Sets district
     *
     * @param string $district district
     *
     * @return $this
     */
    public function setDistrict($district)
    {
        if (!is_null($district) && (strlen($district) > 35)) {
            throw new \InvalidArgumentException('invalid length for $district when calling Order., must be smaller than or equal to 35.');
        }

        $this->container['district'] = $district;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string $region region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        if (!is_null($region) && (strlen($region) > 35)) {
            throw new \InvalidArgumentException('invalid length for $region when calling Order., must be smaller than or equal to 35.');
        }

        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        if ((strlen($country) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country when calling Order., must be smaller than or equal to 2.');
        }
        if ((strlen($country) < 2)) {
            throw new \InvalidArgumentException('invalid length for $country when calling Order., must be bigger than or equal to 2.');
        }
        if ((!preg_match("/[A-Z]{2}/", $country))) {
            throw new \InvalidArgumentException("invalid value for $country when calling Order., must conform to the pattern /[A-Z]{2}/.");
        }

        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets doorcode
     *
     * @return string
     */
    public function getDoorcode()
    {
        return $this->container['doorcode'];
    }

    /**
     * Sets doorcode
     *
     * @param string $doorcode doorcode
     *
     * @return $this
     */
    public function setDoorcode($doorcode)
    {
        if (!is_null($doorcode) && (strlen($doorcode) > 35)) {
            throw new \InvalidArgumentException('invalid length for $doorcode when calling Order., must be smaller than or equal to 35.');
        }

        $this->container['doorcode'] = $doorcode;

        return $this;
    }

    /**
     * Gets remark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
     * Sets remark
     *
     * @param string $remark remark
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        if (!is_null($remark) && (strlen($remark) > 35)) {
            throw new \InvalidArgumentException('invalid length for $remark when calling Order., must be smaller than or equal to 35.');
        }

        $this->container['remark'] = $remark;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets orderlines
     *
     * @return \Swagger\Client\Model\Orderline[]
     */
    public function getOrderlines()
    {
        return $this->container['orderlines'];
    }

    /**
     * Sets orderlines
     *
     * @param \Swagger\Client\Model\Orderline[] $orderlines orderlines
     *
     * @return $this
     */
    public function setOrderlines($orderlines)
    {
        $this->container['orderlines'] = $orderlines;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

