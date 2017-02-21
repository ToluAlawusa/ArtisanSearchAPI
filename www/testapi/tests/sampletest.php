<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class sampletest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
    

        $this->Json('POST', 'api/vi/car', ['make' => 'Dodge', 'model' => 'caravan', 'year' => '2004'])
             ->seeJson([
                'created_at' => true,
             ]);

        //       $this->assertEquals(
        //     $this->app->version(), $this->response->getContent()
        // );

    }
}

