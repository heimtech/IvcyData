	<?php

// AjaxRequestClass.php

class ProductsService extends System

    {

    public function getProducts()

        {

        // Zugeh�rigen Aufruf pr�fen, siehe JS-Funktion im FE-Modul

        if ($this->Input->post('requestType') == 'searchProducts')

            {

          //  $this->import('Database'); // N�tig f�r Datenbankabfragen

            // hier kommen die n�tigen Funktionalit�ten

$result = array(
    "code" => "0",
    "msg" => "Success"
);
  



            exit;

            }

        }

    }

?>
