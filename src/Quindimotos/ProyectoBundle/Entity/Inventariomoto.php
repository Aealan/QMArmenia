<?php

namespace Quindimotos\ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quindimotos\ProyectoBundle\Entity\Inventariomoto
 *
 * @ORM\Table(name="inventariomoto")
 * @ORM\Entity
 */
class Inventariomoto
{
    /**
     * @var string $id
     *
     * @ORM\Column(name="id", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $espejos
     *
     * @ORM\Column(name="espejos", type="string", length=20, nullable=false)
     */
    private $espejos;

    /**
     * @var string $direccionales
     *
     * @ORM\Column(name="direccionales", type="string", length=20, nullable=false)
     */
    private $direccionales;

    /**
     * @var string $tapaslaterales
     *
     * @ORM\Column(name="tapaslaterales", type="string", length=20, nullable=false)
     */
    private $tapaslaterales;

    /**
     * @var string $sillin
     *
     * @ORM\Column(name="sillin", type="string", length=20, nullable=false)
     */
    private $sillin;

    /**
     * @var string $tabacos
     *
     * @ORM\Column(name="tabacos", type="string", length=20, nullable=false)
     */
    private $tabacos;

    /**
     * @var string $stop
     *
     * @ORM\Column(name="stop", type="string", length=20, nullable=false)
     */
    private $stop;

    /**
     * @var string $gatos
     *
     * @ORM\Column(name="gatos", type="string", length=20, nullable=false)
     */
    private $gatos;

    /**
     * @var string $reflectivas
     *
     * @ORM\Column(name="reflectivas", type="string", length=20, nullable=false)
     */
    private $reflectivas;

    /**
     * @var string $tapatanqueaceite
     *
     * @ORM\Column(name="tapatanqueaceite", type="string", length=20, nullable=false)
     */
    private $tapatanqueaceite;

    /**
     * @var string $emblemas
     *
     * @ORM\Column(name="emblemas", type="string", length=20, nullable=false)
     */
    private $emblemas;

    /**
     * @var string $parrillas
     *
     * @ORM\Column(name="parrillas", type="string", length=20, nullable=false)
     */
    private $parrillas;

    /**
     * @var string $luzdelantera
     *
     * @ORM\Column(name="luzdelantera", type="string", length=20, nullable=false)
     */
    private $luzdelantera;

    /**
     * @var string $pito
     *
     * @ORM\Column(name="pito", type="string", length=20, nullable=false)
     */
    private $pito;

    /**
     * @var string $bateria
     *
     * @ORM\Column(name="bateria", type="string", length=20, nullable=false)
     */
    private $bateria;

    /**
     * @var string $velocimetro
     *
     * @ORM\Column(name="velocimetro", type="string", length=20, nullable=false)
     */
    private $velocimetro;

    /**
     * @var string $guardafango
     *
     * @ORM\Column(name="guardafango", type="string", length=20, nullable=false)
     */
    private $guardafango;

    /**
     * @var string $juegodeherramientas
     *
     * @ORM\Column(name="juegodeherramientas", type="string", length=20, nullable=false)
     */
    private $juegodeherramientas;

    /**
     * @var string $llaves
     *
     * @ORM\Column(name="llaves", type="string", length=20, nullable=false)
     */
    private $llaves;

    /**
     * @var string $tanque
     *
     * @ORM\Column(name="tanque", type="string", length=20, nullable=false)
     */
    private $tanque;

    /**
     * @var string $manual
     *
     * @ORM\Column(name="manual", type="string", length=20, nullable=false)
     */
    private $manual;

    /**
     * @var string $llantas
     *
     * @ORM\Column(name="llantas", type="string", length=20, nullable=false)
     */
    private $llantas;

    /**
     * @var Moto
     *
     * @ORM\ManyToOne(targetEntity="Moto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Moto_id", referencedColumnName="id")
     * })
     */
    private $moto;



    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set espejos
     *
     * @param string $espejos
     * @return Inventariomoto
     */
    public function setEspejos($espejos)
    {
        $this->espejos = $espejos;
    
        return $this;
    }

