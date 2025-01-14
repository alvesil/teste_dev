<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Curso Entity
 *
 * @property int $id
 * @property int|null $alunos_id
 * @property string $disciplina
 * @property int $carga_horaria
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Curso extends Entity
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
        'alunos_id' => true,
        'disciplina' => true,
        'carga_horaria' => true,
        'created' => true,
        'modified' => true,
    ];
}
