<?php

namespace EntityAppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Data
 *
 * @ORM\Table(name="data")
 * @ORM\Entity
 */
class Data
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_prise", type="datetime", nullable=false)
     */
    private $datePrise;

    /**
     * @var string
     *
     * @ORM\Column(name="device_id", type="string", length=32, nullable=false)
     */
    private $deviceId;

    /**
     * @var string
     *
     * @ORM\Column(name="donnee_brute", type="string", length=32, nullable=false)
     */
    private $donneeBrute;

    /**
     * @var float
     *
     * @ORM\Column(name="temperature", type="float", precision=10, scale=0, nullable=false)
     */
    private $temperature;

    /**
     * @var integer
     *
     * @ORM\Column(name="hygrometrie", type="integer", nullable=false)
     */
    private $hygrometrie;

    /**
     * @var string
     *
     * @ORM\Column(name="pointeur", type="string", length=4, nullable=false)
     */
    private $pointeur;

    /**
     * @var string
     *
     * @ORM\Column(name="pointeur_suivant", type="string", length=4, nullable=true)
     */
    private $pointeurSuivant;

    /**
     * @var boolean
     *
     * @ORM\Column(name="actif", type="boolean", nullable=false)
     */
    private $actif;

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
     * @ORM\Column(name="offset", type="integer", nullable=false)
     */
    private $offset;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set datePrise
     *
     * @param \DateTime $datePrise
     *
     * @return Data
     */
    public function setDatePrise($datePrise)
    {
        $this->datePrise = $datePrise;

        return $this;
    }

    /**
     * Get datePrise
     *
     * @return \DateTime
     */
    public function getDatePrise()
    {
        return $this->datePrise;
    }

    /**
     * Set deviceId
     *
     * @param string $deviceId
     *
     * @return Data
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;

        return $this;
    }

    /**
     * Get deviceId
     *
     * @return string
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * Set donneeBrute
     *
     * @param string $donneeBrute
     *
     * @return Data
     */
    public function setDonneeBrute($donneeBrute)
    {
        $this->donneeBrute = $donneeBrute;

        return $this;
    }

    /**
     * Get donneeBrute
     *
     * @return string
     */
    public function getDonneeBrute()
    {
        return $this->donneeBrute;
    }

    /**
     * Set temperature
     *
     * @param float $temperature
     *
     * @return Data
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get temperature
     *
     * @return float
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set hygrometrie
     *
     * @param integer $hygrometrie
     *
     * @return Data
     */
    public function setHygrometrie($hygrometrie)
    {
        $this->hygrometrie = $hygrometrie;

        return $this;
    }

    /**
     * Get hygrometrie
     *
     * @return integer
     */
    public function getHygrometrie()
    {
        return $this->hygrometrie;
    }

    /**
     * Set pointeur
     *
     * @param string $pointeur
     *
     * @return Data
     */
    public function setPointeur($pointeur)
    {
        $this->pointeur = $pointeur;

        return $this;
    }

    /**
     * Get pointeur
     *
     * @return string
     */
    public function getPointeur()
    {
        return $this->pointeur;
    }

    /**
     * Set pointeurSuivant
     *
     * @param string $pointeurSuivant
     *
     * @return Data
     */
    public function setPointeurSuivant($pointeurSuivant)
    {
        $this->pointeurSuivant = $pointeurSuivant;

        return $this;
    }

    /**
     * Get pointeurSuivant
     *
     * @return string
     */
    public function getPointeurSuivant()
    {
        return $this->pointeurSuivant;
    }

    /**
     * Set actif
     *
     * @param boolean $actif
     *
     * @return Data
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
     * Set replicationId
     *
     * @param integer $replicationId
     *
     * @return Data
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
     * @return Data
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
     * Set offset
     *
     * @param integer $offset
     *
     * @return Data
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Get offset
     *
     * @return integer
     */
    public function getOffset()
    {
        return $this->offset;
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
}
