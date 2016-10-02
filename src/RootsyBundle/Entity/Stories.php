<?php

namespace RootsyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stories
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Stories
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="story", type="text")
     */
    private $story;

    /**
     * @var integer
     *
     * @ORM\Column(name="family_member_id", type="integer")
     */
    private $familyMemberId;


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
     * Set title
     *
     * @param string $title
     * @return Stories
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set story
     *
     * @param string $story
     * @return Stories
     */
    public function setStory($story)
    {
        $this->story = $story;

        return $this;
    }

    /**
     * Get story
     *
     * @return string 
     */
    public function getStory()
    {
        return $this->story;
    }

    /**
     * Set familyMemberId
     *
     * @param integer $familyMemberId
     * @return Stories
     */
    public function setFamilyMemberId($familyMemberId)
    {
        $this->familyMemberId = $familyMemberId;

        return $this;
    }

    /**
     * Get familyMemberId
     *
     * @return integer 
     */
    public function getFamilyMemberId()
    {
        return $this->familyMemberId;
    }
}
