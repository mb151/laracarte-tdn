<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HelpersTest extends TestCase
{
    /** @test */
    
     
    public function page_title_should_return_the_base_title_if_title_is_empty()
    {
        $this->assertEquals('Laracarte - List of artisans', page_title(''));
    }

    public function page_title_should_return_the_correct_title_if_title_is_provided()
    {
        $this->assertEquals('About | List of artisans', page_title('About'));
        $this->assertEquals('Home | List of artisans', page_title('Home'));
    }

    /** @test */

    public function route_test_if_is_active()
    {
        $this->assertTrue(set_active_route(''));
    }
}
