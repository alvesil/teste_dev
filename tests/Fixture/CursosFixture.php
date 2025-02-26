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
                'alunos_id' => 1,
                'disciplina' => 'Lorem ipsum dolor sit amet',
                'carga_horaria' => 1,
                'created' => '2022-09-09 04:00:07',
                'modified' => '2022-09-09 04:00:07',
            ],
        ];
        parent::init();
    }
}
