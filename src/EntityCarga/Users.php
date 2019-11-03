<?php

namespace App\EntityCarga;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users", uniqueConstraints={@ORM\UniqueConstraint(name="users_username_key", columns={"username"})})
 * @ORM\Entity
 */
class Users
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="users_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=true)
     */
    private $username;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetimetz", nullable=false)
     */
    private $createdat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetimetz", nullable=false)
     */
    private $updatedat;


}
