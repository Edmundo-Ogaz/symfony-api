<?php

namespace App\EntityCarga;

use Doctrine\ORM\Mapping as ORM;

/**
 * CometidoNacionalGestion
 *
 * @ORM\Table(name="cometido_nacional_gestion", indexes={@ORM\Index(name="IDX_334C9A16C297D64", columns={"cometido_nacional_id"})})
 * @ORM\Entity
 */
class CometidoNacionalGestion
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cometido_nacional_gestion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="solicitud_verificar_disponibilidad_presupuestaria_observacion", type="text", nullable=true)
     */
    private $solicitudVerificarDisponibilidadPresupuestariaObservacion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="solicitud_evaluar_solicitud_jefatura_observacion", type="text", nullable=true)
     */
    private $solicitudEvaluarSolicitudJefaturaObservacion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="solicitud_evaluar_solicitud_jefatura_usuario", type="text", nullable=true)
     */
    private $solicitudEvaluarSolicitudJefaturaUsuario;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="solicitud_evaluar_solicitud_jefatura_fecha", type="datetime", nullable=true)
     */
    private $solicitudEvaluarSolicitudJefaturaFecha;

    /**
     * @var string|null
     *
     * @ORM\Column(name="solicitud_verificar_disponibilidad_presupuestaria_usuario", type="text", nullable=true)
     */
    private $solicitudVerificarDisponibilidadPresupuestariaUsuario;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="solicitud_verificar_disponibilidad_presupuestaria_fecha", type="datetime", nullable=true)
     */
    private $solicitudVerificarDisponibilidadPresupuestariaFecha;

    /**
     * @var int|null
     *
     * @ORM\Column(name="solicitud_preafectar_id", type="integer", nullable=true)
     */
    private $solicitudPreafectarId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="solicitud_preafectar_folio", type="integer", nullable=true)
     */
    private $solicitudPreafectarFolio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="solicitud_preafectar_imputacion", type="text", nullable=true)
     */
    private $solicitudPreafectarImputacion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="solicitud_preafectar_memo", type="text", nullable=true)
     */
    private $solicitudPreafectarMemo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="solicitud_preafectar_observacion", type="text", nullable=true)
     */
    private $solicitudPreafectarObservacion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="solicitud_preafectar_usuario", type="text", nullable=true)
     */
    private $solicitudPreafectarUsuario;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="solicitud_preafectar_fecha", type="datetime", nullable=true)
     */
    private $solicitudPreafectarFecha;

    /**
     * @var string|null
     *
     * @ORM\Column(name="solicitud_preafectar_preafectacion_status", type="text", nullable=true)
     */
    private $solicitudPreafectarPreafectacionStatus;

    /**
     * @var \CometidoNacional
     *
     * @ORM\ManyToOne(targetEntity="CometidoNacional")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cometido_nacional_id", referencedColumnName="id")
     * })
     */
    private $cometidoNacional;


}
