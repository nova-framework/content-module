<?php

namespace Content\Database\Seeds;

use Nova\Database\Seeder;
use Nova\Database\ORM\Model;


class ContentDatabaseSeeder extends Seeder
{
    /**
     * Run the Database Seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call('Content\Database\Seeds\FoobarTableSeeder');
    }
}
