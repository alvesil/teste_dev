<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CursosFixture
 */
class CursosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'id_alunos' => 1,
                'id_professores' => 1,
                'nome' => 'Lorem ipsum dolor sit amet',
                'cargaHoraria' => 1,
                'created' => '2022-09-08 23:19:45',
                'modified' => '2022-09-08 23:19:45',
            ],
        ];
        parent::init();
    }
}
