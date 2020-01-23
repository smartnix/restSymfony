<?php

namespace App\Controller\Rentasmunicipales;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\ApiController\ApiController;

class tiposConceptosController extends ApiController
{
    
    public function listarTipoConceptos()
    {
        return $this->respond([
            [
                'title' => 'The Princess Bride',
                'count' => 0
            ]
        ]);
    }
}
