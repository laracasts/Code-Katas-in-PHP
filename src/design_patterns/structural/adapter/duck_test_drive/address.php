<?php

class AddressDisplay {

    private $addressType;
    private $addressText;

    /**
     * @param $addressType
     */
    public function setAddressType($addressType)
    {
        $this->addressType = $addressType;
    }

    /**
     * @return mixed
     */
    public function getAddressType()
    {
        return $this->addressType;
    }

    /**
     * @param $addressText
     */
    public function setAddressText($addressText)
    {
        $this->addressText = $addressText;
    }

    /**
     * @return mixed
     */
    public function getAddressText()
    {
        return $this->addressText;
    }
	
}

class EmailAddress {

    private $emailAddress;

    /**
     * @return mixed
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param $address
     */
    public function setEmailAddress($address)
    {
        $this->emailAddress = $address;
    }
	
}

/**
 * extends the main class and use the same methods
 */
class EmailAddressDisplayAdapter extends AddressDisplay
{
    /**
     * @param $emailAddr
     */
    public function __construct($emailAddr)
    {
        $this->setAddressType("email");
        $this->setAddressText($emailAddr->getEmailAddress());
    }
}

$email = new EmailAddress();
$email->setEmailAddress("user@example.com");

$address = new EmailAddressDisplayAdapter($email);

echo $address->getAddressType() ."<br>";
echo $address->getAddressText();
