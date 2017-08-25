<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Provincias
 *
 * @ORM\Table(name="provincias")
 * @ORM\Entity
 */
class Provincias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=50, nullable=false)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia", type="string", length=255, nullable=false)
     */
    private $provincia;

    /**
     * @var integer
     *
     * @ORM\Column(name="capital_id", type="integer", nullable=true)
     */
    private $capitalId;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Municipios", mappedBy="provincia")
     */
    protected $municipio;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Comunidades", inversedBy="provincia")
     */
    protected $comunidad;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * @return string
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * @param string $provincia
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;
    }

    /**
     * @return int
     */
    public function getCapitalId()
    {
        return $this->capitalId;
    }

    /**
     * @param int $capitalId
     */
    public function setCapitalId($capitalId)
    {
        $this->capitalId = $capitalId;
    }

	/**
     * @return mixed
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * @param mixed $municipio
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;
    }

    /**
     * @return mixed
     */
    public function getComunidad()
    {
        return $this->comunidad;
    }

    /**
     * @param mixed $comunidad
     */
    public function setComunidad($comunidad)
    {
        $this->comunidad = $comunidad;
    }

}

