<?php

namespace Quindimotos\ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quindimotos\ProyectoBundle\Entity\Repuesto
 *
 * @ORM\Table(name="repuesto")
 * @ORM\Entity
 */
class Repuesto
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
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var string $descripcion
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=false)
     */
    private $descripcion;

    /**
     * @var float $valor
     *
     * @ORM\Column(name="valor", type="float", nullable=true)
     */
    private $valor;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Solicitudserviciotecnico", mappedBy="repuesto")
     */
    private $solicitudserviciotecnico;

    /**
     * @var Marcarepuesto
     *
     * @ORM\ManyToOne(targetEntity="Marcarepuesto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="MarcaRepuesto_id", referencedColumnName="id")
     * })
     */
    private $marcarepuesto;

    /**
     * @var Tiporepuesto
     *
     * @ORM\ManyToOne(targetEntity="Tiporepuesto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TipoRepuesto_id", referencedColumnName="id")
     * })
     */
    private $tiporepuesto;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->solicitudserviciotecnico = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     * @return Repuesto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Repuesto
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set valor
     *
     * @param float $valor
     * @return Repuesto
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    
        return $this;
    }

    /**
     * Get valor
     *
     * @return float 
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Add solicitudserviciotecnico
     *
     * @param Quindimotos\ProyectoBundle\Entity\Solicitudserviciotecnico $solicitudserviciotecnico
     * @return Repuesto
     */
    public function addSolicitudserviciotecnico(\Quindimotos\ProyectoBundle\Entity\Solicitudserviciotecnico $solicitudserviciotecnico)
    {
        $this->solicitudserviciotecnico[] = $solicitudserviciotecnico;
    
        return $this;
    }

    /**
     * Remove solicitudserviciotecnico
     *
     * @param Quindimotos\ProyectoBundle\Entity\Solicitudserviciotecnico $solicitudserviciotecnico
     */
    public function removeSolicitudserviciotecnico(\Quindimotos\ProyectoBundle\Entity\Solicitudserviciotecnico $solicitudserviciotecnico)
    {
        $this->solicitudserviciotecnico->removeElement($solicitudserviciotecnico);
    }

    /**
     * Get solicitudserviciotecnico
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getSolicitudserviciotecnico()
    {
        return $this->solicitudserviciotecnico;
    }

    /**
     * Set marcarepuesto
     *
     * @param Quindimotos\ProyectoBundle\Entity\Marcarepuesto $marcarepuesto
     * @return Repuesto
     */
    public function setMarcarepuesto(\Quindimotos\ProyectoBundle\Entity\Marcarepuesto $marcarepuesto = null)
    {
        $this->marcarepuesto = $marcarepuesto;
    
        return $this;
    }

    /**
     * Get marcarepuesto
     *
     * @return Quindimotos\ProyectoBundle\Entity\Marcarepuesto 
     */
    public function getMarcarepuesto()
    {
        return $this->marcarepuesto;
    }

    /**
     * Set tiporepuesto
     *
     * @param Quindimotos\ProyectoBundle\Entity\Tiporepuesto $tiporepuesto
     * @return Repuesto
     */
    public function setTiporepuesto(\Quindimotos\ProyectoBundle\Entity\Tiporepuesto $tiporepuesto = null)
    {
        $this->tiporepuesto = $tiporepuesto;
    
        return $this;
    }

    /**
     * Get tiporepuesto
     *
     * @return Quindimotos\ProyectoBundle\Entity\Tiporepuesto 
     */
    public function getTiporepuesto()
    {
        return $this->tiporepuesto;
    }
}