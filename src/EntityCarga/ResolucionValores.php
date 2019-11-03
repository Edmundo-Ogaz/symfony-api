<?php

namespace App\EntityCarga;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResolucionValores
 *
 * @ORM\Table(name="resolucion_valores")
 * @ORM\Entity
 */
class ResolucionValores
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="resolucion_valores_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_inicio", type="date", nullable=true)
     */
    private $fechaInicio;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_termino", type="date", nullable=true)
     */
    private $fechaTermino;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="estado", type="boolean", nullable=true)
     */
    private $estado;


}
