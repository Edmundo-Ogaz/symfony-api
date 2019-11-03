<?php

namespace App\EntityCarga;

use Doctrine\ORM\Mapping as ORM;

/**
 * CometidoNacional
 *
 * @ORM\Table(name="cometido_nacional", indexes={@ORM\Index(name="IDX_A1C55EB06A540E", columns={"id_estado"})})
 * @ORM\Entity
 */
class CometidoNacional
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cometido_nacional_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_caso", type="integer", nullable=true)
     */
    private $idCaso;

    /**
     * @var string
     *
     * @ORM\Column(name="rut", type="string", length=12, nullable=false, options={"fixed"=true})
     */
    private $rut;

    /**
     * @var string
     *
     * @ORM\Column(name="motivo", type="text", nullable=false)
     */
    private $motivo;

    /**
     * @var bool
     *
     * @ORM\Column(name="pasaje_aereo", type="boolean", nullable=false)
     */
    private $pasajeAereo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creacion", type="datetime", nullable=false)
     */
    private $fechaCreacion;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_modificacion", type="datetime", nullable=true)
     */
    private $fechaModificacion;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_envio", type="datetime", nullable=true)
     */
    private $fechaEnvio;

    /**
     * @var \CometidoEstados
     *
     * @ORM\ManyToOne(targetEntity="CometidoEstados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_estado", referencedColumnName="id_estado")
     * })
     */
    private $idEstado;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TipoGastosCometidos", inversedBy="idCometido")
     * @ORM\JoinTable(name="cometido_nacional_gastos",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_cometido", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_tipo_gasto", referencedColumnName="id_tipo")
     *   }
     * )
     */
    private $idTipoGasto;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idTipoGasto = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
