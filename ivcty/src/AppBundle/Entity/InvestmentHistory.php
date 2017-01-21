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
 * @ORM\Entity
 * @ORM\Table(name="investment_history")
 */
class InvestmentHistory
{
    /**
     * @ORM\Column(type="integer", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\ManyToOne(targetEntity="InvestPlan", inversedBy="investmentHistoryEvents")
     * @ORM\JoinColumn(name="investment", referencedColumnName="id")
     */
    private $investment;

    /** @ORM\Column(type="datetime") */
    private $creationTime;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datetime;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $amount;

    /**
     * @ORM\Column(type="boolean")
     */
    private $deleteFlag;




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
     * Set creationTime
     *
     * @param \DateTime $creationTime
     *
     * @return InvestmentHistory
     */
    public function setCreationTime($creationTime)
    {
        $this->creationTime = $creationTime;

        return $this;
    }

    /**
     * Get creationTime
     *
     * @return \DateTime
     */
    public function getCreationTime()
    {
        return $this->creationTime;
    }

    /**
     * Set datetime
     *
     * @param \DateTime $datetime
     *
     * @return InvestmentHistory
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;

        return $this;
    }

    /**
     * Get datetime
     *
     * @return \DateTime
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return InvestmentHistory
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set deleteFlag
     *
     * @param boolean $deleteFlag
     *
     * @return InvestmentHistory
     */
    public function setDeleteFlag($deleteFlag)
    {
        $this->deleteFlag = $deleteFlag;

        return $this;
    }

    /**
     * Get deleteFlag
     *
     * @return boolean
     */
    public function getDeleteFlag()
    {
        return $this->deleteFlag;
    }

    /**
     * Set investment
     *
     * @param \AppBundle\Entity\InvestPlan $investment
     *
     * @return InvestmentHistory
     */
    public function setInvestment(\AppBundle\Entity\InvestPlan $investment = null)
    {
        $this->investment = $investment;

        return $this;
    }

    /**
     * Get investment
     *
     * @return \AppBundle\Entity\InvestPlan
     */
    public function getInvestment()
    {
        return $this->investment;
    }
}
