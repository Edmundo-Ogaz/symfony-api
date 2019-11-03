<?php

namespace App\EntityCarga;

use Doctrine\ORM\Mapping as ORM;

/**
 * DistribucionGeografica
 *
 * @ORM\Table(name="distribucion_geografica")
 * @ORM\Entity
 */
class DistribucionGeografica
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="distribucion_geografica_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="region", type="integer", nullable=true)
     */
    private $region;

    /**
     * @var int|null
     *
     * @ORM\Column(name="provincia", type="integer", nullable=true)
     */
    private $provincia;

    /**
     * @var int|null
     *
     * @ORM\Column(name="comuna", type="integer", nullable=true)
     */
    private $comuna;

    /**
     * @var string|null
     *
     * @ORM\Column(name="glosa", type="string", length=255, nullable=true)
     */
    private $glosa;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nivel", type="integer", nullable=true)
     */
    private $nivel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="orden", type="integer", nullable=true)
     */
    private $orden;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="estadoregistro", type="boolean", nullable=true)
     */
    private $estadoregistro;


}
