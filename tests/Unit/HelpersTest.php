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

    public function set_active_route_should_return_the_correct_class_based_on_a_given_route()
    {
        $this->get(route('home'));
        $this->assertEquals('active', set_active_route('home'));
        $this->assertEquals('', set_active_route('about'));

        $this->get(route('contacts.create'));
        $this->assertEquals('active', set_active_route('contacts.create'));
        $this->assertEquals('', set_active_route('home'));
        $this->assertEquals('', set_active_route('about'));
    }
}
