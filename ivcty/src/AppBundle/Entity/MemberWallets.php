<?php
/**
 * Created by PhpStorm.
 * User: UC8456
 * Date: 17.01.2017
 * Time: 16:39
 */
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\WalletProvider;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MemberWalletsRepository")
 * @ORM\Table(name="member_wallets")
 */
class MemberWallets
{
    /**
     * @ORM\Column(type="integer", length=10)
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
     * @ORM\ManyToOne(targetEntity="WalletProvider")
     * @ORM\JoinColumn(name="walletProvider", referencedColumnName="id", nullable=false)
     */
    private $walletProvider;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $money;

    /**
     * @ORM\OneToMany(targetEntity="InvestPlan", mappedBy="payInWallet", fetch="EAGER")
     */
     private $investmentsPayedIn;

    /**
     * @ORM\OneToMany(targetEntity="InvestPlan", mappedBy="payOutWallet", fetch="EAGER")
     */
    private $investmentsPayedOut;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->investmentsPayedIn = new \Doctrine\Common\Collections\ArrayCollection();
        $this->investmentsPayedOut = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @param string $member
     *
     * @return MemberWallets
     */
    public function setMember($member)
    {
        $this->member = $member;

        return $this;
    }

    /**
     * Get member
     *
     * @return string
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * Set walletProvider
     *
     * @param string $walletProvider
     *
     * @return MemberWallets
     */
    public function setWalletProvider($walletProvider)
    {
        $this->walletProvider = $walletProvider;

        return $this;
    }

    /**
     * Get walletProvider
     *
     * @return string
     */
    public function getWalletProvider()
    {
        return $this->walletProvider;
    }

    /**
     * Set money
     *
     * @param string $money
     *
     * @return MemberWallets
     */
    public function setMoney($money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * Get money
     *
     * @return string
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * Add investmentsPayedIn
     *
     * @param \AppBundle\Entity\InvestPlan $investmentsPayedIn
     *
     * @return MemberWallets
     */
    public function addInvestmentsPayedIn(\AppBundle\Entity\InvestPlan $investmentsPayedIn)
    {
        $this->investmentsPayedIn[] = $investmentsPayedIn;

        return $this;
    }

    /**
     * Remove investmentsPayedIn
     *
     * @param \AppBundle\Entity\InvestPlan $investmentsPayedIn
     */
    public function removeInvestmentsPayedIn(\AppBundle\Entity\InvestPlan $investmentsPayedIn)
    {
        $this->investmentsPayedIn->removeElement($investmentsPayedIn);
    }

    /**
     * Get investmentsPayedIn
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInvestmentsPayedIn()
    {
        return $this->investmentsPayedIn;
    }

    /**
     * Add investmentsPayedOut
     *
     * @param \AppBundle\Entity\InvestPlan $investmentsPayedOut
     *
     * @return MemberWallets
     */
    public function addInvestmentsPayedOut(\AppBundle\Entity\InvestPlan $investmentsPayedOut)
    {
        $this->investmentsPayedOut[] = $investmentsPayedOut;

        return $this;
    }

    /**
     * Remove investmentsPayedOut
     *
     * @param \AppBundle\Entity\InvestPlan $investmentsPayedOut
     */
    public function removeInvestmentsPayedOut(\AppBundle\Entity\InvestPlan $investmentsPayedOut)
    {
        $this->investmentsPayedOut->removeElement($investmentsPayedOut);
    }

    /**
     * Get investmentsPayedOut
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInvestmentsPayedOut()
    {
        return $this->investmentsPayedOut;
    }
}
