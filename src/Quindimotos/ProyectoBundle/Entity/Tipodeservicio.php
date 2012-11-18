<?php

namespace Quindimotos\ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quindimotos\ProyectoBundle\Entity\Tipodeservicio
 *
 * @ORM\Table(name="tipodeservicio")
 * @ORM\Entity
 */
class Tipodeservicio
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
     * @var float $preciobasico
     *
     * @ORM\Column(name="preciobasico", type="float", nullable=false)
     */
    private $preciobasico;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Solicitudserviciotecnico", mappedBy="tipodeservicio")
     */
    private $solicitudserviciotecnico;

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
     * @return Tipodeservicio
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
     * @return Tipodeservicio
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
     * Set preciobasico
     *
     * @param float $preciobasico
     * @return Tipodeservicio
     */
    public function setPreciobasico($preciobasico)
    {
        $this->preciobasico = $preciobasico;
    
        return $this;
    }

    /**
     * Get preciobasico
     *
     * @return float 
     */
    public function getPreciobasico()
    {
        return $this->preciobasico;
    }

    /**
     * Add solicitudserviciotecnico
     *
     * @param Quindimotos\ProyectoBundle\Entity\Solicitudserviciotecnico $solicitudserviciotecnico
     * @return Tipodeservicio
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
}