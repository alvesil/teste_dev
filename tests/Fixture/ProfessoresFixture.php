<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProfessoresFixture
 */
class ProfessoresFixture extends TestFixture
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
                'id_diplomas' => 1,
                'idade' => 1,
                'cpf' => 1,
                'endereco' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
