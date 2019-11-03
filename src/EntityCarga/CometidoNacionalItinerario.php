<?php

namespace App\EntityCarga;

use Doctrine\ORM\Mapping as ORM;

/**
 * CometidoNacionalItinerario
 *
 * @ORM\Table(name="cometido_nacional_itinerario", indexes={@ORM\Index(name="IDX_1E466D1150F236A7", columns={"id_cometido_nacional"}), @ORM\Index(name="IDX_1E466D114A472DD5", columns={"id_distribucion"})})
 * @ORM\Entity
 */
class CometidoNacionalItinerario
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_itinerario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cometido_nacional_itinerario_id_itinerario_seq", allocationSize=1, initialValue=1)
     */
    private $idItinerario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="date", nullable=false)
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_termino", type="date", nullable=false)
     */
    private $fechaTermino;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora_inicio", type="time", nullable=false)
     */
    private $horaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora_termino", type="time", nullable=false)
     */
    private $horaTermino;

    /**
     * @var string|null
     *
     * @ORM\Column(name="detalle", type="text", nullable=true)
     */
    private $detalle;

    /**
     * @var \CometidoNacional
     *
     * @ORM\ManyToOne(targetEntity="CometidoNacional")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cometido_nacional", referencedColumnName="id")
     * })
     */
    private $idCometidoNacional;

    /**
     * @var \DistribucionGeografica
     *
     * @ORM\ManyToOne(targetEntity="DistribucionGeografica")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_distribucion", referencedColumnName="id")
     * })
     */
    private $idDistribucion;


}
