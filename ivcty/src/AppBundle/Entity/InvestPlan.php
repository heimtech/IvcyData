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
 * @ORM\Table(name="invest_plan")
 */
class InvestPlan
{
    /**
     * @ORM\Column(type="integer", length=10, nullable=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var integer
     *
     * @ORM\Column(type="integer", length=20, nullable=true)
     */
    private $member;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $creationTime;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $website;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $investmentname;

    /**
     * @ORM\Column(type="string", length=1024, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $youtubelink;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $planname;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $runtime;

    /**
     * @ORM\Column(type="decimal", nullable=true)
     */
    private $number;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $paytax;


    /**
     * @ORM\Column(type="integer", length=3, nullable=true)
     */
    private $profitIncoming;


    /**
     * @ORM\Column(type="decimal", nullable=true)
     */
    private $roi;

    /**
    /**
     * @ORM\Column(type="integer", length=3, nullable=true)
     */
    private $principal;

    /**
     * @ORM\ManyToOne(targetEntity="MemberWallets", inversedBy="investmentsPayedIn")
     * @ORM\JoinColumn(name="payInWallet", referencedColumnName="id", nullable=true)
     */
    private $payInWallet;

    /**
     * @ORM\ManyToOne(targetEntity="MemberWallets", inversedBy="investmentsPayedOut")
     * @ORM\JoinColumn(name="payOutWallet", referencedColumnName="id", nullable=true)
     */
    private $payOutWallet;

    /**
     * @ORM\Column(type="decimal", length=20, nullable=true)
     */
    private $amount;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $startdatetime;


    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $pending;

     /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $open;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $closed;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $warning;


    /**
     * @ORM\Column(type="integer", length=1, nullable=true)
     */
    private $rating;


    /**
     * @ORM\Column(type="string", length=1024, nullable=true)
     */
    private $comment;

    /**
     * @ORM\OneToMany(targetEntity="InvestmentHistory", mappedBy="investment", fetch="EAGER")
     */
    private $investmentHistoryEvents;




