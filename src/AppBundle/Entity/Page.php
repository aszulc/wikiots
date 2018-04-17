<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="page")
 */
class Page
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Page")
     */
    private $id;
    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Page", inversedBy="id")
     * @ORM\JoinColumn(name="page_id", referencedColumnName="id")
     */
    private $pageId;
    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $name;
    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $link;
}