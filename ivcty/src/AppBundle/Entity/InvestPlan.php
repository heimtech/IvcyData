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

    /** @Column(type="datetime") */
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

}