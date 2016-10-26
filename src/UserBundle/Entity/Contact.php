<?php
 
namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="contact")
 */
class Contact 
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id; 
	
	
/**
     * @ORM\Column(type="string",length=70, nullable=true, unique=true)
     */
    private $adresse;
	/**
     * @ORM\Column(type="string",length=70, nullable=true, unique=true)
     */
    private $siteweb;
	/**
     * @ORM\Column(type="string",length=70, nullable=true, unique=true)
     */
    private $email;
	/**
     * @ORM\Column(type="string",length=70, nullable=true, unique=true)
     */
    private $phone;
	
	
	
	 /**
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;
	
    public function __construct()
    {

    
    }
	

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Contact
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set site_web
     *
     * @param string $siteWeb
     * @return Contact
     */
    public function setSiteWeb($siteWeb)
    {
        $this->siteweb = $siteWeb;

        return $this;
    }

    /**
     * Get site_web
     *
     * @return string 
     */
    public function getSiteWeb()
    {
        return $this->siteweb;
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
     * Set idUser
     *
     * @param \UserBundle\Entity\User $idUser
     * @return Contact
     */
    public function setIdUser(\UserBundle\Entity\User $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \UserBundle\Entity\User 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}
