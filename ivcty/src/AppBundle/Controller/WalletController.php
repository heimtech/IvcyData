<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\MemberWallets;
use AppBundle\Entity\WalletProvider;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use AppBundle\Entity\ProductImage;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;


class WalletController extends Controller
{

    public function createUnexistingAction(Request $request)
    {


        //	$myArray = $this->prepareQuery($request);


        $params = json_decode(file_get_contents('php://input'), true);

        if (array_key_exists('user', $params)) {

            $userID = $params["user"];




            $repository =  $this->getDoctrine()->getManager()->getRepository('AppBundle:Member');

            $member = $repository->findOneById($userID);

            echo var_dump($member);

            $userWallets = $this->getUserWalletsAction($userID);


            // THIS ARE ALL WALLET PROVIDERS WHICH MYPM IS SUPPORTING
            $walletProvider = $this->getAllWalletProvider();


            // ITERATE THROUGH ALL WALLETPROVIDERS

            foreach ($walletProvider as &$singleProvider) {

                $userHasWallet = false;


                //ITERATE THROUGH ALL WALLETS OF USER
                foreach ($userWallets as &$singleUserWallet) {

                    $currentUserWalletProvider = $singleUserWallet->getWalletProvider();



                    if ($currentUserWalletProvider == $singleProvider) {

                        $userHasWallet = true;
                        break;
                    }






                }

                echo("user check for wallet: " . $singleProvider->getWalletProvider() . "result = " . $userHasWallet);



                if (!$userHasWallet) {

                    $this->createWalletForUser($singleProvider, $member);
                }

            }


            echo var_dump($userWallets);

        }


        return new Response("done");
    }

    /**
     *
     * Creates a Wallet for a single member by the member entity and a wallet provider entity
     * @param $pSingleProvider
     * @param $pMember
     */

    public function createWalletForUser($pSingleProvider, $pMember)
    {


       // $walletProvider = $this->getAllWalletProvider();

        $wallet = new MemberWallets();
        $wallet->setWalletProvider($pSingleProvider);
        $wallet->setMember($pMember->getId());
        $wallet->setMoney(0);

        $em = $this->getDoctrine()->getManager();

        // tells Doctrine you want to (eventually) save the Product (no queries yet)

        $em->persist($wallet);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();


    }

    /**
     * Gets all Wallets of a Member by its User ID
     * @param $pUserID
     * @return array
     */
    public function getUserWalletsAction($pUserID)
    {


        $myArray = [];
        $myArray["member"] = $pUserID;


        $repository = $this->getDoctrine()
            ->getRepository('AppBundle:MemberWallets');


        $userWallets = $repository->findAll($myArray);


        echo var_dump($userWallets);


        return $userWallets;
    }


    /**
     * Get all provider for Wallets like PayPal etd
     * @return array
     */
    public function getAllWalletProvider()
    {


        $repository = $this->getDoctrine()
            ->getRepository('AppBundle:WalletProvider');
        $walletProvider = $repository->findAll();
        return $walletProvider;
    }


}

