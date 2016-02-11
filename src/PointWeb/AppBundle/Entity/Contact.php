<?php

namespace PointWeb\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Contact
 *
 * @ORM\Table(name="contact")
 * @ORM\Entity(repositoryClass="PointWeb\AppBundle\Entity\ContactRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Contact
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true
     * )
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="zip_code", type="string", length=255)
     */
    private $zipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=255)
     */
    private $message;


    /**
     * @var boolean
     *
     * @ORM\Column(name="Mactualite", type="boolean")
     */
    private $Mactualite;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="Mcontact", type="boolean")
     */
    private $Mcontact;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="Mproduit", type="boolean")
     */
    private $Mproduit;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="Mlivre", type="boolean")
     */
    private $Mlivre;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="Mpartenaire", type="boolean")
     */
    private $Mpartenaire;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="Mcategorie", type="boolean")
     */
    private $Mcategorie;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="Mreferencement", type="boolean")
     */
    private $Mreferencement;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="Mcalendrier", type="boolean")
     */
    private $Mcalendrier;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="Mnewsletter", type="boolean")
     */
    private $Mnewsletter;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Mautre", type="string")
     */
    private $Mautre;



    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_date", type="date")
     */
    private $updateDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_date", type="date")
     */
    private $createDate;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Contact
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return Contact
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Contact
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Contact
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Contact
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     * @return Contact
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string 
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Contact
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Contact
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set updateDate
     *
     * @param \DateTime $updateDate
     * @return News
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return News
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpdate()
    {
        if (null == $this->createDate) {
            $this->createDate = new \DateTime();
        }
        $this->updateDate = new \DateTime();
    }

    /**
     * Set Mactualite
     *
     * @param boolean $mactualite
     * @return Contact
     */
    public function setMactualite($mactualite)
    {
        $this->Mactualite = $mactualite;

        return $this;
    }

    /**
     * Get Mactualite
     *
     * @return boolean 
     */
    public function getMactualite()
    {
        return $this->Mactualite;
    }

    /**
     * Set Mcontact
     *
     * @param boolean $mcontact
     * @return Contact
     */
    public function setMcontact($mcontact)
    {
        $this->Mcontact = $mcontact;

        return $this;
    }

    /**
     * Get Mcontact
     *
     * @return boolean 
     */
    public function getMcontact()
    {
        return $this->Mcontact;
    }

    /**
     * Set Mproduit
     *
     * @param boolean $mproduit
     * @return Contact
     */
    public function setMproduit($mproduit)
    {
        $this->Mproduit = $mproduit;

        return $this;
    }

    /**
     * Get Mproduit
     *
     * @return boolean 
     */
    public function getMproduit()
    {
        return $this->Mproduit;
    }

    /**
     * Set Mlivre
     *
     * @param boolean $mlivre
     * @return Contact
     */
    public function setMlivre($mlivre)
    {
        $this->Mlivre = $mlivre;

        return $this;
    }

    /**
     * Get Mlivre
     *
     * @return boolean 
     */
    public function getMlivre()
    {
        return $this->Mlivre;
    }

    /**
     * Set Mpartenaire
     *
     * @param boolean $mpartenaire
     * @return Contact
     */
    public function setMpartenaire($mpartenaire)
    {
        $this->Mpartenaire = $mpartenaire;

        return $this;
    }

    /**
     * Get Mpartenaire
     *
     * @return boolean 
     */
    public function getMpartenaire()
    {
        return $this->Mpartenaire;
    }

    /**
     * Set Mcategorie
     *
     * @param boolean $mcategorie
     * @return Contact
     */
    public function setMcategorie($mcategorie)
    {
        $this->Mcategorie = $mcategorie;

        return $this;
    }

    /**
     * Get Mcategorie
     *
     * @return boolean 
     */
    public function getMcategorie()
    {
        return $this->Mcategorie;
    }

    /**
     * Set Mreferencement
     *
     * @param boolean $mreferencement
     * @return Contact
     */
    public function setMreferencement($mreferencement)
    {
        $this->Mreferencement = $mreferencement;

        return $this;
    }

    /**
     * Get Mreferencement
     *
     * @return boolean 
     */
    public function getMreferencement()
    {
        return $this->Mreferencement;
    }

    /**
     * Set Mcalendrier
     *
     * @param boolean $mcalendrier
     * @return Contact
     */
    public function setMcalendrier($mcalendrier)
    {
        $this->Mcalendrier = $mcalendrier;

        return $this;
    }

    /**
     * Get Mcalendrier
     *
     * @return boolean 
     */
    public function getMcalendrier()
    {
        return $this->Mcalendrier;
    }

    /**
     * Set Mnewsletter
     *
     * @param boolean $mnewsletter
     * @return Contact
     */
    public function setMnewsletter($mnewsletter)
    {
        $this->Mnewsletter = $mnewsletter;

        return $this;
    }

    /**
     * Get Mnewsletter
     *
     * @return boolean 
     */
    public function getMnewsletter()
    {
        return $this->Mnewsletter;
    }

    /**
     * Set Mautre
     *
     * @param string $mautre
     * @return Contact
     */
    public function setMautre($mautre)
    {
        $this->Mautre = $mautre;

        return $this;
    }

    /**
     * Get Mautre
     *
     * @return string 
     */
    public function getMautre()
    {
        return $this->Mautre;
    }
}
