<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Professore Entity
 *
 * @property int $id
 * @property int $id_diplomas
 * @property int $idade
 * @property int $cpf
 * @property string $endereco
 */
class Professore extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'id_diplomas' => true,
        'idade' => true,
        'cpf' => true,
        'endereco' => true,
    ];
}
