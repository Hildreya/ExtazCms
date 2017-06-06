<?php

namespace EZ\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Legal
 *
 * @ORM\Table(name="extaz_legal")
 * @ORM\Entity(repositoryClass="EZ\CoreBundle\Repository\LegalRepository")
 */
class Legal
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activate_cc", type="boolean")
     */
    private $activate_cc;

    /**
     * @var string
     *
     * @ORM\Column(name="cgv_cgu", type="text", nullable=true)
     */
    private $cgvCgu;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activate_lm", type="boolean")
     */
    private $activate_lm;

    /**
     * @var string
     *
     * @ORM\Column(name="legal_mention", type="text", nullable=true)
     */
    private $legalMention;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cgvCgu
     *
     * @param string $cgvCgu
     *
     * @return Legal
     */
    public function setCgvCgu($cgvCgu)
    {
        $this->cgvCgu = $cgvCgu;

        return $this;
    }

    /**
     * Get cgvCgu
     *
     * @return string
     */
    public function getCgvCgu()
    {
        return $this->cgvCgu;
    }

    /**
     * Set legalMention
     *
     * @param string $legalMention
     *
     * @return Legal
     */
    public function setLegalMention($legalMention)
    {
        $this->legalMention = $legalMention;

        return $this;
    }

    /**
     * Get legalMention
     *
     * @return string
     */
    public function getLegalMention()
    {
        return $this->legalMention;
    }

    /**
     * Set activateCC
     *
     * @param boolean $activateCC
     *
     * @return Legal
     */
    public function setActivateCC($activateCC)
    {
        $this->activate_cc = $activateCC;

        return $this;
    }

    /**
     * Get activateCC
     *
     * @return boolean
     */
    public function getActivateCC()
    {
        return $this->activate_cc;
    }

    /**
     * Set activateLM
     *
     * @param boolean $activateLM
     *
     * @return Legal
     */
    public function setActivateLM($activateLM)
    {
        $this->activate_lm = $activateLM;

        return $this;
    }

    /**
     * Get activateLM
     *
     * @return boolean
     */
    public function getActivateLM()
    {
        return $this->activate_lm;
    }
}
