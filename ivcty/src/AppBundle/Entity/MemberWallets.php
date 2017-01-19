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
     * @ORM\Column(type="string", length=64)
     */
    private $member;

    /**
     * @ORM\Column(type="string", length=64)
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


}