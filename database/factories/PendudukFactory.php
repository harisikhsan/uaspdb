<?php

namespace Database\Factories;

use App\Models\Penduduk;
use App\Models\KartuKeluarga;
use App\Models\LevelPendidikan;
use App\Models\Pekerjaan;
use App\Models\Kewarganegaraan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PendudukFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Penduduk::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'keluarga_id' =>KartuKeluarga::factory(),
            'nama' =>$this->faker->firstName,
            'nik' =>$this->faker->randomNumber,
            'tempat_lahir' =>$this->faker->word,
            'tanggal_lahir' =>$this->faker->date($format = 'Y-m-d'),
            'jenis_kelamin' =>$this->faker->randomElement(['Pria','Wanita']),
            'agama' =>$this->faker->randomElement(['Islam','Kristen']),
            'level_pendidikan_id' =>LevelPendidikan::factory(),
            'pekerjaan_id' =>Pekerjaan::factory(),
            'status_pernikahan' =>$this->faker->randomElement(['Menikah','Belum Menikah']),
            'status_keluarga' =>$this->faker->randomElement(['Ayah','Ibu','Anak']),
            'kewarganegaraan_id' =>Kewarganegaraan::factory(),
            'ayah' =>$this->faker->firstName,
            'ibu' =>$this->faker->firstName
            //
        ];
    }
}
