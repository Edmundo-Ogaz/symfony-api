<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\EntityCarga\CometidoNacional;
use Doctrine\Common\Persistence\ObjectManager;

class CometidoNacionalesController extends AbstractController
{
    public function __construct(ObjectManager $objectManager, LoggerInterface $logger)
    {
        $this->objectManager = $objectManager;
        $this->logger = $logger;
    }

    public function get($id)
    {
        $cometidoNacional = $this->objectManager
            ->getRepository(CometidoNacional::class)
            ->find($id);

        if (!$cometidoNacional) {
            throw $this->createNotFoundException(
                'No cometido nacional found for id '.$id
            );
        }

        $this->logger->info('cometidonacionales: ' . json_encode($cometidoNacional));
        return $response = new JsonResponse(['rut' => $cometidoNacional->getRut()]);
    }

    public function getByRutAndEstado(Request $request)
    {
        $rut = $request->query->get('rut');
        $estado = $request->query->get('estado');

        $this->logger->info('Cometido nacionales controller request:' 
        . ' rut: ' . $rut
        . ' estado: ' . $estado);

        $cometidoNacional = $this->objectManager
            ->getRepository(CometidoNacional::class)
            ->findOneBy(array('rut' => $rut, 'idEstado' => $estado));

        if (!$cometidoNacional) {
            throw $this->createNotFoundException(
                'No cometido nacional found for rut '.$rut.' and estado '.$estado
            );
        }

        $this->logger->info('cometidonacionales: ' . json_encode($cometidoNacional));

        return $response = new JsonResponse(['rut' => $cometidoNacional->getRut()]);
    }

    
}