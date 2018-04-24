<?php

namespace App\Application\Sonata\DashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\DashboardBundle\Entity\BaseDashboard as BaseDashboard;

/**
 * Class Dashboard
 *
 * @package App\Application\Sonata\DashboardBundle\Entity
 *
 * @ORM\Table(name="dashboard__dashboard")
 * @ORM\Entity(repositoryClass="Doctrine\ORM\EntityRepository")
 */
class Dashboard extends BaseDashboard
{
    /**
     * @var int $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Get id.
     *
     * @return int $id
     */
    public function getId(): ?int
    {
        return $this->id;
    }
}
