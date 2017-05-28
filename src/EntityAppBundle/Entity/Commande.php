<?php

namespace EntityAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", indexes={@ORM\Index(name="commande_id_data_idx", columns={"data_id"})})
 * @ORM\Entity
 */
class Commande
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="datetime", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="datetime", nullable=true)
     */
    private $dateFin;

    /**
     * @var float
     *
     * @ORM\Column(name="delta", type="float", precision=10, scale=0, nullable=false)
     */
    private $delta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="allumage", type="boolean", nullable=false)
     */
    private $allumage=0;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="allumage_froid", type="integer", nullable=true)
     */
    private $allumageFroid=0;

    /**
     * @var boolean
     *
     * @ORM\Column(name="actif", type="boolean", nullable=false)
     */
    private $actif;

    /**
     * @var integer
     *
     * @ORM\Column(name="consigne_element_id", type="bigint", nullable=false)
     */
    private $consigneElementId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="alarme", type="boolean", nullable=false)
     */
    private $alarme = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="replication_id", type="bigint", nullable=true)
     */
    private $replicationId;

    /**
     * @var string
     *
     * @ORM\Column(name="work_field", type="string", length=64, nullable=true)
     */
    private $workField;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \EntityAppBundle\Entity\Data
     *
     * @ORM\ManyToOne(targetEntity="EntityAppBundle\Entity\Data")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="data_id", referencedColumnName="id")
     * })
     */
    private $data;



    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Commande
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Commande
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set delta
     *
     * @param float $delta
     *
     * @return Commande
     */
    public function setDelta($delta)
    {
        $this->delta = $delta;

        return $this;
    }

    /**
     * Get delta
     *
     * @return float
     */
    public function getDelta()
    {
        return $this->delta;
    }

    /**
     * Set allumage
     *
     * @param boolean $allumage
     *
     * @return Commande
     */
    public function setAllumage($allumage)
    {
        $this->allumage = $allumage;

        return $this;
    }

    /**
     * Get allumage
     *
     * @return boolean
     */
    public function getAllumage()
    {
        return $this->allumage;
    }
    
    

    /**
     * Set actif
     *
     * @param boolean $actif
     *
     * @return Commande
     */
    public function setActif($actif)
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get actif
     *
     * @return boolean
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * Set consigneElementId
     *
     * @param integer $consigneElementId
     *
     * @return Commande
     */
    public function setConsigneElementId($consigneElementId)
    {
        $this->consigneElementId = $consigneElementId;

        return $this;
    }

    /**
     * Get consigneElementId
     *
     * @return integer
     */
    public function getConsigneElementId()
    {
        return $this->consigneElementId;
    }

    /**
     * Set alarme
     *
     * @param boolean $alarme
     *
     * @return Commande
     */
    public function setAlarme($alarme)
    {
        $this->alarme = $alarme;

        return $this;
    }

    /**
     * Get alarme
     *
     * @return boolean
     */
    public function getAlarme()
    {
        return $this->alarme;
    }

    /**
     * Set replicationId
     *
     * @param integer $replicationId
     *
     * @return Commande
     */
    public function setReplicationId($replicationId)
    {
        $this->replicationId = $replicationId;

        return $this;
    }

    /**
     * Get replicationId
     *
     * @return integer
     */
    public function getReplicationId()
    {
        return $this->replicationId;
    }

    /**
     * Set workField
     *
     * @param string $workField
     *
     * @return Commande
     */
    public function setWorkField($workField)
    {
        $this->workField = $workField;

        return $this;
    }

    /**
     * Get workField
     *
     * @return string
     */
    public function getWorkField()
    {
        return $this->workField;
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
     * Set data
     *
     * @param \EntityAppBundle\Entity\Data $data
     *
     * @return Commande
     */
    public function setData(\EntityAppBundle\Entity\Data $data = null)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \EntityAppBundle\Entity\Data
     */
    public function getData()
    {
        return $this->data;
    }
    

    /**
     * allumageFroid
     * @return integer
     */
    public function getAllumageFroid(){
        return $this->allumageFroid;
    }

    /**
     * allumageFroid
     * @param integer $allumageFroid
     * @return Commande
     */
    public function setAllumageFroid($allumageFroid){
        $this->allumageFroid = $allumageFroid;
        return $this;
    }

}
