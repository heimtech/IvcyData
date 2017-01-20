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
echo var_dump($params);


        $website = $params["website"];
        echo var_dump($website);

        echo var_dump($request);

        $youtube = $request->request->get ( "youtubeurl" );
      echo var_dump($youtube);

        $params = json_decode(file_get_contents('php://input'),true);


        $investPlan = new InvestPlan ();

        $em = $this->getDoctrine ()->getManager ();

        // tells Doctrine you want to (eventually) save the Product (no queries yet)

        $em->persist ( $investPlan );

        // actually executes the queries (i.e. the INSERT query)
        $em->flush ();

        $productID = $investPlan->getId ();


        $file1 = $request->files->get ( "file1" );
        $file2 = $request->files->get ( "file2" );
        $file3 = $request->files->get ( "file3" );
        $file4 = $request->files->get ( "file4" );
        $file5 = $request->files->get ( "file5" );


        if ($file1 != null) {
            $fileName1 = $this->saveProductImage ( $file1, $productID );
            if ($fileName1 != null) {
                $this->persistProductImage ( $fileName1, $em, $product );
            }
        }
        if ($file2 != null) {
            $fileName2 = $this->saveProductImage ( $file2, $productID );
            if ($fileName2 != null) {
                $this->persistProductImage ( $fileName2, $em, $product );
            }
        }
        if ($file3 != null) {
            $fileName3 = $this->saveProductImage ( $file3, $productID );
            if ($fileName3 != null) {
                $this->persistProductImage ( $fileName3, $em, $product );
            }
        }
        if ($file4 != null) {
            $fileName4 = $this->saveProductImage ( $file4, $productID );
            if ($fileName4 != null) {
                $this->persistProductImage ( $fileName4, $em, $product );
            }
        }
        if ($file5 != null) {
            $fileName5 = $this->saveProductImage ( $file5, $productID );
            if ($fileName5 != null) {
                $this->persistProductImage ( $fileName5, $em, $product );
            }
        }


        $productName = $request->request->get ( "productName" );
        $price = $request->request->get ( "price" );
        $quantityOfPieces = $request->request->get ( "quantityOfPieces" );
        $lieferArt = $request->request->get ( "lieferArt" );
        $lieferZeit = $request->request->get ( "deliveryTime" );
        $typeOfPackage = $request->request->get ( "typeOfPackage" );
        $quantityCategory = $request->request->get ( "quantityCategory" );
        $shortDescription = $request->request->get ( "shortDescription" );
        $description = $request->request->get ( "description" );

        $owner = $request->request->get ( "userID" );


        $product->setName ( $productName );
        $product->setPrice ( $price );
        $product->setDeliveryTime ( $lieferZeit );
        $product->setDeliveryTimeType ( "Tage" );
        $product->setDeliveryType ( $lieferArt );
        $product->setQuantity ( $quantityOfPieces );
        $product->setPackaging ( $typeOfPackage);
        $product->setQuantityCategory($quantityCategory);
        $product->setDescription($description);
        $product->setShortDescription($shortDescription);

        $product->setOwner ( $owner );

        $em->persist ( $product );

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

