<?php

use App\Models\General\AssetCondition;
use App\Models\General\AssetManager;
use App\Models\General\AssetObtain;
use App\Models\General\AssetType;
use App\Models\General\BloodType;
use App\Models\General\DisabilityType;
use App\Models\Region\District;
use App\Models\General\Education;
use App\Models\General\Ethnic;
use App\Models\General\FamilyTree;
use App\Models\General\JobType;
use App\Models\General\Marital;
use App\Models\General\MemberMoveType;
use App\Models\Region\Region;
use App\Models\Region\RegionPosition;
use App\Models\Region\Topography;
use App\Models\General\TrainingType;
use Illuminate\Database\Seeder;

class GeneralTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->assetCondition();
        $this->assetManager();
        $this->assetObtain();
        $this->assetType();
        $this->bloodType();
        $this->disabilityType();
        $this->district();
        $this->education();
        $this->ethicType();
        $this->familyTree();
        $this->memberJobType();
        $this->marital();
        $this->memberMoveType();
        $this->regions();
        $this->regionPositions();
        $this->topographies();
        $this->memberTrainingType();
    }

    private function assetCondition()
    {
        $data = [
            [
                'name' => 'baik',
                'description' => ''
            ],
            [
                'name' => 'lumayan',
                'description' => ''
            ],
            [
                'name' => 'rusak',
                'description' => ''
            ],
            [
                'name' => 'dibuang',
                'description' => ''
            ],
        ];

        foreach($data as $asset_condition) {
            AssetCondition::create($asset_condition);
        }
    }

    private function assetManager()
    {

        $data = [
            [
                'name' => 'jemaat',
                'description' => ''
            ],
            [
                'name' => 'komisi bipra',
                'description' => ''
            ],
            [
                'name' => 'kolom',
                'description' => ''
            ],
            [
                'name' => 'anggota jemaat',
                'description' => ''
            ],
        ];

        foreach($data as $asset_manager) {
            AssetManager::create($asset_manager);
        }
    }

    private function assetObtain()
    {
        $data = [
            [
                'name' => 'sumbangan anggota jemaat',
                'description' => ''
            ],
            [
                'name' => 'sumbangan non anggota jemaat',
                'description' => ''
            ],
            [
                'name' => 'sumbangan pemerintah',
                'description' => ''
            ],
            [
                'name' => 'swadaya mandiri',
                'description' => ''
            ],
        ];

        foreach($data as $asset_obtain) {
            AssetObtain::create($asset_obtain);
        }
    }

    private function assetType()
    {
        $data = [
            [
                'name' => 'gedung',
                'description' => ''
            ],
            [
                'name' => 'kendaraan',
                'description' => ''
            ],
            [
                'name' => 'tanah',
                'description' => ''
            ],
        ];

        foreach($data as $asset_type) {
            AssetType::create($asset_type);
        }
    }

    private function bloodType()
    {
        $data = [
            [
                'name' => 'o',
                'type' => '+',
                'description' => ''
            ],
            [
                'name' => 'o',
                'type' => '-',
                'description' => ''
            ],
            [
                'name' => 'a',
                'type' => '+',
                'description' => ''
            ],
            [
                'name' => 'a',
                'type' => '-',
                'description' => ''
            ],
            [
                'name' => 'b',
                'type' => '+',
                'description' => ''
            ],
            [
                'name' => 'b',
                'type' => '-',
                'description' => ''
            ],
            [
                'name' => 'ab',
                'type' => '+',
                'description' => ''
            ],
            [
                'name' => 'ab',
                'type' => '-',
                'description' => ''
            ],
        ];

        foreach ($data as $blood) {
            BloodType::create($blood);
        }

    }

    private function disabilityType()
    {
        $data = [
            [
                'name' => 'tuna netra',
                'description' => 'tuna netra atau buta adalah orang yang tidak bisa melihat dengan kedua matanya.'
            ],
            [
                'name' => 'tuna rungu',
                'description' => 'tuna rungu atau tuli adalah orang yang tidak memiliki kemampuan mendengar.'
            ],
            [
                'name' => 'tuna wicara',
                'description' => 'tuna wicara atau bisu adalah orang yang tidak bisa berbicara.'
            ],
            [
                'name' => 'tuna daksa',
                'description' => 'tuna daksa atau cacat fisik adalah orang yang mengalami kecacatan fisik, cacat tubuh, kelainan, kerusakan dan lain sebagainya yang diakibatkan oleh kerusakan otak, kerusakan syaraf tulang belakang, kecelakaan, cacat sejak lahir, dan lain sebagainya.  Contoh yang paling mudah dari tuna daksa adalah orang yang tangannya buntung, kakinya buntung, lumpuh, kakinya kecil sebelah, dan lain sebagainya.'
            ],
            [
                'name' => 'tuna grahita',
                'description' => 'tuna grahita atau keterbelakangan mental adalah orang yang mengalami keterbelakangan mental sehingga memiliki tingkat kecerdasan yang rendah di bawah rata-rata orang pada umumnya.'
            ],
            [
                'name' => 'tuna laras',
                'description' => 'tuna laras atau cacat pengendalian diri adalah orang yang memiliki kesulitan dalam pendendalian diri seperti masalah pengendalian emosi, sulit bergaul, senang menyendiri, kepercayaan diri rendah, senang berbuat jahat, malu tampil di depan umum, dan lain sebagainya.'
            ],
        ];

        foreach($data as $disability_type) {
            DisabilityType::create($disability_type);
        }
    }

    private function district()
    {
        $data = [
            "BOLAANG MONGONDOW",
            "BOLAANG MONGONDOW SELATAN",
            "BOLAANG MONGONDOW TIMUR",
            "BOLAANG MONGONDOW UTARA",
            "SIAU TAGULANDANG BIARO",
            "KEPULAUAN SANGIHE",
            "KEPULAUAN TALAUD",
            "BITUNG",
            "KOTAMOBAGU",
            "MANADO",
            "TOMOHON",
            "MINAHASA",
            "MINAHASA SELATAN",
            "MINAHASA TENGGARA",
            "MINAHASA UTARA",
        ];

        foreach($data as $district) {
            District::create(['name' => $district]);
        }
    }

    private function education()
    {
        $data = [
            "TK",
            "SD",
            "SMP",
            "SMA/SMK",
            "D1",
            "D2",
            "D3",
            "S1/D4",
            "S2",
            "S3"
        ];

        foreach($data as $education) {
            Education::create(['name' => $education]);
        }
    }

    private function ethicType()
    {
        $data = [
            "Tolour",
            "Tonsawang",
            "Minahasa",
            "Sangihe Talaud",
            "Sangihe",
            "Toraja",
            "Tonsea",
            "Pasan",
            "Tontemboan",
            "Tionghoa",
            "Ambon",
            "Gorontalo",
            "Mori",
            "Jawa",
            "Sulteng",
            "Maluku",
            "Satal",
            "Tombulu",
            "Dayak",
            "Manado",
            "Bali",
            "Alor",
            "Batak",
            "NTT",
            "Mongondow",
            "Papua",
            "Bugis",
        ];

        foreach($data as $ethic) {
            Ethnic::create(['name' => $ethic]);
        }
    }

    private function familyTree()
    {
        $data = [
            'suami',
            'istri',
            'anak',
            'orang tua',
            'cucu',
            'famili lain',
            'menantu',
            'mertua',
            'pembantu'
        ];

        foreach($data as $family_tree) {
            FamilyTree::create(['name' => $family_tree]);
        }
    }

    private function memberJobType()
    {
        $data = [
            "Pegawai Negeri Sipil",
            "Pelajar/Mahasiswa",
            "Tani",
            "Karyawan Swasta",
            "Tidak/Belum Bekerja",
            "TNI",
            "POLRI",
            "Pedagang",
            "Nelayan",
            "Pendeta",
            "Wirausaha",
            "Pengacara",
            "Pegawai BUMN",
            "Dokter",
            "Guru",
            "Dosen",
            "Tukang",
            "Pensiunan",
            "Buruh",
            "Anggota Dewan",
            "Tenaga Medis",
            "Pilot",
            "Perangkat Desa",
            "Lurah",
            "Mengurus Rumah Tangga",
            "Pelaut",
            "Supir",
            "Pegawai Honorer",
            "Perawat",
            "Swasta"
        ];

        foreach($data as $job_type) {
            JobType::create(['name' => $job_type]);
        }
    }

    private function marital()
    {
        $data = [
            "Nikah",
            "Cerai Hidup",
            "Cerai Mati",
            "Tidak Nikah",
            "Belum Nikah"
        ];

        foreach($data as $marital) {
            Marital::create(['name' => $marital]);
        }
    }

    private function memberMoveType()
    {
        $data = [
            [
                "name" => "Atestasi Keluar",
                "description" => "Pindah gereja dengan pemberitahuan"
            ],
            [
                "name" => "Surat Pindah",
                "description" => "Pindah jemaat dengan surat pemberitahuan"
            ],
            [
                "name" => "Tanpa Pemberitahuan",
                "description" => "Pindah tanpa pemberitahuan"
            ],
        ];

        foreach($data as $member_move_type) {
            MemberMoveType::create($member_move_type);
        }
    }

    private function regions()
    {
        $data = [
            "AIRMADIDI I",
            "AIRMADIDI II",
            "AMURANG I",
            "AMURANG II",
            "BELANG",
            "BITUNG I",
            "BITUNG II",
            "BITUNG III",
            "BITUNG IV",
            "BITUNG IX",
            "BITUNG V",
            "BITUNG VI",
            "BITUNG VII",
            "BITUNG VIII",
            "BITUNG X",
            "BITUNG XI",
            "BITUNG XII",
            "BUNAKEN",
            "TALISE GANGGA",
            "KAKAS I",
            "KAKAS II",
            "KAKASKASEN",
            "KALAWAT I",
            "KALAWAT II",
            "KAWANGKOAN I",
            "KAWANGKOAN II",
            "KEMA",
            "KEMBES",
            "KUMELEMBUAI",
            "LANGOWAN I",
            "LANGOWAN II",
            "LANGOWAN III",
            "LANGOWAN IV",
            "LANGOWAN KELELONDEI",
            "LEMBEAN KOMBI",
            "LEMBEAN KORA-KORA",
            "LIKUPANG I",
            "LIKUPANG II",
            "LIKUPANG III",
            "MAESA",
            "MANADO BARAT DAYA",
            "MANADO MALALAYANG",
            "MANADO MALALAYANG BARAT",
            "MANADO MAPANGET TUMPA",
            "MANADO SARIO",
            "MANADO SELATAN I",
            "MANADO SENTRUM",
            "MANADO TELING",
            "MANADO TENGGARA",
            "MANADO TIMUR I",
            "MANADO TIMUR II",
            "MANADO TIMUR III",
            "MANADO TIMUR IV",
            "MANADO TIMUR V",
            "MANADO TIMUR VI",
            "MANADO TITIWUNGEN",
            "MANADO UTARA I",
            "MANADO UTARA II",
            "MANADO UTARA III",
            "MANADO UTARA IV",
            "MANADO WAWONASA KOMBOS",
            "MANADO WINANGUN",
            "MANDOLANG I",
            "MANDOLANG II",
            "MAPANGET I",
            "MAPANGET II",
            "MAPANGET III",
            "MAPANGET IV",
            "MINAWEROT",
            "MODOINDING",
            "MOTOLING",
            "MOTOLING TIMUR",
            "PAKOLOR INDAH",
            "PASAN",
            "PINAESAAN",
            "PINASIOWAN",
            "PINELENG",
            "RANOIAPO",
            "RATAHAN",
            "RATATOTOK",
            "REMBOKEN",
            "SEREI",
            "SINONSAYANG",
            "SONDER",
            "TANAWANGKO I",
            "TANAWANGKO II",
            "TANDENGAN",
            "TARERAN I",
            "TARERAN II",
            "TATAPAAN INDAH",
            "TATELU",
            "TENGA",
            "TOMBATU",
            "TOMBATU BARAT",
            "TOMBATU SELATAN",
            "TOMBATU TIMUR",
            "TOMOHON I",
            "TOMOHON II",
            "TOMOHON III",
            "TOMPASO BARU I",
            "TOMPASO BARU II",
            "TONDANO",
            "TONDANO I",
            "TONDANO II",
            "TONDANO III",
            "TONDANO IV",
            "TUMOMPASO I",
            "TUMOMPASO II",
            "TUMPAAN",
            "WORI I",
            "TATELU 1",
            "DIMALAK",
            "SEA",
            "BANGKA",
            "TALAWAAN",
            "MANADO SELATAN II",
            "WORI II",
            "MOTOLING LOLOMBULAN",
            "AMURANG III",
            "REMBOKEN 1",
        ];

        foreach ($data as $region) {
            Region::create(['name' => $region]);
        }

    }

    private function regionPositions()
    {
        $data = [
            'Pusat Kota',
            'Pinggir Kota',
            'Desa',
            'Desa Terpencil'
        ];

        foreach($data as $region_position) {
            RegionPosition::create(['name' => $region_position]);
        }
    }

    private function topographies()
    {
        $data = [
            "Pegunungan",
            "Perbukitan",
            "Lembah",
            "Pinggir Danau",
            "Pinggir Sungai",
            "Pesisir Pantai",
            "Kepulauan"
        ];

        foreach($data as $topography) {
            Topography::create(["name" => $topography]);
        }
    }

    private function memberTrainingType()
    {
        $data = [
            "Latihan Kepemimpinan Kristen dan Kepelayanan Gereja",
            "Latihan Kepemimpinan Pemuda Gereja",
            "Latihan Kader Remaja Gereja",
            "Latihan Tenaga Pembina Remaja",
            "Penataran Dasar Guru Sekolah Minggu",
            "Latihan Kepemimpinan Pelayanan Anak"
        ];

        foreach($data as $member_training) {
            TrainingType::create(['name' => $member_training]);
        }
    }

}
