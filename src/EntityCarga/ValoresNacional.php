<?php

namespace App\EntityCarga;

use Doctrine\ORM\Mapping as ORM;

/**
 * ValoresNacional
 *
 * @ORM\Table(name="valores_nacional", indexes={@ORM\Index(name="IDX_A649601B36CF526F", columns={"id_resolucion_valor"})})
 * @ORM\Entity
 */
class ValoresNacional
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="valores_nacional_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="grado", type="bigint", nullable=true)
     */
    private $grado;

    /**
     * @var float|null
     *
     * @ORM\Column(name="valor_40", type="float", precision=10, scale=0, nullable=true)
     */
    private $valor40;

    /**
     * @var float|null
     *
     * @ORM\Column(name="valor_60", type="float", precision=10, scale=0, nullable=true)
     */
    private $valor60;

    /**
     * @var float|null
     *
     * @ORM\Column(name="valor_100", type="float", precision=10, scale=0, nullable=true)
     */
    private $valor100;

    /**
     * @var \ResolucionValores
     *
     * @ORM\ManyToOne(targetEntity="ResolucionValores")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_resolucion_valor", referencedColumnName="id")
     * })
     */
    private $idResolucionValor;


}
