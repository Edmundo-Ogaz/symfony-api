<?php

namespace App\EntityCarga;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoGastosCometidos
 *
 * @ORM\Table(name="tipo_gastos_cometidos")
 * @ORM\Entity
 */
class TipoGastosCometidos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_tipo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tipo_gastos_cometidos_id_tipo_seq", allocationSize=1, initialValue=1)
     */
    private $idTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_gasto", type="string", length=50, nullable=false)
     */
    private $tipoGasto;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CometidoNacional", mappedBy="idTipoGasto")
     */
    private $idCometido;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idCometido = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