    /**
     * Get espejos
     *
     * @return string 
     */
    public function getEspejos()
    {
        return $this->espejos;
    }

    /**
     * Set direccionales
     *
     * @param string $direccionales
     * @return Inventariomoto
     */
    public function setDireccionales($direccionales)
    {
        $this->direccionales = $direccionales;
    
        return $this;
    }

    /**
     * Get direccionales
     *
     * @return string 
     */
    public function getDireccionales()
    {
        return $this->direccionales;
    }

    /**
     * Set tapaslaterales
     *
     * @param string $tapaslaterales
     * @return Inventariomoto
     */
    public function setTapaslaterales($tapaslaterales)
    {
        $this->tapaslaterales = $tapaslaterales;
    
        return $this;
    }

    /**
     * Get tapaslaterales
     *
     * @return string 
     */
    public function getTapaslaterales()
    {
        return $this->tapaslaterales;
    }

    /**
     * Set sillin
     *
     * @param string $sillin
     * @return Inventariomoto
     */
    public function setSillin($sillin)
    {
        $this->sillin = $sillin;
    
        return $this;
    }

    /**
     * Get sillin
     *
     * @return string 
     */
    public function getSillin()
    {
        return $this->sillin;
    }

    /**
     * Set tabacos
     *
     * @param string $tabacos
     * @return Inventariomoto
     */
    public function setTabacos($tabacos)
    {
        $this->tabacos = $tabacos;
    
        return $this;
    }

    /**
     * Get tabacos
     *
     * @return string 
     */
    public function getTabacos()
    {
        return $this->tabacos;
    }

    /**
     * Set stop
     *
     * @param string $stop
     * @return Inventariomoto
     */
    public function setStop($stop)
    {
        $this->stop = $stop;
    
        return $this;
    }

    /**
     * Get stop
     *
     * @return string 
     */
    public function getStop()
    {
        return $this->stop;
    }

    /**
     * Set gatos
     *
     * @param string $gatos
     * @return Inventariomoto
     */
    public function setGatos($gatos)
    {
        $this->gatos = $gatos;
    
        return $this;
    }

    /**
     * Get gatos
     *
     * @return string 
     */
    public function getGatos()
    {
        return $this->gatos;
    }

    /**
     * Set reflectivas
     *
     * @param string $reflectivas
     * @return Inventariomoto
     */
    public function setReflectivas($reflectivas)
    {
        $this->reflectivas = $reflectivas;
    
        return $this;
    }

    /**
     * Get reflectivas
     *
     * @return string 
     */
    public function getReflectivas()
    {
        return $this->reflectivas;
    }

    /**
     * Set tapatanqueaceite
     *
     * @param string $tapatanqueaceite
     * @return Inventariomoto
     */
    public function setTapatanqueaceite($tapatanqueaceite)
    {
        $this->tapatanqueaceite = $tapatanqueaceite;
    
        return $this;
    }

    /**
     * Get tapatanqueaceite
     *
     * @return string 
     */
    public function getTapatanqueaceite()
    {
        return $this->tapatanqueaceite;
    }

    /**
     * Set emblemas
     *
     * @param string $emblemas
     * @return Inventariomoto
     */
    public function setEmblemas($emblemas)
    {
        $this->emblemas = $emblemas;
    
        return $this;
    }

    /**
     * Get emblemas
     *
     * @return string 
     */
    public function getEmblemas()
    {
        return $this->emblemas;
    }

    /**
     * Set parrillas
     *
     * @param string $parrillas
     * @return Inventariomoto
     */
    public function setParrillas($parrillas)
    {
        $this->parrillas = $parrillas;
    
        return $this;
    }

    /**
     * Get parrillas
     *
     * @return string 
     */
    public function getParrillas()
    {
        return $this->parrillas;
    }

