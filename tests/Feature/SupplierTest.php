<?php

namespace Tests\Feature;

use App\Models\Supplier;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SupplierTest extends TestCase
{
    use RefreshDatabase;
    private $user;
    private $supplier;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create([
            'status' => 'admin'
        ]);
        $this->supplier = Supplier::factory()->create();
    }

    public function test_open_suplier_page()
    {
        $response = $this->actingAs($this->user)->get('/supplier');
        $response->assertStatus(200);
    }

    public function test_create_supplier()
    {
        $response = $this->actingAs($this->user)->post('/supplier', [
            'nama_supplier' => 'Supplier 1',
            'deskripsi' => 'Deskripsi Supplier 1',
            'gambar' => 'https://picsum.photos/640/480'
        ]);
        $response->assertStatus(302);
        $this->assertDatabaseHas('supplier', [
            'nama_supplier' => 'Supplier 1',
            'deskripsi' => 'Deskripsi Supplier 1',
            'gambar' => 'https://picsum.photos/640/480'
        ]);

        $response = $this->followingRedirects()->actingAs($this->user)->get('/supplier');
        $response->assertSee('Supplier berhasil ditambahkan');
    }

    public function test_read_data_supplier()
    {
        $response = $this->actingAs($this->user)->get('/supplier/'.$this->supplier->id);
        $response->assertSee($this->supplier->nama_supplier);
        $response->assertSee($this->supplier->deskripsi);
    }

    public function test_update_data_supplier(){
        $response = $this->actingAs($this->user)->put('/supplier/'.$this->supplier->id, [
            'nama_supplier' => 'Supplier Baru',
            'deskripsi' => 'Deskripsi Baru',
            'gambar' => 'https://picsum.photos/640/480'
        ]);
        $response->assertStatus(302);
        $this->assertDatabaseHas('supplier', [
            'nama_supplier' => 'Supplier Baru',
            'deskripsi' => 'Deskripsi Baru',
            'gambar' => 'https://picsum.photos/640/480'
        ]);

        $response = $this->followingRedirects()->actingAs($this->user)->get('/supplier');
        $response->assertSee('Supplier berhasil diperbarui');
    }

    public function test_delete_data_supplier(){
        $response = $this->actingAs($this->user)->delete('/supplier/'.$this->supplier->id);
        $response->assertStatus(302);
        $this->assertDatabaseMissing('supplier', [
            'nama_supplier' => $this->supplier->nama_supplier,
            'deskripsi' => $this->supplier->deskripsi,
            'gambar' => $this->supplier->gambar
        ]);

        $response = $this->followingRedirects()->actingAs($this->user)->get('/supplier');
        $response->assertSee('Supplier berhasil dihapus');
    }
}
