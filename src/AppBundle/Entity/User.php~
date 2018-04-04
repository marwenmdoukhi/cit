<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use JMS\Serializer\Annotation as JMSSerializer;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 *
 * @UniqueEntity("email")
 * @UniqueEntity("username")
 * @JMSSerializer\ExclusionPolicy("all")
 * @JMSSerializer\AccessorOrder("custom", custom = {"id", "username", "email", "accounts"})
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @JMSSerializer\Expose
     * @JMSSerializer\Type("string")
     * @JMSSerializer\Groups({"users_all","users_summary"})
     */
    protected $id;

    /**
     * @JMSSerializer\Expose
     * @JMSSerializer\Type("string")
     * @JMSSerializer\Groups({"users_all","users_summary"})
     */
    protected $username;

    /**
     * @var string The email of the user.
     *
     * @JMSSerializer\Expose
     * @JMSSerializer\Type("string")
     * @JMSSerializer\Groups({"users_all","users_summary"})
     */
    protected $email;



    /**
     * @var string The matricule of the user.
     *
     * @ORM\Column(type="integer")
     * @JMSSerializer\Expose
     * @JMSSerializer\Type("integer")
     * @JMSSerializer\Groups({"users_all","users_summary"})
     */
    protected $matricule;





    /**
     * @var string The prenom of the user.
     *
     * @ORM\Column(type="string")
     * @JMSSerializer\Expose
     * @JMSSerializer\Type("string")
     * @JMSSerializer\Groups({"users_all","users_summary"})
     */
    protected $prenom;





    /**
     * @var string The nom of the user.
     *
     * @ORM\Column(type="string")
     * @JMSSerializer\Expose
     * @JMSSerializer\Type("string")
     * @JMSSerializer\Groups({"users_all","users_summary"})
     */
    protected $nom;



    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    

    /**
     * Set matricule
     *
     * @param integer $matricule
     *
     * @return User
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return integer
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
}
