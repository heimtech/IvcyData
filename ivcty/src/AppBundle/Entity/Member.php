<?php
/**
 * Created by PhpStorm.
 * User: UC8456
 * Date: 17.01.2017
 * Time: 16:39
 */
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MemberRepository")
 * @ORM\Table(name="tl_member")
 */
class Member
{
    /**
     * @ORM\Column(type="integer", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", length=10)
     */
    private $tstamp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $username;


    /**
     * @ORM\OneToMany(targetEntity="InvestPlan", mappedBy="member", fetch="EAGER")
     */
    private $investments;





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
     * Set tstamp
     *
     * @param integer $tstamp
     *
     * @return Member
     */
    public function setTstamp($tstamp)
    {
        $this->tstamp = $tstamp;

        return $this;
    }

    /**
     * Get tstamp
     *
     * @return integer
     */
    public function getTstamp()
    {
        return $this->tstamp;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Member
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
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Member
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
     * Set username
     *
     * @param string $username
     *
     * @return Member
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->investments = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add investment
     *
     * @param \AppBundle\Entity\InvestPlan $investment
     *
     * @return Member
     */
    public function addInvestment(\AppBundle\Entity\InvestPlan $investment)
    {
        $this->investments[] = $investment;

        return $this;
    }

    /**
     * Remove investment
     *
     * @param \AppBundle\Entity\InvestPlan $investment
     */
    public function removeInvestment(\AppBundle\Entity\InvestPlan $investment)
    {
        $this->investments->removeElement($investment);
    }

    /**
     * Get investments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInvestments()
    {
        return $this->investments;
    }
}
