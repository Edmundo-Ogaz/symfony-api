<?php
// tests/Controller/CometidoNacionalesControllerTest.php
namespace App\Tests\Controller;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Psr\Log\LoggerInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\Persistence\ObjectRepository;

use App\Controller\CometidoNacionalesController;
use App\EntityCarga\CometidoNacional;

class CometidoNacionalesControllerTest extends TestCase
{
    public function testGet()
    {
        $cometidoNacional = new CometidoNacional();
        $cometidoNacional->setRut("15805886-3");

        $cometidoNacionalRepository = $this->createMock(ObjectRepository::class);
        $cometidoNacionalRepository->expects($this->any())
            ->method('find')
            ->willReturn($cometidoNacional);
        $objectManager = $this->createMock(ObjectManager::class);
        $objectManager->expects($this->any())
            ->method('getRepository')
            ->willReturn($cometidoNacionalRepository);

        $loggerInterface = $this->createMock(LoggerInterface::class);
        $loggerInterface->expects($this->any())
            ->method('info')
            ->willReturn(null);

        $cometidoNacionalesController = new CometidoNacionalesController($objectManager, $loggerInterface);
        $this->assertEquals("{\"rut\":\"15805886-3\"}", $cometidoNacionalesController->get(11)->getContent());
    }

    public function testGetByRutAndEstado()
    {
        $cometidoNacional = new CometidoNacional();
        $cometidoNacional->setRut("15805886-3");

        $cometidoNacionalRepository = $this->createMock(ObjectRepository::class);
        $cometidoNacionalRepository->expects($this->any())
            ->method('findOneBy')
            ->willReturn($cometidoNacional);
        $objectManager = $this->createMock(ObjectManager::class);
        $objectManager->expects($this->any())
            ->method('getRepository')
            ->willReturn($cometidoNacionalRepository);

        $loggerInterface = $this->createMock(LoggerInterface::class);
        $loggerInterface->expects($this->any())
            ->method('info')
            ->willReturn(null);
        
        $request = new Request();
        $request->initialize(['rut' => '15805886-3', 'estado' => '2']);

        $cometidoNacionalesController = new CometidoNacionalesController($objectManager, $loggerInterface);
        $this->assertEquals("{\"rut\":\"15805886-3\"}", $cometidoNacionalesController->getByRutAndEstado($request)->getContent());
    }
}