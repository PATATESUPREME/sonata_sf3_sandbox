<?php

namespace App\Application\Sonata\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\NewsBundle\Entity\BasePost as BasePost;

/**
 * Class Post
 *
 * @package App\Application\Sonata\NewsBundle\Entity
 *
 * @ORM\Table(name="news__post")
 * @ORM\Entity(repositoryClass="Doctrine\ORM\EntityRepository")
 */
class Post extends BasePost
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
    public function getId()
    {
        return $this->id;
    }
}