    /**
     * Constructor
     */
    public function __construct()
    {
        $this->investmentHistoryEvents = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set member
     *
     * @param integer $member
     *
     * @return InvestPlan
     */
    public function setMember($member)
    {
        $this->member = $member;

        return $this;
    }

    /**
     * Get member
     *
     * @return integer
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * Set creationTime
     *
     * @param string $creationTime
     *
     * @return InvestPlan
     */
    public function setCreationTime($creationTime)
    {
        $this->creationTime = $creationTime;

        return $this;
    }

    /**
     * Get creationTime
     *
     * @return string
     */
    public function getCreationTime()
    {
        return $this->creationTime;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return InvestPlan
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set investmentname
     *
     * @param string $investmentname
     *
     * @return InvestPlan
     */
    public function setInvestmentname($investmentname)
    {
        $this->investmentname = $investmentname;

        return $this;
    }

    /**
     * Get investmentname
     *
     * @return string
     */
    public function getInvestmentname()
    {
        return $this->investmentname;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return InvestPlan
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
     * Set youtubelink
     *
     * @param string $youtubelink
     *
     * @return InvestPlan
     */
    public function setYoutubelink($youtubelink)
    {
        $this->youtubelink = $youtubelink;

        return $this;
    }

    /**
     * Get youtubelink
     *
     * @return string
     */
    public function getYoutubelink()
    {
        return $this->youtubelink;
    }

    /**
     * Set planname
     *
     * @param string $planname
     *
     * @return InvestPlan
     */
    public function setPlanname($planname)
    {
        $this->planname = $planname;

        return $this;
    }

    /**
     * Get planname
     *
     * @return string
     */
    public function getPlanname()
    {
        return $this->planname;
    }

    /**
     * Set runtime
     *
     * @param string $runtime
     *
     * @return InvestPlan
     */
    public function setRuntime($runtime)
    {
        $this->runtime = $runtime;

        return $this;
    }

    /**
     * Get runtime
     *
     * @return string
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    /**
     * Set number
     *
     * @param string $number
     *
     * @return InvestPlan
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set paytax
     *
     * @param string $paytax
     *
     * @return InvestPlan
     */
    public function setPaytax($paytax)
    {
        $this->paytax = $paytax;

        return $this;
    }

    /**
     * Get paytax
     *
     * @return string
     */
    public function getPaytax()
    {
        return $this->paytax;
    }

    /**
     * Set profitIncoming
     *
     * @param integer $profitIncoming
     *
     * @return InvestPlan
     */
    public function setProfitIncoming($profitIncoming)
    {
        $this->profitIncoming = $profitIncoming;

        return $this;
    }

    /**
     * Get profitIncoming
     *
     * @return integer
     */
    public function getProfitIncoming()
    {
        return $this->profitIncoming;
    }

    /**
     * Set roi
     *
     * @param string $roi
     *
     * @return InvestPlan
     */
    public function setRoi($roi)
    {
        $this->roi = $roi;

        return $this;
    }

    /**
     * Get roi
     *
     * @return string
     */
    public function getRoi()
    {
        return $this->roi;
    }

    /**
     * Set principal
     *
     * @param integer $principal
     *
     * @return InvestPlan
     */
    public function setPrincipal($principal)
    {
        $this->principal = $principal;

        return $this;
    }

    /**
     * Get principal
     *
     * @return integer
     */
    public function getPrincipal()
    {
        return $this->principal;
    }

    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return InvestPlan
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
     * Set startdatetime
     *
     * @param \DateTime $startdatetime
     *
     * @return InvestPlan
     */
    public function setStartdatetime($startdatetime)
    {
        $this->startdatetime = $startdatetime;

        return $this;
    }

    /**
     * Get startdatetime
     *
     * @return \DateTime
     */
    public function getStartdatetime()
    {
        return $this->startdatetime;
    }

    /**
     * Set pending
     *
     * @param boolean $pending
     *
     * @return InvestPlan
     */
    public function setPending($pending)
    {
        $this->pending = $pending;

        return $this;
    }

    /**
     * Get pending
     *
     * @return boolean
     */
    public function getPending()
    {
        return $this->pending;
    }

    /**
     * Set open
     *
     * @param boolean $open
     *
     * @return InvestPlan
     */
    public function setOpen($open)
    {
        $this->open = $open;

        return $this;
    }

    /**
     * Get open
     *
     * @return boolean
     */
    public function getOpen()
    {
        return $this->open;
    }

    /**
     * Set closed
     *
     * @param boolean $closed
     *
     * @return InvestPlan
     */
    public function setClosed($closed)
    {
        $this->closed = $closed;

        return $this;
    }

    /**
     * Get closed
     *
     * @return boolean
     */
    public function getClosed()
    {
        return $this->closed;
    }

    /**
     * Set warning
     *
     * @param boolean $warning
     *
     * @return InvestPlan
     */
    public function setWarning($warning)
    {
        $this->warning = $warning;

        return $this;
    }

    /**
     * Get warning
     *
     * @return boolean
     */
    public function getWarning()
    {
        return $this->warning;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     *
     * @return InvestPlan
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return InvestPlan
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }


    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set payInWallet
     *
     * @param \AppBundle\Entity\MemberWallets $payInWallet
     *
     * @return InvestPlan
     */
    public function setPayInWallet(\AppBundle\Entity\MemberWallets $payInWallet = null)
    {
        $this->payInWallet = $payInWallet;

        return $this;
    }

    /**
     * Get payInWallet
     *
     * @return \AppBundle\Entity\MemberWallets
     */
    public function getPayInWallet()
    {
        return $this->payInWallet;
    }

    /**
     * Set payOutWallet
     *
     * @param \AppBundle\Entity\MemberWallets $payOutWallet
     *
     * @return InvestPlan
     */
    public function setPayOutWallet(\AppBundle\Entity\MemberWallets $payOutWallet = null)
    {
        $this->payOutWallet = $payOutWallet;

        return $this;
    }

    /**
     * Get payOutWallet
     *
     * @return \AppBundle\Entity\MemberWallets
     */
    public function getPayOutWallet()
    {
        return $this->payOutWallet;
    }

    /**
     * Add investmentHistoryEvent
     *
     * @param \AppBundle\Entity\InvestmentHistory $investmentHistoryEvent
     *
     * @return InvestPlan
     */
    public function addInvestmentHistoryEvent(\AppBundle\Entity\InvestmentHistory $investmentHistoryEvent)
    {
        $this->investmentHistoryEvents[] = $investmentHistoryEvent;

        return $this;
    }

    /**
     * Remove investmentHistoryEvent
     *
     * @param \AppBundle\Entity\InvestmentHistory $investmentHistoryEvent
     */
    public function removeInvestmentHistoryEvent(\AppBundle\Entity\InvestmentHistory $investmentHistoryEvent)
    {
        $this->investmentHistoryEvents->removeElement($investmentHistoryEvent);
    }

    /**
     * Get investmentHistoryEvents
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInvestmentHistoryEvents()
    {
        return $this->investmentHistoryEvents;
    }
}
