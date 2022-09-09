<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Matricula Entity
 *
 * @property int $id
 * @property int $aluno_id
 * @property int $curso_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Aluno $aluno
 * @property \App\Model\Entity\Curso $curso
 */
class Matricula extends Entity
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
        'aluno_id' => true,
        'curso_id' => true,
        'created' => true,
        'modified' => true,
        'aluno' => true,
        'curso' => true,
    ];
}
