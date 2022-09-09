<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AlunosFixture
 */
class AlunosFixture extends TestFixture
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
                'nome' => 'Lorem ipsum dolor sit amet',
                'idade' => 1,
                'sexo' => 'L',
                'email' => 'Lorem ipsum dolor sit amet',
                'endereco' => 'Lorem ipsum dolor sit amet',
                'nomePai' => 'Lorem ipsum dolor sit amet',
                'nomeMae' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-09-08 23:19:50',
                'modified' => '2022-09-08 23:19:50',
            ],
        ];
        parent::init();
    }
}
