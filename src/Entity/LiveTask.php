<?php declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LiveTasks
 *
 * @ORM\Table(name="live_tasks")
 * @ORM\Entity
 */
class LiveTask
{
    /**
     * @var int
     *
     * @ORM\Column(name="ltask_uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="ltask_type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="ltask_data", type="text", length=65535, nullable=false)
     */
    private $data;

    /**
     * LiveTask constructor.
     * @param int $type
     * @param string $data
     */
    public function __construct(int $type, string $data)
    {
        $this->type = $type;
        $this->data = $data;
    }
}
