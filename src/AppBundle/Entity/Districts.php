<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Districts
 * @package AppBundle\Entity;
 *
 * @ORM\Entity;
 * @ORM\Table(name="affecteddistricts");
 */


class Districts {
    /**
     * @ORM\Column(type="integer")
     * @ORM\id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $objectid;

    /**
     * @ORM\Column(type="string")
     */
    protected $zone;

    /**
     * @ORM\Column(type="string")
     */
    protected $district;

    /**
     * @ORM\Column(type="integer")
     */
    protected $population;

    /**
     * @ORM\Column(type="decimal")
     */
    protected $pga_value;

    /**
     * @ORM\Column(type="string")
     */
    protected $severity_class;

    /**
     * @ORM\Column(type="integer")
     */
    protected $dist_id;

    /**
     * @ORM\Column(type="string")
     */
    protected $reg_code;

    /**
     * @ORM\Column(type="string")
     */
    protected $zone_code;

    /**
     * @ORM\Column(type="string")
     */
    protected $ocha_pcode;

    /**
     * @ORM\Column(type="string")
     */
    protected $hlcit_code;

    /**
     * @ORM\Column(type="string")
     */
    protected $first_dist;

    /**
     * @ORM\Column(type="decimal")
     */
    protected $min_paramv;

    /**
     * @ORM\Column(type="string")
     */
    protected $first_class;

    /**
     * @ORM\Column(type="decimal")
     */
    protected $shape_leng;

    /**
     * @ORM\Column(type="decimal")
     */
    protected $shape_area;
}