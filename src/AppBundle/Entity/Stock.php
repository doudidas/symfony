<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stock
 *
 * @ORM\Table(name="stock")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StockRepository")
 */
class Stock
{


    /**
    * @ORM\OneToOne(targetEntity="Itemtype")
    * @ORM\JoinColumn(name="itemtype_id", referencedColumnName="id")
    */
    protected $item;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="sellprice", type="float", nullable=true)
     */
    private $sellprice;

    /**
     * @var int
     *
     * @ORM\Column(name="currentstock", type="integer")
     */
    private $currentstock;

    /**
     * @var int
     *
     * @ORM\Column(name="minstock", type="integer", nullable=true)
     */
    private $minstock;


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
     * Set sellprice
     *
     * @param float $sellprice
     *
     * @return Stock
     */
    public function setSellprice($sellprice)
    {
        $this->sellprice = $sellprice;

        return $this;
    }

    /**
     * Get sellprice
     *
     * @return float
     */
    public function getSellprice()
    {
        return $this->sellprice;
    }

    /**
     * Set currentstock
     *
     * @param integer $currentstock
     *
     * @return Stock
     */
    public function setCurrentstock($currentstock)
    {
        $this->currentstock = $currentstock;

        return $this;
    }

    /**
     * Get currentstock
     *
     * @return int
     */
    public function getCurrentstock()
    {
        return $this->currentstock;
    }

    /**
     * Set minstock
     *
     * @param integer $minstock
     *
     * @return Stock
     */
    public function setMinstock($minstock)
    {
        $this->minstock = $minstock;

        return $this;
    }

    /**
     * Get minstock
     *
     * @return int
     */
    public function getMinstock()
    {
        return $this->minstock;
    }

    /**
     * Set item
     *
     * @param \AppBundle\Entity\Itemtype $item
     *
     * @return Stock
     */
    public function setItem(\AppBundle\Entity\Itemtype $item = null)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return \AppBundle\Entity\Itemtype
     */
    public function getItem()
    {
        return $this->item;
    }
}
