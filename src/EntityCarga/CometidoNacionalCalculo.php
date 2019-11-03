<?php

namespace App\EntityCarga;

use Doctrine\ORM\Mapping as ORM;

/**
 * CometidoNacionalCalculo
 *
 * @ORM\Table(name="cometido_nacional_calculo", indexes={@ORM\Index(name="IDX_A82F9908C1C591F", columns={"id_cometido"}), @ORM\Index(name="IDX_A82F990B46674D3", columns={"id_itinerario"})})
 * @ORM\Entity
 */
class CometidoNacionalCalculo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_calculo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cometido_nacional_calculo_id_calculo_seq", allocationSize=1, initialValue=1)
     */
    private $idCalculo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dia", type="date", nullable=false)
     */
    private $dia;

    /**
     * @var int|null
     *
     * @ORM\Column(name="valor", type="integer", nullable=true)
     */
    private $valor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="porcentaje_cometido", type="integer", nullable=true)
     */
    private $porcentajeCometido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_registro", type="datetime", nullable=false)
     */
    private $fechaRegistro;

    /**
     * @var \CometidoNacional
     *
     * @ORM\ManyToOne(targetEntity="CometidoNacional")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cometido", referencedColumnName="id")
     * })
     */
    private $idCometido;

    /**
     * @var \CometidoNacionalItinerario
     *
     * @ORM\ManyToOne(targetEntity="CometidoNacionalItinerario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_itinerario", referencedColumnName="id_itinerario")
     * })
     */
    private $idItinerario;


}
