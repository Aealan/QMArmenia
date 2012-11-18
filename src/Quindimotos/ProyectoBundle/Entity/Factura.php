<?php

namespace Quindimotos\ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quindimotos\ProyectoBundle\Entity\Factura
 *
 * @ORM\Table(name="factura")
 * @ORM\Entity
 */
class Factura
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
     * @var \DateTime $fechadeexp
     *
     * @ORM\Column(name="fechadeExp", type="datetime", nullable=false)
     */
    private $fechadeexp;

    /**
     * @var float $valorafacturar
     *
     * @ORM\Column(name="valoraFacturar", type="float", nullable=false)
     */
    private $valorafacturar;

    /**
     * @var float $iva
     *
     * @ORM\Column(name="iva", type="float", nullable=false)
     */
    private $iva;

    /**
     * @var float $total
     *
     * @ORM\Column(name="total", type="float", nullable=false)
     */
    private $total;

    /**
     * @var Solicitudserviciotecnico
     *
     * @ORM\ManyToOne(targetEntity="Solicitudserviciotecnico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SolicitudServicioTecnico_id", referencedColumnName="id")
     * })
     */
    private $solicitudserviciotecnico;



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
     * Set fechadeexp
     *
     * @param \DateTime $fechadeexp
     * @return Factura
     */
    public function setFechadeexp($fechadeexp)
    {
        $this->fechadeexp = $fechadeexp;
    
        return $this;
    }

    /**
     * Get fechadeexp
     *
     * @return \DateTime 
     */
    public function getFechadeexp()
    {
        return $this->fechadeexp;
    }

    /**
     * Set valorafacturar
     *
     * @param float $valorafacturar
     * @return Factura
     */
    public function setValorafacturar($valorafacturar)
    {
        $this->valorafacturar = $valorafacturar;
    
        return $this;
    }

    /**
     * Get valorafacturar
     *
     * @return float 
     */
    public function getValorafacturar()
    {
        return $this->valorafacturar;
    }

    /**
     * Set iva
     *
     * @param float $iva
     * @return Factura
     */
    public function setIva($iva)
    {
        $this->iva = $iva;
    
        return $this;
    }

    /**
     * Get iva
     *
     * @return float 
     */
    public function getIva()
    {
        return $this->iva;
    }

    /**
     * Set total
     *
     * @param float $total
     * @return Factura
     */
    public function setTotal($total)
    {
        $this->total = $total;
    
        return $this;
    }

    /**
     * Get total
     *
     * @return float 
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set solicitudserviciotecnico
     *
     * @param Quindimotos\ProyectoBundle\Entity\Solicitudserviciotecnico $solicitudserviciotecnico
     * @return Factura
     */
    public function setSolicitudserviciotecnico(\Quindimotos\ProyectoBundle\Entity\Solicitudserviciotecnico $solicitudserviciotecnico = null)
    {
        $this->solicitudserviciotecnico = $solicitudserviciotecnico;
    
        return $this;
    }

    /**
     * Get solicitudserviciotecnico
     *
     * @return Quindimotos\ProyectoBundle\Entity\Solicitudserviciotecnico 
     */
    public function getSolicitudserviciotecnico()
    {
        return $this->solicitudserviciotecnico;
    }
}