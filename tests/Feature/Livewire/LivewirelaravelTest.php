<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Livewirelaravel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class LivewirelaravelTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Livewirelaravel::class)
            ->assertStatus(200);
    }
}