    /**
     * Set luzdelantera
     *
     * @param string $luzdelantera
     * @return Inventariomoto
     */
    public function setLuzdelantera($luzdelantera)
    {
        $this->luzdelantera = $luzdelantera;
    
        return $this;
    }

    /**
     * Get luzdelantera
     *
     * @return string 
     */
    public function getLuzdelantera()
    {
        return $this->luzdelantera;
    }

    /**
     * Set pito
     *
     * @param string $pito
     * @return Inventariomoto
     */
    public function setPito($pito)
    {
        $this->pito = $pito;
    
        return $this;
    }

    /**
     * Get pito
     *
     * @return string 
     */
    public function getPito()
    {
        return $this->pito;
    }

    /**
     * Set bateria
     *
     * @param string $bateria
     * @return Inventariomoto
     */
    public function setBateria($bateria)
    {
        $this->bateria = $bateria;
    
        return $this;
    }

    /**
     * Get bateria
     *
     * @return string 
     */
    public function getBateria()
    {
        return $this->bateria;
    }

    /**
     * Set velocimetro
     *
     * @param string $velocimetro
     * @return Inventariomoto
     */
    public function setVelocimetro($velocimetro)
    {
        $this->velocimetro = $velocimetro;
    
        return $this;
    }

    /**
     * Get velocimetro
     *
     * @return string 
     */
    public function getVelocimetro()
    {
        return $this->velocimetro;
    }

    /**
     * Set guardafango
     *
     * @param string $guardafango
     * @return Inventariomoto
     */
    public function setGuardafango($guardafango)
    {
        $this->guardafango = $guardafango;
    
        return $this;
    }

    /**
     * Get guardafango
     *
     * @return string 
     */
    public function getGuardafango()
    {
        return $this->guardafango;
    }

    /**
     * Set juegodeherramientas
     *
     * @param string $juegodeherramientas
     * @return Inventariomoto
     */
    public function setJuegodeherramientas($juegodeherramientas)
    {
        $this->juegodeherramientas = $juegodeherramientas;
    
        return $this;
    }

    /**
     * Get juegodeherramientas
     *
     * @return string 
     */
    public function getJuegodeherramientas()
    {
        return $this->juegodeherramientas;
    }

    /**
     * Set llaves
     *
     * @param string $llaves
     * @return Inventariomoto
     */
    public function setLlaves($llaves)
    {
        $this->llaves = $llaves;
    
        return $this;
    }

    /**
     * Get llaves
     *
     * @return string 
     */
    public function getLlaves()
    {
        return $this->llaves;
    }

    /**
     * Set tanque
     *
     * @param string $tanque
     * @return Inventariomoto
     */
    public function setTanque($tanque)
    {
        $this->tanque = $tanque;
    
        return $this;
    }

    /**
     * Get tanque
     *
     * @return string 
     */
    public function getTanque()
    {
        return $this->tanque;
    }

    /**
     * Set manual
     *
     * @param string $manual
     * @return Inventariomoto
     */
    public function setManual($manual)
    {
        $this->manual = $manual;
    
        return $this;
    }

    /**
     * Get manual
     *
     * @return string 
     */
    public function getManual()
    {
        return $this->manual;
    }

    /**
     * Set llantas
     *
     * @param string $llantas
     * @return Inventariomoto
     */
    public function setLlantas($llantas)
    {
        $this->llantas = $llantas;
    
        return $this;
    }

    /**
     * Get llantas
     *
     * @return string 
     */
    public function getLlantas()
    {
        return $this->llantas;
    }

    /**
     * Set moto
     *
     * @param Quindimotos\ProyectoBundle\Entity\Moto $moto
     * @return Inventariomoto
     */
    public function setMoto(\Quindimotos\ProyectoBundle\Entity\Moto $moto = null)
    {
        $this->moto = $moto;
    
        return $this;
    }

    /**
     * Get moto
     *
     * @return Quindimotos\ProyectoBundle\Entity\Moto 
     */
    public function getMoto()
    {
        return $this->moto;
    }
}