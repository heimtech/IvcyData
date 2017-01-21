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
 * @ORM\Table(name="walletprovider")
 */
class WalletProvider
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
    private $walletProvider;

    /**
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    private $walletIcon;


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
     * Set walletProvider
     *
     * @param string $walletProvider
     *
     * @return WalletProvider
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
     * Set walletIcon
     *
     * @param string $walletIcon
     *
     * @return WalletProvider
     */
    public function setWalletIcon($walletIcon)
    {
        $this->walletIcon = $walletIcon;

        return $this;
    }

    /**
     * Get walletIcon
     *
     * @return string
     */
    public function getWalletIcon()
    {
        return $this->walletIcon;
    }
}
