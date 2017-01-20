<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use AppBundle\Entity\ProductImage;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;



class InvestPlanController extends Controller {

	public function listAction(Request $request) {
		
		
	//	$myArray = $this->prepareQuery($request);
					
		
		$em = $this->getDoctrine()->getManager();
		
		$queryString = 'SELECT p
    FROM AppBundle:Member p';
		
		$isFirstElement = true;
		
		//$arrayKeys = array_keys($myArray);
	/*	foreach($arrayKeys as $singleKey) {
			
			if(!$isFirstElement) {
				$queryString = $queryString . " AND";
			} else {
				$isFirstElement = false;
			}
			
			$queryString = $queryString . " WHERE p." . $singleKey . " LIKE :" . $singleKey;
			
		}; */
		
		
		$query = $em->createQuery($queryString);
		
		/*
		foreach($arrayKeys as $singleKey) {
				
		$query->setParameter($singleKey, '%' . $myArray[$singleKey] . '%');
				
		} */
		
	
					
		$products = $query->getResult();

        echo var_dump($products);

        /*
		$filteredProducts = [];
		
		$priceLow = $request->get("priceLow");
		$priceHigh 	= $request->get("priceHigh");
		$maxDelivery 	= $request->get("maxDelivery");
		
		foreach($products as $singleProduct) {
			
			$priceFilterValid = false;
			$deliveryFilterValid = false;
			
			if($priceLow != null || $priceHigh != null) {
				
				 $price =	$singleProduct->getPrice();
				 
				 if($priceLow != null && $priceHigh == null) {
				 	
				 	if($price >= $priceLow) {
				 		
				 		$priceFilterValid = true;
				 			
				 	}
				 	
				 } else if  ($priceLow == null && $priceHigh != null) {
				 	
				 	if($price <= $priceHigh) {
				 		$priceFilterValid = true;
				 			
				 	}
				 	
				 } else if  ($priceLow != null && $priceHigh != null) {
				 	
				 	if($price >= $priceLow && $price <= $priceHigh) {
				 		
				 		$priceFilterValid = true;
				 			
				 	}
				 	
				 }
			} else {
				$priceFilterValid = true;
				
			}
			
			
			if($maxDelivery!= null) {
				
				if($maxDelivery <= $singleProduct->getDeliveryTime()) {
					$deliveryFilterValid = true;
				}
				
				
			} else {
				
				$deliveryFilterValid = true;
			}
			
			if($deliveryFilterValid && $priceFilterValid) {
				array_push($filteredProducts, $singleProduct);
				
			}
				
		
			
		}
				
	*/
		
		
			
		$jsonContent = $this->generateJSONContentByEntity($products);
			
		return new Response($jsonContent);
			
					
	
	}

    public function createAction(Request $request) {

        $params = json_decode(file_get_contents('php://input'),true);

        $investPlan = new InvestPlan();

        if (array_key_exists('website', $params)) {
           $investPlan->setWebsite($params["website"]);
        }

        if (array_key_exists('name', $params)) {
            $investPlan->setInvestmentname($params["name"]);
        }

        if (array_key_exists('user', $params)) {

            $memberController = $this->get('member_service');
            $member = $memberController.getSingleMemberAction($params["user"]);
            $investPlan->setMember($member);
        }



        if (array_key_exists('banner', $params)) {
         //TODO add to DB
        }

        if (array_key_exists('description', $params)) {
            $investPlan->setDescription($params["description"]);
        }

        if (array_key_exists('youtubeurl', $params)) {
            $investPlan->setYoutubelink($params["youtubeurl"]);
        }

        if (array_key_exists('runtime', $params)) {
            $investPlan->setRuntime($params["runtime"]);
        }

        if (array_key_exists('number', $params)) {
            $investPlan->setNumber($params["number"]);
        }

        if (array_key_exists('paytax', $params)) {
            $investPlan->setPaytax($params["paytax"]);
        }

        if (array_key_exists('roi', $params)) {
            $investPlan->setROI($params["roi"]);
        }

        if (array_key_exists('principal', $params)) {
            $investPlan->setPrincipal($params["principal"]);
        }

        if (array_key_exists('payInWallet', $params)) {
            $investPlan->setPayInWallet($params["payInWallet"]);
        }

        if (array_key_exists('payOutWallet', $params)) {
            $investPlan->setPayOutWallet($params["payOutWallet"]);
        }

        if (array_key_exists('amount', $params)) {
            $investPlan->setAmount($params["amount"]);
        }

        if (array_key_exists('date', $params)) {
            $investPlan->setDate($params["date"]);
        }

        if (array_key_exists('time', $params)) {
            $investPlan->setTime($params["time"]);
        }

        if (array_key_exists('comment', $params)) {
            $investPlan->setComment($params["comment"]);
        }

        if (array_key_exists('comment', $params)) {
            $investPlan->setComment($params["comment"]);
        }




          $em = $this->getDoctrine ()->getManager ();

        // tells Doctrine you want to (eventually) save the Product (no queries yet)

        $em->persist ( $investPlan );

        // actually executes the queries (i.e. the INSERT query)
        $em->flush ();











        //	$this->getRequest()->getSession()->setFlash('notice', "your_message");

        //return new Response("true");
        return $this->redirect('/fyf2/index.php/produkterstellung.html?addedProduct=true');


    }
	
	
	public function getSingleUserAction(Request $request) {
	
		
		$myArray = $this->prepareQuery($request);
	
		
			
		$repository = $this->getDoctrine()
		->getRepository('AppBundle:Product');
	
		$products = $repository->findOneBy($myArray);
		
		
		$jsonContent =  $this->generateJSONContentByEntity($products);
	
	
	
			return new Response($jsonContent);
	}
	


	
	
	public function getRefererRoute($request)
	{
		
	
		//look for the referer route
		$referer = $request->headers->get('referer');
		$lastPath = substr($referer, strpos($referer, $request->getBaseUrl()));
		$lastPath = str_replace($request->getBaseUrl(), '', $lastPath);
	
		$matcher = $this->get('router')->getMatcher();
		$parameters = $matcher->match($lastPath);
		$route = $parameters['_route'];
	
		return $route;
	}
	
	public function prepareQuery($request) {
		
		$myArray = [];
		
		$productID = $request->get("productID");
		$owner = $request->get("owner");
		$productName = $request->get("productName");
		$typeOfDelivery 	= $request->get("lieferArt");
		
		if($productID != null) {
			$myArray['id'] = $productID;
		}
		
		if($owner != null) {
			$myArray['owner'] = $owner;
		}
		

		if($owner != null) {
			$myArray['owner'] = $owner;
		}
		

		if($productName != null) {
			$myArray['name'] = $productName;
		}
		

		if($typeOfDelivery != null) {
			$myArray['deliveryType'] = $typeOfDelivery;
		}
		
	
		
		return $myArray;
		
	}
	
	public function generateJSONContentByEntity($object) {
		
		
		$normalizer = new ObjectNormalizer();
		$normalizer->setCircularReferenceHandler(function ($object2) {
		
		});
		
			$encoder = new JsonEncoder();
		
			$serializer = new Serializer(array($normalizer), array($encoder));
		
			$jsonContent = $serializer->serialize($object, 'json');
			
			return $jsonContent;
		
	}
}

