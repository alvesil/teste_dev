<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DiplomasFixture
 */
class DiplomasFixture extends TestFixture
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
                'instituicao' => 'Lorem ipsum dolor sit amet',
                'dataFormatura' => '2022-09-09 00:05:06',
                'curso' => 'Lorem ipsum dolor sit amet',
                'cargaHoraria' => 1,
            ],
        ];
        parent::init();
    }
}
