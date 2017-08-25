<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comunidades
 *
 * @ORM\Table(name="comunidades", uniqueConstraints={@ORM\UniqueConstraint(name="IDX_cominidad", columns={"comunidad"}), @ORM\UniqueConstraint(name="slug", columns={"slug"})})
 * @ORM\Entity
 */
class Comunidades
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
     * @ORM\Column(name="comunidad", type="string", length=255, nullable=false)
     */
    private $comunidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="capital_id", type="integer", nullable=false)
     */
    private $capitalId;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Provincias", mappedBy="comunidad")
     */
    protected $provincia;

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
    public function getComunidad()
    {
        return $this->comunidad;
    }

    /**
     * @param string $comunidad
     */
    public function setComunidad($comunidad)
    {
        $this->comunidad = $comunidad;
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
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * @param mixed $provincia
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;
    }

}

