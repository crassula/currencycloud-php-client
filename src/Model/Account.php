<?php

namespace CurrencyCloud\Model;

use DateTime;

class Account implements EntityInterface
{

    /**
     * @var string
     */
    private $id;
    /**
     * @var string
     */
    private $legalEntityType;
    /**
     * @var string
     */
    private $accountName;
    /**
     * @var string
     */
    private $brand;
    /**
     * @var string
     */
    private $yourReference;
    /**
     * @var string
     */
    private $status;
    /**
     * @var string
     */
    private $street;
    /**
     * @var string
     */
    private $city;
    /**
     * @var string
     */
    private $stateOrProvince;
    /**
     * @var string
     */
    private $country;
    /**
     * @var string
     */
    private $postalCode;
    /**
     * @var string
     */
    private $spreadTable;
    /**
     * @var DateTime
     */
    private $createdAt;
    /**
     * @var DateTime
     */
    private $updatedAt;
    /**
     * @var string
     */
    private $identificationType;
    /**
     * @var string
     */
    private $identificationValue;
    /**
     * @var string
     */
    private $shortReference;
    /**
     * @var bool
     */
    private $termsAndConditionsAccepted;
    /**
     * @var bool
     */
    private $apiTrading;
    /**
     * @var bool
     */
    private $onlineTrading;
    /**
     * @var bool
     */
    private $phoneTrading;
    /**
     * @var string|null
     */
    private $identificationExpiration;
    /**
     * @var string|null
     */
    private $identificationIssuer;
    /**
     * @var string|null
     */
    private $countryOfCitizenship;
    /**
     * @var string|null
     */
    private $nationalIdentification;
    /**
     * @var string|null
     */
    private $countryOfIncorporation;
    /**
     * @var string|null
     */
    private $dateOfIncorporation;
    /**
     * @var string|null
     */
    private $industryType;
    /**
     * @var string|null
     */
    private $legalEntitySubType;
    /**
     * @var string|null
     */
    private $businessWebsiteUrl;
    /**
     * @var string|null
     */
    private $tradingAddressStreet;
    /**
     * @var string|null
     */
    private $tradingAddressCity;
    /**
     * @var string|null
     */
    private $tradingAddressState;
    /**
     * @var string|null
     */
    private $tradingAddressPostalcode;
    /**
     * @var string|null
     */
    private $tradingAddressCountry;
    /**
     * @var string|null
     */
    private $taxIdentification;
    /**
     * @var string|null
     */
    private $customerRisk;
    /**
     * @var string|null
     */
    private $expectedMonthlyActivityValue;
    /**
     * @var string|null
     */
    private $expectedMonthlyActivityVolume;
    /**
     * @var string[]|null
     */
    private $expectedTransactionCountries;
    /**
     * @var string[]|null
     */
    private $expectedTransactionCurrencies;


