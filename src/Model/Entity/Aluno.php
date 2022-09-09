<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aluno Entity
 *
 * @property int $id
 * @property string $nome
 * @property int $idade
 * @property string $sexo
 * @property string $email
 * @property string $endereco
 * @property string $nomePai
 * @property string $nomeMae
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Aluno extends Entity
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
        'nome' => true,
        'idade' => true,
        'sexo' => true,
        'email' => true,
        'endereco' => true,
        'nomePai' => true,
        'nomeMae' => true,
        'created' => true,
        'modified' => true,
    ];
}
