<?php

namespace Quindimotos\ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quindimotos\ProyectoBundle\Entity\Moto
 *
 * @ORM\Table(name="moto")
 * @ORM\Entity
 */
class Moto
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
     * @var string $placa
     *
     * @ORM\Column(name="placa", type="string", length=20, nullable=false)
     */
    private $placa;

    /**
     * @var string $color
     *
     * @ORM\Column(name="color", type="string", length=20, nullable=false)
     */
    private $color;

    /**
     * @var string $modelo
     *
     * @ORM\Column(name="modelo", type="string", length=45, nullable=false)
     */
    private $modelo;

    /**
     * @var integer $kilometraje
     *
     * @ORM\Column(name="kilometraje", type="integer", nullable=false)
     */
    private $kilometraje;

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
     * @var Marca
     *
     * @ORM\ManyToOne(targetEntity="Marca")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Marca_id", referencedColumnName="id")
     * })
     */
    private $marca;

    /**
     * @var Tipomoto
     *
     * @ORM\ManyToOne(targetEntity="Tipomoto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TipoMoto_id", referencedColumnName="id")
     * })
     */
    private $tipomoto;



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
     * Set placa
     *
     * @param string $placa
     * @return Moto
     */
    public function setPlaca($placa)
    {
        $this->placa = $placa;
    
        return $this;
    }

    /**
     * Get placa
     *
     * @return string 
     */
    public function getPlaca()
    {
        return $this->placa;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return Moto
     */
    public function setColor($color)
    {
        $this->color = $color;
    
        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set modelo
     *
     * @param string $modelo
     * @return Moto
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    
        return $this;
    }

    /**
     * Get modelo
     *
     * @return string 
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set kilometraje
     *
     * @param integer $kilometraje
     * @return Moto
     */
    public function setKilometraje($kilometraje)
    {
        $this->kilometraje = $kilometraje;
    
        return $this;
    }

    /**
     * Get kilometraje
     *
     * @return integer 
     */
    public function getKilometraje()
    {
        return $this->kilometraje;
    }

    /**
     * Set cliente
     *
     * @param Quindimotos\ProyectoBundle\Entity\Cliente $cliente
     * @return Moto
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

    /**
     * Set marca
     *
     * @param Quindimotos\ProyectoBundle\Entity\Marca $marca
     * @return Moto
     */
    public function setMarca(\Quindimotos\ProyectoBundle\Entity\Marca $marca = null)
    {
        $this->marca = $marca;
    
        return $this;
    }

    /**
     * Get marca
     *
     * @return Quindimotos\ProyectoBundle\Entity\Marca 
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set tipomoto
     *
     * @param Quindimotos\ProyectoBundle\Entity\Tipomoto $tipomoto
     * @return Moto
     */
    public function setTipomoto(\Quindimotos\ProyectoBundle\Entity\Tipomoto $tipomoto = null)
    {
        $this->tipomoto = $tipomoto;
    
        return $this;
    }

    /**
     * Get tipomoto
     *
     * @return Quindimotos\ProyectoBundle\Entity\Tipomoto 
     */
    public function getTipomoto()
    {
        return $this->tipomoto;
    }
}