    /**
     * @param string $accountName
     * @param string $legalEntityType
     *
     * @return Account
     */
    public static function create($accountName, $legalEntityType)
    {
        return (new Account())->setAccountName($accountName)
            ->setLegalEntityType($legalEntityType);
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getLegalEntityType()
    {
        return $this->legalEntityType;
    }

    /**
     * @param string $legalEntityType
     *
     * @return $this
     */
    public function setLegalEntityType($legalEntityType)
    {
        $this->legalEntityType = (null === $legalEntityType) ? null : (string) $legalEntityType;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * @param string $accountName
     *
     * @return $this
     */
    public function setAccountName($accountName)
    {
        $this->accountName = (null === $accountName) ? null : (string) $accountName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->brand = (null === $brand) ? null : (string) $brand;
        return $this;
    }

    /**
     * @return string
     */
    public function getYourReference()
    {
        return $this->yourReference;
    }

    /**
     * @param string $yourReference
     *
     * @return $this
     */
    public function setYourReference($yourReference)
    {
        $this->yourReference = (null === $yourReference) ? null : (string) $yourReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = (null === $status) ? null : (string) $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->street = (null === $street) ? null : (string) $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = (null === $city) ? null : (string) $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getStateOrProvince()
    {
        return $this->stateOrProvince;
    }

    /**
     * @param string $stateOrProvince
     *
     * @return $this
     */
    public function setStateOrProvince($stateOrProvince)
    {
        $this->stateOrProvince = (null === $stateOrProvince) ? null : (string) $stateOrProvince;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = (null === $country) ? null : (string) $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     *
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = (null === $postalCode) ? null : (string) $postalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpreadTable()
    {
        return $this->spreadTable;
    }

    /**
     * @param string $spreadTable
     *
     * @return $this
     */
    public function setSpreadTable($spreadTable)
    {
        $this->spreadTable = (null === $spreadTable) ? null : (string) $spreadTable;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime|null $createdAt
     *
     * @return $this
     */
    public function setCreatedAt(DateTime $createdAt = null)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTime|null $updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt(DateTime $updatedAt = null)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdentificationType()
    {
        return $this->identificationType;
    }

    /**
     * @param string $identificationType
     *
     * @return $this
     */
    public function setIdentificationType($identificationType)
    {
        $this->identificationType = (null === $identificationType) ? null : (string) $identificationType;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdentificationValue()
    {
        return $this->identificationValue;
    }

    /**
     * @param string $identificationValue
     *
     * @return $this
     */
    public function setIdentificationValue($identificationValue)
    {
        $this->identificationValue = (null === $identificationValue) ? null : (string) $identificationValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getShortReference()
    {
        return $this->shortReference;
    }

    /**
     * @param string $shortReference
     *
     * @return $this
     */
    public function setShortReference($shortReference)
    {
        $this->shortReference = (null === $shortReference) ? null : (string) $shortReference;
        return $this;
    }

    /**
     * @return bool
     */
    public function isTermsAndConditionsAccepted()
    {
        return $this->termsAndConditionsAccepted;
    }

    /**
     * @param bool $termsAndConditionsAccepted
     *
     * @return $this
     */
    public function setTermsAndConditionsAccepted($termsAndConditionsAccepted)
    {
        $this->termsAndConditionsAccepted = (null === $termsAndConditionsAccepted) ? null : (bool)$termsAndConditionsAccepted;
        return $this;
    }

    /**
     * @return bool
     */
    public function isApiTRading()
    {
        return $this->apiTrading;
    }

    /**
     * @param bool $apiTrading
     *
     * @return $this
     */
    public function setApiTrading($apiTrading)
    {
        $this->apiTrading = (null === $apiTrading) ? null : (bool)$apiTrading;
        return $this;
    }

    /**
     * @return bool
     */
    public function isOnlineTRading()
    {
        return $this->onlineTrading;
    }

    /**
     * @param bool $apiTrading
     *
     * @return $onlineTrading
     */
    public function setOnlineTrading($onlineTrading)
    {
        $this->onlineTrading = (null === $onlineTrading) ? null : (bool)$onlineTrading;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPhoneTrading()
    {
        return $this->phoneTrading;
    }

    /**
     * @param bool $phoneTrading
     *
     * @return $this
     */
    public function setPhoneTrading($phoneTrading)
    {
        $this->phoneTrading = (null === $phoneTrading) ? null : (bool)$phoneTrading;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIdentificationExpiration()
    {
        return $this->identificationExpiration;
    }

    /**
     * @param string|null $identificationExpiration
     *
     * @return $this
     */
    public function setIdentificationExpiration($identificationExpiration)
    {
        $this->identificationExpiration = (null === $identificationExpiration) ? null : (string) $identificationExpiration;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIdentificationIssuer()
    {
        return $this->identificationIssuer;
    }

    /**
     * @param string|null $identificationIssuer
     *
     * @return $this
     */
    public function setIdentificationIssuer($identificationIssuer)
    {
        $this->identificationIssuer = (null === $identificationIssuer) ? null : (string) $identificationIssuer;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCountryOfCitizenship()
    {
        return $this->countryOfCitizenship;
    }

    /**
     * @param string|null $countryOfCitizenship
     *
     * @return $this
     */
    public function setCountryOfCitizenship($countryOfCitizenship)
    {
        $this->countryOfCitizenship = (null === $countryOfCitizenship) ? null : (string) $countryOfCitizenship;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNationalIdentification()
    {
        return $this->nationalIdentification;
    }

    /**
     * @param string|null $nationalIdentification
     *
     * @return $this
     */
    public function setNationalIdentification($nationalIdentification)
    {
        $this->nationalIdentification = (null === $nationalIdentification) ? null : (string) $nationalIdentification;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCountryOfIncorporation()
    {
        return $this->countryOfIncorporation;
    }

    /**
     * @param string|null $countryOfIncorporation
     *
     * @return $this
     */
    public function setCountryOfIncorporation($countryOfIncorporation)
    {
        $this->countryOfIncorporation = (null === $countryOfIncorporation) ? null : (string) $countryOfIncorporation;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDateOfIncorporation()
    {
        return $this->dateOfIncorporation;
    }

    /**
     * @param string|null $dateOfIncorporation
     *
     * @return $this
     */
    public function setDateOfIncorporation($dateOfIncorporation)
    {
        $this->dateOfIncorporation = (null === $dateOfIncorporation) ? null : (string) $dateOfIncorporation;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIndustryType()
    {
        return $this->industryType;
    }

    /**
     * @param string|null $industryType
     *
     * @return $this
     */
    public function setIndustryType($industryType)
    {
        $this->industryType = (null === $industryType) ? null : (string) $industryType;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLegalEntitySubType()
    {
        return $this->legalEntitySubType;
    }

    /**
     * @param string|null $legalEntitySubType
     *
     * @return $this
     */
    public function setLegalEntitySubType($legalEntitySubType)
    {
        $this->legalEntitySubType = (null === $legalEntitySubType) ? null : (string) $legalEntitySubType;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBusinessWebsiteUrl()
    {
        return $this->businessWebsiteUrl;
    }

    /**
     * @param string|null $businessWebsiteUrl
     *
     * @return $this
     */
    public function setBusinessWebsiteUrl($businessWebsiteUrl)
    {
        $this->businessWebsiteUrl = (null === $businessWebsiteUrl) ? null : (string) $businessWebsiteUrl;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTradingAddressStreet()
    {
        return $this->tradingAddressStreet;
    }

    /**
     * @param string|null $tradingAddressStreet
     *
     * @return $this
     */
    public function setTradingAddressStreet($tradingAddressStreet)
    {
        $this->tradingAddressStreet = (null === $tradingAddressStreet) ? null : (string) $tradingAddressStreet;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTradingAddressCity()
    {
        return $this->tradingAddressCity;
    }

    /**
     * @param string|null $tradingAddressCity
     *
     * @return $this
     */
    public function setTradingAddressCity($tradingAddressCity)
    {
        $this->tradingAddressCity = (null === $tradingAddressCity) ? null : (string) $tradingAddressCity;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTradingAddressState()
    {
        return $this->tradingAddressState;
    }

    /**
     * @param string|null $tradingAddressState
     *
     * @return $this
     */
    public function setTradingAddressState($tradingAddressState)
    {
        $this->tradingAddressState = (null === $tradingAddressState) ? null : (string) $tradingAddressState;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTradingAddressPostalcode()
    {
        return $this->tradingAddressPostalcode;
    }

    /**
     * @param string|null $tradingAddressPostalcode
     *
     * @return $this
     */
    public function setTradingAddressPostalcode($tradingAddressPostalcode)
    {
        $this->tradingAddressPostalcode = (null === $tradingAddressPostalcode) ? null : (string) $tradingAddressPostalcode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTradingAddressCountry()
    {
        return $this->tradingAddressCountry;
    }

    /**
     * @param string|null $tradingAddressCountry
     *
     * @return $this
     */
    public function setTradingAddressCountry($tradingAddressCountry)
    {
        $this->tradingAddressCountry = (null === $tradingAddressCountry) ? null : (string) $tradingAddressCountry;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTaxIdentification()
    {
        return $this->taxIdentification;
    }

    /**
     * @param string|null $taxIdentification
     *
     * @return $this
     */
    public function setTaxIdentification($taxIdentification)
    {
        $this->taxIdentification = (null === $taxIdentification) ? null : (string) $taxIdentification;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustomerRisk()
    {
        return $this->customerRisk;
    }

    /**
     * @param string|null $customerRisk
     *
     * @return $this
     */
    public function setCustomerRisk($customerRisk)
    {
        $this->customerRisk = (null === $customerRisk) ? null : (string) $customerRisk;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getExpectedMonthlyActivityValue()
    {
        return $this->expectedMonthlyActivityValue;
    }

    /**
     * @param string|null $expectedMonthlyActivityValue
     *
     * @return $this
     */
    public function setExpectedMonthlyActivityValue($expectedMonthlyActivityValue)
    {
        $this->expectedMonthlyActivityValue = (null === $expectedMonthlyActivityValue) ? null : (string) $expectedMonthlyActivityValue;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getExpectedMonthlyActivityVolume()
    {
        return $this->expectedMonthlyActivityVolume;
    }

    /**
     * @param string|null $expectedMonthlyActivityVolume
     *
     * @return $this
     */
    public function setExpectedMonthlyActivityVolume($expectedMonthlyActivityVolume)
    {
        $this->expectedMonthlyActivityVolume = (null === $expectedMonthlyActivityVolume) ? null : (string) $expectedMonthlyActivityVolume;
        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getExpectedTransactionCountries()
    {
        return $this->expectedTransactionCountries;
    }

    /**
     * @param string[]|null $expectedTransactionCountries
     *
     * @return $this
     */
    public function setExpectedTransactionCountries(?array $expectedTransactionCountries)
    {
        $this->expectedTransactionCountries = (null === $expectedTransactionCountries) ? null : array_values(array_map('strval', $expectedTransactionCountries));
        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getExpectedTransactionCurrencies()
    {
        return $this->expectedTransactionCurrencies;
    }

    /**
     * @param string[]|null $expectedTransactionCurrencies
     *
     * @return $this
     */
    public function setExpectedTransactionCurrencies(?array $expectedTransactionCurrencies)
    {
        $this->expectedTransactionCurrencies = (null === $expectedTransactionCurrencies) ? null : array_values(array_map('strval', $expectedTransactionCurrencies));
        return $this;
    }
}
