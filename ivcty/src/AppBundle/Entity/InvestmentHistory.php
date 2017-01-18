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

    /** @Column(type="datetime") */
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
     * @ORM\Column(type="bool")
     */
    private $deleteFlag;


}