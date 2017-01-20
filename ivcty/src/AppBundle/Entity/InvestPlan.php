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
     * @ORM\Column(type="integer", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\ManyToOne(targetEntity="Member", inversedBy="investments")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    private $user;

    /** @ORM\Column(type="datetime") */
    private $creationTime;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $website;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $investmentname;

    /**
     * @ORM\Column(type="string", length=1024)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $youtubelink;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $planname;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $runtime;

    /**
     * @ORM\Column(type="double")
     */
    private $number;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $paytax;


    /**
     * @ORM\Column(type="integer", length=3)
     */
    private $profitIncoming;


    /**
     * @ORM\Column(type="double")
     */
    private $roi;

    /**
     * @ORM\Column(type="integer", length=3)
     */
    private $principal;

    /**
     * @ORM\ManyToOne(targetEntity="MemberWallets", inversedBy="investmentsPayedIn")
     * @ORM\JoinColumn(name="payInWallet", referencedColumnName="id")
     */
    private $payInWallet;

    /**
     * @ORM\ManyToOne(targetEntity="MemberWallets", inversedBy="investmentsPayedOut")
     * @ORM\JoinColumn(name="payOutWallet", referencedColumnName="id")
     */
    private $payOutWallet;

    /**
     * @ORM\Column(type="double", length=20)
     */
    private $amount;

    /**
     * @ORM\Column(type="datetime")
     */
    private $startdatetime;


    /**
     * @ORM\Column(type="bool")
     */
    private $pending;

     /**
     * @ORM\Column(type="bool")
     */
    private $open;

    /**
     * @ORM\Column(type="bool")
     */
    private $closed;

    /**
     * @ORM\Column(type="bool")
     */
    private $warning;


    /**
     * @ORM\Column(type="integer", length=1)
     */
    private $rating;


    /**
     * @ORM\Column(type="string", length=1024)
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
     * Set creationTime
     *
     * @param \DateTime $creationTime
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
     * @return \DateTime
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
     * @param \double $number
     *
     * @return InvestPlan
     */
    public function setNumber(\double $number)
    {
        $this->number = $number;
    
        return $this;
    }

    /**
     * Get number
     *
     * @return \double
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
     * @param \double $roi
     *
     * @return InvestPlan
     */
    public function setRoi(\double $roi)
    {
        $this->roi = $roi;
    
        return $this;
    }

    /**
     * Get roi
     *
     * @return \double
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
     * @param \double $amount
     *
     * @return InvestPlan
     */
    public function setAmount(\double $amount)
    {
        $this->amount = $amount;
    
        return $this;
    }

    /**
     * Get amount
     *
     * @return \double
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
     * @param \bool $pending
     *
     * @return InvestPlan
     */
    public function setPending(\bool $pending)
    {
        $this->pending = $pending;
    
        return $this;
    }

    /**
     * Get pending
     *
     * @return \bool
     */
    public function getPending()
    {
        return $this->pending;
    }

    /**
     * Set open
     *
     * @param \bool $open
     *
     * @return InvestPlan
     */
    public function setOpen(\bool $open)
    {
        $this->open = $open;
    
        return $this;
    }

    /**
     * Get open
     *
     * @return \bool
     */
    public function getOpen()
    {
        return $this->open;
    }

    /**
     * Set closed
     *
     * @param \bool $closed
     *
     * @return InvestPlan
     */
    public function setClosed(\bool $closed)
    {
        $this->closed = $closed;
    
        return $this;
    }

    /**
     * Get closed
     *
     * @return \bool
     */
    public function getClosed()
    {
        return $this->closed;
    }

    /**
     * Set warning
     *
     * @param \bool $warning
     *
     * @return InvestPlan
     */
    public function setWarning(\bool $warning)
    {
        $this->warning = $warning;
    
        return $this;
    }

    /**
     * Get warning
     *
     * @return \bool
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
     * Set user
     *
     * @param \AppBundle\Entity\Member $user
     *
     * @return InvestPlan
     */
    public function setUser(\AppBundle\Entity\Member $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\Member
     */
    public function getUser()
    {
        return $this->user;
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
