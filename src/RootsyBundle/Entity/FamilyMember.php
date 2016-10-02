<?php

namespace RootsyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FamilyMember
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FamilyMember
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="middle_name", type="string", length=255)
     */
    private $middleName;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=255)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="maiden_name", type="string", length=255)
     */
    private $maidenName;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=255)
     */
    private $gender;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birth_date", type="date")
     */
    private $birthDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="baptism_date", type="date")
     */
    private $baptismDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="marriage_date", type="date")
     */
    private $marriageDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="death_date", type="date")
     */
    private $deathDate;

    /**
     * @var string
     *
     * @ORM\Column(name="place_of_birth", type="string", length=255)
     */
    private $placeOfBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="place_of_residence", type="string", length=255)
     */
    private $placeOfResidence;

    /**
     * @var string
     *
     * @ORM\Column(name="place_of_death", type="string", length=255)
     */
    private $placeOfDeath;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="mother", type="string", length=255)
     */
    private $mother;

    /**
     * @var string
     *
     * @ORM\Column(name="mother_surname", type="string", length=255)
     */
    private $motherSurname;

    /**
     * @var string
     *
     * @ORM\Column(name="father_name", type="string", length=255)
     */
    private $fatherName;

    /**
     * @var string
     *
     * @ORM\Column(name="father_surname", type="string", length=255)
     */
    private $fatherSurname;

    /**
     * @var string
     *
     * @ORM\Column(name="child_name", type="string", length=255)
     */
    private $childName;

    /**
     * @var string
     *
     * @ORM\Column(name="child_surname", type="string", length=255)
     */
    private $childSurname;

    /**
     * @var string
     *
     * @ORM\Column(name="spouse_name", type="string", length=255)
     */
    private $spouseName;

    /**
     * @var string
     *
     * @ORM\Column(name="spouse_surname", type="string", length=255)
     */
    private $spouseSurname;


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
     * Set name
     *
     * @param string $name
     * @return FamilyMember
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set middleName
     *
     * @param string $middleName
     * @return FamilyMember
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;

        return $this;
    }

    /**
     * Get middleName
     *
     * @return string 
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * Set surname
     *
     * @param string $surname
     * @return FamilyMember
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set maidenName
     *
     * @param string $maidenName
     * @return FamilyMember
     */
    public function setMaidenName($maidenName)
    {
        $this->maidenName = $maidenName;

        return $this;
    }

    /**
     * Get maidenName
     *
     * @return string 
     */
    public function getMaidenName()
    {
        return $this->maidenName;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return FamilyMember
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     * @return FamilyMember
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime 
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set baptismDate
     *
     * @param \DateTime $baptismDate
     * @return FamilyMember
     */
    public function setBaptismDate($baptismDate)
    {
        $this->baptismDate = $baptismDate;

        return $this;
    }

    /**
     * Get baptismDate
     *
     * @return \DateTime 
     */
    public function getBaptismDate()
    {
        return $this->baptismDate;
    }

    /**
     * Set marriageDate
     *
     * @param \DateTime $marriageDate
     * @return FamilyMember
     */
    public function setMarriageDate($marriageDate)
    {
        $this->marriageDate = $marriageDate;

        return $this;
    }

    /**
     * Get marriageDate
     *
     * @return \DateTime 
     */
    public function getMarriageDate()
    {
        return $this->marriageDate;
    }

    /**
     * Set deathDate
     *
     * @param \DateTime $deathDate
     * @return FamilyMember
     */
    public function setDeathDate($deathDate)
    {
        $this->deathDate = $deathDate;

        return $this;
    }

    /**
     * Get deathDate
     *
     * @return \DateTime 
     */
    public function getDeathDate()
    {
        return $this->deathDate;
    }

    /**
     * Set placeOfBirth
     *
     * @param string $placeOfBirth
     * @return FamilyMember
     */
    public function setPlaceOfBirth($placeOfBirth)
    {
        $this->placeOfBirth = $placeOfBirth;

        return $this;
    }

    /**
     * Get placeOfBirth
     *
     * @return string 
     */
    public function getPlaceOfBirth()
    {
        return $this->placeOfBirth;
    }

    /**
     * Set placeOfResidence
     *
     * @param string $placeOfResidence
     * @return FamilyMember
     */
    public function setPlaceOfResidence($placeOfResidence)
    {
        $this->placeOfResidence = $placeOfResidence;

        return $this;
    }

    /**
     * Get placeOfResidence
     *
     * @return string 
     */
    public function getPlaceOfResidence()
    {
        return $this->placeOfResidence;
    }

    /**
     * Set placeOfDeath
     *
     * @param string $placeOfDeath
     * @return FamilyMember
     */
    public function setPlaceOfDeath($placeOfDeath)
    {
        $this->placeOfDeath = $placeOfDeath;

        return $this;
    }

    /**
     * Get placeOfDeath
     *
     * @return string 
     */
    public function getPlaceOfDeath()
    {
        return $this->placeOfDeath;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return FamilyMember
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set mother
     *
     * @param string $mother
     * @return FamilyMember
     */
    public function setMother($mother)
    {
        $this->mother = $mother;

        return $this;
    }

    /**
     * Get mother
     *
     * @return string 
     */
    public function getMother()
    {
        return $this->mother;
    }

    /**
     * Set motherSurname
     *
     * @param string $motherSurname
     * @return FamilyMember
     */
    public function setMotherSurname($motherSurname)
    {
        $this->motherSurname = $motherSurname;

        return $this;
    }

    /**
     * Get motherSurname
     *
     * @return string 
     */
    public function getMotherSurname()
    {
        return $this->motherSurname;
    }

    /**
     * Set fatherName
     *
     * @param string $fatherName
     * @return FamilyMember
     */
    public function setFatherName($fatherName)
    {
        $this->fatherName = $fatherName;

        return $this;
    }

    /**
     * Get fatherName
     *
     * @return string 
     */
    public function getFatherName()
    {
        return $this->fatherName;
    }

    /**
     * Set fatherSurname
     *
     * @param string $fatherSurname
     * @return FamilyMember
     */
    public function setFatherSurname($fatherSurname)
    {
        $this->fatherSurname = $fatherSurname;

        return $this;
    }

    /**
     * Get fatherSurname
     *
     * @return string 
     */
    public function getFatherSurname()
    {
        return $this->fatherSurname;
    }

    /**
     * Set childName
     *
     * @param string $childName
     * @return FamilyMember
     */
    public function setChildName($childName)
    {
        $this->childName = $childName;

        return $this;
    }

    /**
     * Get childName
     *
     * @return string 
     */
    public function getChildName()
    {
        return $this->childName;
    }

    /**
     * Set childSurname
     *
     * @param string $childSurname
     * @return FamilyMember
     */
    public function setChildSurname($childSurname)
    {
        $this->childSurname = $childSurname;

        return $this;
    }

    /**
     * Get childSurname
     *
     * @return string 
     */
    public function getChildSurname()
    {
        return $this->childSurname;
    }

    /**
     * Set spouseName
     *
     * @param string $spouseName
     * @return FamilyMember
     */
    public function setSpouseName($spouseName)
    {
        $this->spouseName = $spouseName;

        return $this;
    }

    /**
     * Get spouseName
     *
     * @return string 
     */
    public function getSpouseName()
    {
        return $this->spouseName;
    }

    /**
     * Set spouseSurname
     *
     * @param string $spouseSurname
     * @return FamilyMember
     */
    public function setSpouseSurname($spouseSurname)
    {
        $this->spouseSurname = $spouseSurname;

        return $this;
    }

    /**
     * Get spouseSurname
     *
     * @return string 
     */
    public function getSpouseSurname()
    {
        return $this->spouseSurname;
    }
}
