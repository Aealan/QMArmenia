<?php

namespace Quindimotos\ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quindimotos\ProyectoBundle\Entity\Solicitudserviciotecnico
 *
 * @ORM\Table(name="solicitudserviciotecnico")
 * @ORM\Entity
 */
class Solicitudserviciotecnico
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime $fechaingreso
     *
     * @ORM\Column(name="fechaIngreso", type="datetime", nullable=true)
     */
    private $fechaingreso;

    /**
     * @var \DateTime $fechaentrega
     *
     * @ORM\Column(name="fechaEntrega", type="datetime", nullable=true)
     */
    private $fechaentrega;

    /**
     * @var string $observaciones
     *
     * @ORM\Column(name="observaciones", type="string", length=255, nullable=true)
     */
    private $observaciones;

    /**
     * @var integer $recividopor
     *
     * @ORM\Column(name="recividoPor", type="integer", nullable=true)
     */
    private $recividopor;

    /**
     * @var integer $entregadopor
     *
     * @ORM\Column(name="entregadoPor", type="integer", nullable=true)
     */
    private $entregadopor;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Repuesto", inversedBy="solicitudserviciotecnico")
     * @ORM\JoinTable(name="repuesto_has_solicitudserviciotecnico",
     *   joinColumns={
     *     @ORM\JoinColumn(name="SolicitudServicioTecnico_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Repuesto_id", referencedColumnName="id")
     *   }
     * )
     */
    private $repuesto;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Tipodeservicio", inversedBy="solicitudserviciotecnico")
     * @ORM\JoinTable(name="tipodeservicio_has_solicitudserviciotecnico",
     *   joinColumns={
     *     @ORM\JoinColumn(name="SolicitudServicioTecnico_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="TipoDeServicio_id", referencedColumnName="id")
     *   }
     * )
     */
    private $tipodeservicio;

    /**
     * @var Cliente
     *
     * @ORM\ManyToOne(targetEntity="Cliente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Cliente_id", referencedColumnName="id")
     * })
     */
    private $cliente;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->repuesto = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tipodeservicio = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fechaingreso
     *
     * @param \DateTime $fechaingreso
     * @return Solicitudserviciotecnico
     */
    public function setFechaingreso($fechaingreso)
    {
        $this->fechaingreso = $fechaingreso;
    
        return $this;
    }

    /**
     * Get fechaingreso
     *
     * @return \DateTime 
     */
    public function getFechaingreso()
    {
        return $this->fechaingreso;
    }

    /**
     * Set fechaentrega
     *
     * @param \DateTime $fechaentrega
     * @return Solicitudserviciotecnico
     */
    public function setFechaentrega($fechaentrega)
    {
        $this->fechaentrega = $fechaentrega;
    
        return $this;
    }

    /**
     * Get fechaentrega
     *
     * @return \DateTime 
     */
    public function getFechaentrega()
    {
        return $this->fechaentrega;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Solicitudserviciotecnico
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
    
        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set recividopor
     *
     * @param integer $recividopor
     * @return Solicitudserviciotecnico
     */
    public function setRecividopor($recividopor)
    {
        $this->recividopor = $recividopor;
    
        return $this;
    }

    /**
     * Get recividopor
     *
     * @return integer 
     */
    public function getRecividopor()
    {
        return $this->recividopor;
    }

    /**
     * Set entregadopor
     *
     * @param integer $entregadopor
     * @return Solicitudserviciotecnico
     */
    public function setEntregadopor($entregadopor)
    {
        $this->entregadopor = $entregadopor;
    
        return $this;
    }

    /**
     * Get entregadopor
     *
     * @return integer 
     */
    public function getEntregadopor()
    {
        return $this->entregadopor;
    }

    /**
     * Add repuesto
     *
     * @param Quindimotos\ProyectoBundle\Entity\Repuesto $repuesto
     * @return Solicitudserviciotecnico
     */
    public function addRepuesto(\Quindimotos\ProyectoBundle\Entity\Repuesto $repuesto)
    {
        $this->repuesto[] = $repuesto;
    
        return $this;
    }

    /**
     * Remove repuesto
     *
     * @param Quindimotos\ProyectoBundle\Entity\Repuesto $repuesto
     */
    public function removeRepuesto(\Quindimotos\ProyectoBundle\Entity\Repuesto $repuesto)
    {
        $this->repuesto->removeElement($repuesto);
    }

    /**
     * Get repuesto
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getRepuesto()
    {
        return $this->repuesto;
    }

    /**
     * Add tipodeservicio
     *
     * @param Quindimotos\ProyectoBundle\Entity\Tipodeservicio $tipodeservicio
     * @return Solicitudserviciotecnico
     */
    public function addTipodeservicio(\Quindimotos\ProyectoBundle\Entity\Tipodeservicio $tipodeservicio)
    {
        $this->tipodeservicio[] = $tipodeservicio;
    
        return $this;
    }

    /**
     * Remove tipodeservicio
     *
     * @param Quindimotos\ProyectoBundle\Entity\Tipodeservicio $tipodeservicio
     */
    public function removeTipodeservicio(\Quindimotos\ProyectoBundle\Entity\Tipodeservicio $tipodeservicio)
    {
        $this->tipodeservicio->removeElement($tipodeservicio);
    }

    /**
     * Get tipodeservicio
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getTipodeservicio()
    {
        return $this->tipodeservicio;
    }

    /**
     * Set cliente
     *
     * @param Quindimotos\ProyectoBundle\Entity\Cliente $cliente
     * @return Solicitudserviciotecnico
     */
    public function setCliente(\Quindimotos\ProyectoBundle\Entity\Cliente $cliente = null)
    {
        $this->cliente = $cliente;
    
        return $this;
    }

    /**
     * Get cliente
     *
     * @return Quindimotos\ProyectoBundle\Entity\Cliente 
     */
    public function getCliente()
    {
        return $this->cliente;
    }
}