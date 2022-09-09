<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MatriculasFixture
 */
class MatriculasFixture extends TestFixture
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
                'aluno_id' => 1,
                'curso_id' => 1,
                'created' => '2022-09-09 05:59:59',
                'modified' => '2022-09-09 05:59:59',
            ],
        ];
        parent::init();
    }
}
