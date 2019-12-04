<?php

use App\Models\General\AssetCondition;
use App\Models\General\AssetManager;
use App\Models\General\AssetObtain;
use App\Models\General\AssetType;
use App\Models\General\BloodType;
use App\Models\General\DisabilityType;
use App\Models\General\District;
use App\Models\General\Education;
use App\Models\General\Ethnic;
use App\Models\General\FamilyTree;
// use App\Models\General\JobPositionType;
use App\Models\General\JobType;
use App\Models\General\Marital;
use App\Models\General\MemberMoveType;
use App\Models\General\Region;
use App\Models\General\RegionPosition;
use App\Models\General\Subdistrict;
use App\Models\General\Topography;
use App\Models\General\TrainingType;
use App\Models\General\UrbanVillage;
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
        // $this->memberJobPositionType();
        $this->memberJobType();
        $this->marital();
        $this->memberMoveType();
        $this->regions();
        $this->regionPositions();
        $this->subdistrict();
        $this->topographies();
        $this->memberTrainingType();
        $this->urbanVillage();
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

    // private function memberJobPositionType()
    // {
    //     $data = [
    //     ];
    //     foreach($data as $job_position) {
    //         JobPositionType::create($job_position);
    //     }
    // }

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

    private function subdistrict()
    {
        $data = [
            [
                'name' => 'BILALANG',
                'district_id' => 1
            ],
            [
                'name' => 'BOLAANG',
                'district_id' => 1
            ],
            [
                'name' => 'BOLAANG TIMUR',
                'district_id' => 1
            ],
            [
                'name' => 'DUMOGA',
                'district_id' => 1
            ],
            [
                'name' => 'DUMOGA BARAT',
                'district_id' => 1
            ],
            [
                'name' => 'DUMOGA TENGAH',
                'district_id' => 1
            ],
            [
                'name' => 'DUMOGA TENGGARA',
                'district_id' => 1
            ],
            [
                'name' => 'DUMOGA TIMUR',
                'district_id' => 1
            ],
            [
                'name' => 'DUMOGA UTARA',
                'district_id' => 1
            ],
            [
                'name' => 'LOLAK',
                'district_id' => 1
            ],
            [
                'name' => 'LOLAYAN',
                'district_id' => 1
            ],
            [
                'name' => 'PASSI BARAT',
                'district_id' => 1
            ],
            [
                'name' => 'PASSI TIMUR',
                'district_id' => 1
            ],
            [
                'name' => 'POIGAR',
                'district_id' => 1
            ],
            [
                'name' => 'SANG TOMBOLANG',
                'district_id' => 1
            ],
            [
                'name' => 'BOLAAN UKI',
                'district_id' => 2
            ],
            [
                'name' => 'PINOLOSIAN',
                'district_id' => 2
            ],
            [
                'name' => 'PINOLOSIAN TENGAH',
                'district_id' => 2
            ],
            [
                'name' => 'PINOLOSIAN TIMUR',
                'district_id' => 2
            ],
            [
                'name' => 'POSIGADAN',
                'district_id' => 2
            ],
            [
                'name' => 'KOTABUNAN',
                'district_id' => 3
            ],
            [
                'name' => 'MODAYAG',
                'district_id' => 3
            ],
            [
                'name' => 'MODAYAG BARAT',
                'district_id' => 3
            ],
            [
                'name' => 'NUANGAN',
                'district_id' => 3
            ],
            [
                'name' => 'TUTUYAN',
                'district_id' => 3
            ],
            [
                'name' => 'BINTAUNA',
                'district_id' => 4
            ],
            [
                'name' => 'BOLANGITANG BARAT',
                'district_id' => 4
            ],
            [
                'name' => 'BOLANGITANG TIMUR',
                'district_id' => 4
            ],
            [
                'name' => 'KAIDIPANG',
                'district_id' => 4
            ],
            [
                'name' => 'PINOGALUMAN',
                'district_id' => 4
            ],
            [
                'name' => 'SANGKUB',
                'district_id' => 4
            ],
            [
                'name' => 'BIARO',
                'district_id' => 5
            ],
            [
                'name' => 'SIAU BARAT',
                'district_id' => 5
            ],
            [
                'name' => 'SIAU BARAT SELATAN',
                'district_id' => 5
            ],
            [
                'name' => 'SIAU BARAT UTARA',
                'district_id' => 5
            ],
            [
                'name' => 'SIAU TENGAH',
                'district_id' => 5
            ],
            [
                'name' => 'SIAU TIMUR',
                'district_id' => 5
            ],
            [
                'name' => 'SIAU TIMUR SELATAN',
                'district_id' => 5
            ],
            [
                'name' => 'TAGULANDANG',
                'district_id' => 5
            ],
            [
                'name' => 'TAGULANDANG SELATAN',
                'district_id' => 5
            ],
            [
                'name' => 'TAGULANDANG UTARA',
                'district_id' => 5
            ],
            [
                'name' => 'KENDAHE',
                'district_id' => 6
            ],
            [
                'name' => 'KEPULAUAN MARORE',
                'district_id' => 6
            ],
            [
                'name' => 'MANGANITU',
                'district_id' => 6
            ],
            [
                'name' => 'MANGANITU SELATAN',
                'district_id' => 6
            ],
            [
                'name' => 'NUSA TABUKAN',
                'district_id' => 6
            ],
            [
                'name' => 'TABUKAN SELATAN',
                'district_id' => 6
            ],
            [
                'name' => 'TABUKAN SELATAN TENGAH',
                'district_id' => 6
            ],
            [
                'name' => 'TABUKAN SELATAN TENGGARA',
                'district_id' => 6
            ],
            [
                'name' => 'TABUKAN TENGAH',
                'district_id' => 6
            ],
            [
                'name' => 'TABUKAN UTARA',
                'district_id' => 6
            ],
            [
                'name' => 'TAHUNA',
                'district_id' => 6
            ],
            [
                'name' => 'TAHUNA BARAT',
                'district_id' => 6
            ],
            [
                'name' => 'TAHUNA TIMUR',
                'district_id' => 6
            ],
            [
                'name' => 'TAMAKO',
                'district_id' => 6
            ],
            [
                'name' => 'TATOARENG',
                'district_id' => 6
            ],
            [
                'name' => 'BEO',
                'district_id' => 7
            ],
            [
                'name' => 'BEO SELATAN',
                'district_id' => 7
            ],
            [
                'name' => 'BEO UTARA',
                'district_id' => 7
            ],
            [
                'name' => 'DAMAU',
                'district_id' => 7
            ],
            [
                'name' => 'ESSANG',
                'district_id' => 7
            ],
            [
                'name' => 'ESSANG SELATAN',
                'district_id' => 7
            ],
            [
                'name' => 'GEMEH',
                'district_id' => 7
            ],
            [
                'name' => 'KABARUAN',
                'district_id' => 7
            ],
            [
                'name' => 'KALONGAN',
                'district_id' => 7
            ],
            [
                'name' => 'LIRUNG',
                'district_id' => 7
            ],
            [
                'name' => 'MELONGUANE',
                'district_id' => 7
            ],
            [
                'name' => 'MELONGUANE TIMUR',
                'district_id' => 7
            ],
            [
                'name' => 'MIANGAS',
                'district_id' => 7
            ],
            [
                'name' => 'MORONGE',
                'district_id' => 7
            ],
            [
                'name' => 'NANUSA',
                'district_id' => 7
            ],
            [
                'name' => 'PULUTAN',
                'district_id' => 7
            ],
            [
                'name' => 'RAINIS',
                'district_id' => 7
            ],
            [
                'name' => 'SALIBABU',
                'district_id' => 7
            ],
            [
                'name' => 'TAMPAN AMMA',
                'district_id' => 7
            ],
            [
                'name' => 'AERTEMBAGA',
                'district_id' => 8
            ],
            [
                'name' => 'GIRIAN',
                'district_id' => 8
            ],
            [
                'name' => 'LEMBEH SELATAN',
                'district_id' => 8
            ],
            [
                'name' => 'LEMBEH UTARA',
                'district_id' => 8
            ],
            [
                'name' => 'MADIDIR',
                'district_id' => 8
            ],
            [
                'name' => 'MAESA',
                'district_id' => 8
            ],
            [
                'name' => 'MATUARI',
                'district_id' => 8
            ],
            [
                'name' => 'RANOWULU',
                'district_id' => 8
            ],
            [
                'name' => 'KOTAMOBAGU BARAT',
                'district_id' => 9
            ],
            [
                'name' => 'KOTAMOBAGU SELATAN',
                'district_id' => 9
            ],
            [
                'name' => 'KOTAMOBAGU TIMUR',
                'district_id' => 9
            ],
            [
                'name' => 'KOTAMOBAGU UTARA',
                'district_id' => 9
            ],
            [
                'name' => 'BUNAKEN',
                'district_id' => 10
            ],
            [
                'name' => 'BUNAKEN KEPULAUAN',
                'district_id' => 10
            ],
            [
                'name' => 'MALALAYANG',
                'district_id' => 10
            ],
            [
                'name' => 'MAPANGET',
                'district_id' => 10
            ],
            [
                'name' => 'PAAL DUA',
                'district_id' => 10
            ],
            [
                'name' => 'SARIO',
                'district_id' => 10
            ],
            [
                'name' => 'SINGKIL',
                'district_id' => 10
            ],
            [
                'name' => 'TIKALA',
                'district_id' => 10
            ],
            [
                'name' => 'TUMINTING',
                'district_id' => 10
            ],
            [
                'name' => 'WANEA',
                'district_id' => 10
            ],
            [
                'name' => 'WENANG',
                'district_id' => 10
            ],
            [
                'name' => 'TOMOHON BARAT',
                'district_id' => 11
            ],
            [
                'name' => 'TOMOHON SELATAN',
                'district_id' => 11
            ],
            [
                'name' => 'TOMOHON TENGAH',
                'district_id' => 11
            ],
            [
                'name' => 'TOMOHON TIMUR',
                'district_id' => 11
            ],
            [
                'name' => 'TOMOHON UTARA',
                'district_id' => 11
            ],
            [
                'name' => 'ERIS',
                'district_id' => 12
            ],
            [
                'name' => 'KAKAS',
                'district_id' => 12
            ],
            [
                'name' => 'KAKAS BARAT',
                'district_id' => 12
            ],
            [
                'name' => 'KAWANGKOAN',
                'district_id' => 12
            ],
            [
                'name' => 'KAWANGKOAN BARAT',
                'district_id' => 12
            ],
            [
                'name' => 'KAWANGKOAN UTARA',
                'district_id' => 12
            ],
            [
                'name' => 'KOMBI',
                'district_id' => 12
            ],
            [
                'name' => 'LANGOWAN BARAT',
                'district_id' => 12
            ],
            [
                'name' => 'LANGOWAN TIMUR',
                'district_id' => 12
            ],
            [
                'name' => 'LANGOWAN UTARA',
                'district_id' => 12
            ],
            [
                'name' => 'LEMBEAN TIMUR',
                'district_id' => 12
            ],
            [
                'name' => 'MANDOLANG',
                'district_id' => 12
            ],
            [
                'name' => 'PINELENG',
                'district_id' => 12
            ],
            [
                'name' => 'REMBOKEN',
                'district_id' => 12
            ],
            [
                'name' => 'SONDER',
                'district_id' => 12
            ],
            [
                'name' => 'TOMBARIRI',
                'district_id' => 12
            ],
            [
                'name' => 'TOMBARIRI TIMUR',
                'district_id' => 12
            ],
            [
                'name' => 'TOMBULU',
                'district_id' => 12
            ],
            [
                'name' => 'TOMPASO',
                'district_id' => 12
            ],
            [
                'name' => 'TOMPASO BARAT',
                'district_id' => 12
            ],
            [
                'name' => 'TONDANO BARAT',
                'district_id' => 12
            ],
            [
                'name' => 'TONDANO SELATAN',
                'district_id' => 12
            ],
            [
                'name' => 'TONDANO TIMUR',
                'district_id' => 12
            ],
            [
                'name' => 'TONDANO UTARA',
                'district_id' => 12
            ],
            [
                'name' => 'LANGOWAN SELATAN',
                'district_id' => 12
            ],
            [
                'name' => 'AMURANG',
                'district_id' => 13
            ],
            [
                'name' => 'AMURANG BARAT',
                'district_id' => 13
            ],
            [
                'name' => 'AMURANG TIMUR',
                'district_id' => 13
            ],
            [
                'name' => 'KUMELEMBUAI',
                'district_id' => 13
            ],
            [
                'name' => 'MAESAAN',
                'district_id' => 13
            ],
            [
                'name' => 'MOTOLING',
                'district_id' => 13
            ],
            [
                'name' => 'MOTOLING BARAT',
                'district_id' => 13
            ],
            [
                'name' => 'MOTOLING TIMUR',
                'district_id' => 13
            ],
            [
                'name' => 'RANOYAPO',
                'district_id' => 13
            ],
            [
                'name' => 'SINONSAYANG',
                'district_id' => 13
            ],
            [
                'name' => 'SULUUN TARERAN',
                'district_id' => 13
            ],
            [
                'name' => 'TARERAN',
                'district_id' => 13
            ],
            [
                'name' => 'TATAPAAN',
                'district_id' => 13
            ],
            [
                'name' => 'TENGA',
                'district_id' => 13
            ],
            [
                'name' => 'TOMPASO BARU',
                'district_id' => 13
            ],
            [
                'name' => 'MODOINDING',
                'district_id' => 13
            ],
            [
                'name' => 'TUMPAAN',
                'district_id' => 13
            ],
            [
                'name' => 'BELANG',
                'district_id' => 14
            ],
            [
                'name' => 'PASAN',
                'district_id' => 14
            ],
            [
                'name' => 'PUSOMAEN',
                'district_id' => 14
            ],
            [
                'name' => 'RATAHAN',
                'district_id' => 14
            ],
            [
                'name' => 'RATAHAN TIMUR',
                'district_id' => 14
            ],
            [
                'name' => 'RATATOTOK',
                'district_id' => 14
            ],
            [
                'name' => 'SILIAN RAYA',
                'district_id' => 14
            ],
            [
                'name' => 'TOMBATU',
                'district_id' => 14
            ],
            [
                'name' => 'TOMBATU TIMUR',
                'district_id' => 14
            ],
            [
                'name' => 'TOMBATU UTARA',
                'district_id' => 14
            ],
            [
                'name' => 'TOULUAAN',
                'district_id' => 14
            ],
            [
                'name' => 'TOULUAAN SELATAN',
                'district_id' => 14
            ],
            [
                'name' => 'AIRMADIDI',
                'district_id' => 12
            ],
            [
                'name' => 'DIMEMBE',
                'district_id' => 12
            ],
            [
                'name' => 'KALAWAT',
                'district_id' => 12
            ],
            [
                'name' => 'KAUDITAN',
                'district_id' => 12
            ],
            [
                'name' => 'KEMA',
                'district_id' => 12
            ],
            [
                'name' => 'LIKUPANG BARAT',
                'district_id' => 12
            ],
            [
                'name' => 'LIKUPANG SELATAN',
                'district_id' => 12
            ],
            [
                'name' => 'LIKUPANG TIMUR',
                'district_id' => 12
            ],
            [
                'name' => 'TALAWAAN',
                'district_id' => 12
            ],
            [
                'name' => 'WORI',
                'district_id' => 12
            ],
        ];

        foreach($data as $subdistrict) {
            Subdistrict::create($subdistrict);
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

    private function urbanVillage()
    {
        $data = [
            [
                "name" => "BILALANG BARU",
                "subdistrict_id" => 1
            ],
            [
                "name" => "BILALANG III",
                "subdistrict_id" => 1
            ],
            [
                "name" => "BILALANG III UTARA",
                "subdistrict_id" => 1
            ],
            [
                "name" => "BILALANG IV",
                "subdistrict_id" => 1
            ],
            [
                "name" => "KOLINGANGAAN",
                "subdistrict_id" => 1
            ],
            [
                "name" => "TUDU AOG",
                "subdistrict_id" => 1
            ],
            [
                "name" => "TUDU AOG BARU",
                "subdistrict_id" => 1
            ],
            [
                "name" => "BANGOMULUNOW",
                "subdistrict_id" => 2
            ],
            [
                "name" => "INOBONTO",
                "subdistrict_id" => 2
            ],
            [
                "name" => "INOBONTO I",
                "subdistrict_id" => 2
            ],
            [
                "name" => "INOBONTO II",
                "subdistrict_id" => 2
            ],
            [
                "name" => "KOMANGAAN",
                "subdistrict_id" => 2
            ],
            [
                "name" => "LANGAGON",
                "subdistrict_id" => 2
            ],
            [
                "name" => "LANGAGON DUA",
                "subdistrict_id" => 2
            ],
            [
                "name" => "LANGAGON SATU",
                "subdistrict_id" => 2
            ],
            [
                "name" => "SOLIMANDUNGAN BARU",
                "subdistrict_id" => 2
            ],
            [
                "name" => "SOLIMANDUNGAN I",
                "subdistrict_id" => 2
            ],
            [
                "name" => "SOLIMANDUNGAN II",
                "subdistrict_id" => 2
            ],
            [
                "name" => "AMBANG I",
                "subdistrict_id" => 3
            ],
            [
                "name" => "AMBANG II",
                "subdistrict_id" => 3
            ],
            [
                "name" => "BANTIK",
                "subdistrict_id" => 3
            ],
            [
                "name" => "BOLAANG",
                "subdistrict_id" => 3
            ],
            [
                "name" => "BOLAANG SATU",
                "subdistrict_id" => 3
            ],
            [
                "name" => "LOLAN",
                "subdistrict_id" => 3
            ],
            [
                "name" => "LOLAN DUA",
                "subdistrict_id" => 3
            ],
            [
                "name" => "TADOY",
                "subdistrict_id" => 3
            ],
            [
                "name" => "TADOY I",
                "subdistrict_id" => 3
            ],
            [
                "name" => "BUMBUNGON",
                "subdistrict_id" => 4
            ],
            [
                "name" => "DUMOGA SATU",
                "subdistrict_id" => 4
            ],
            [
                "name" => "KANAAN",
                "subdistrict_id" => 4
            ],
            [
                "name" => "MOTOTABIAN",
                "subdistrict_id" => 4
            ],
            [
                "name" => "PONOMPIAAN",
                "subdistrict_id" => 4
            ],
            [
                "name" => "PUSIAN",
                "subdistrict_id" => 4
            ],
            [
                "name" => "SERASI",
                "subdistrict_id" => 4
            ],
            [
                "name" => "SINIYUNG",
                "subdistrict_id" => 4
            ],
            [
                "name" => "SINIYUNG SATU",
                "subdistrict_id" => 4
            ],
            [
                "name" => "TORUAKAT",
                "subdistrict_id" => 4
            ],
            [
                "name" => "DOLODUO",
                "subdistrict_id" => 5
            ],
            [
                "name" => "DOLODUO DUA",
                "subdistrict_id" => 5
            ],
            [
                "name" => "DOLODUO SATU",
                "subdistrict_id" => 5
            ],
            [
                "name" => "DOLODUO TIGA",
                "subdistrict_id" => 5
            ],
            [
                "name" => "IKHWAN",
                "subdistrict_id" => 5
            ],
            [
                "name" => "MATAYANGAN",
                "subdistrict_id" => 5
            ],
            [
                "name" => "MEKARUO",
                "subdistrict_id" => 5
            ],
            [
                "name" => "TORAUT",
                "subdistrict_id" => 5
            ],
            [
                "name" => "TORAUT UTARA",
                "subdistrict_id" => 5
            ],
            [
                "name" => "UUAN",
                "subdistrict_id" => 5
            ],
            [
                "name" => "WANGGA BARU",
                "subdistrict_id" => 5
            ],
            [
                "name" => "IBOLIAN",
                "subdistrict_id" => 6
            ],
            [
                "name" => "IBOLIAN SATU",
                "subdistrict_id" => 6
            ],
            [
                "name" => "KASIO BARAT",
                "subdistrict_id" => 6
            ],
            [
                "name" => "KINOMALINGAN",
                "subdistrict_id" => 6
            ],
            [
                "name" => "KOSIO",
                "subdistrict_id" => 6
            ],
            [
                "name" => "KOSIO TIMUR",
                "subdistrict_id" => 6
            ],
            [
                "name" => "WERDHI AGUNG",
                "subdistrict_id" => 6
            ],
            [
                "name" => "WERDHI AGUNG SELATAN",
                "subdistrict_id" => 6
            ],
            [
                "name" => "WERDHI AGUNG TIMUR",
                "subdistrict_id" => 6
            ],
            [
                "name" => "WERDHI AGUNG UTARA",
                "subdistrict_id" => 6
            ],
            [
                "name" => "BONAWANG",
                "subdistrict_id" => 7
            ],
            [
                "name" => "DUMARA",
                "subdistrict_id" => 7
            ],
            [
                "name" => "IKUNA",
                "subdistrict_id" => 7
            ],
            [
                "name" => "KONAROM",
                "subdistrict_id" => 7
            ],
            [
                "name" => "KONAROM BARAT",
                "subdistrict_id" => 7
            ],
            [
                "name" => "KONAROM UTARA",
                "subdistrict_id" => 7
            ],
            [
                "name" => "OSION",
                "subdistrict_id" => 7
            ],
            [
                "name" => "TAPADAKA SATU",
                "subdistrict_id" => 7
            ],
            [
                "name" => "TAPADAKA TIMUR",
                "subdistrict_id" => 7
            ],
            [
                "name" => "TAPADAKA UTARA",
                "subdistrict_id" => 7
            ],
            [
                "name" => "AMERTHA BUANA",
                "subdistrict_id" => 8
            ],
            [
                "name" => "AMERTHA SARI",
                "subdistrict_id" => 8
            ],
            [
                "name" => "DUMOGA",
                "subdistrict_id" => 8
            ],
            [
                "name" => "DUMOGA II",
                "subdistrict_id" => 8
            ],
            [
                "name" => "IMANDI",
                "subdistrict_id" => 8
            ],
            [
                "name" => "KEMBANG MERTHA",
                "subdistrict_id" => 8
            ],
            [
                "name" => "KEMBANG SARI",
                "subdistrict_id" => 8
            ],
            [
                "name" => "MODOMANG",
                "subdistrict_id" => 8
            ],
            [
                "name" => "MOGOYUNGGUNG",
                "subdistrict_id" => 8
            ],
            [
                "name" => "MOGOYUNGGUNG DUA",
                "subdistrict_id" => 8
            ],
            [
                "name" => "MOGOYUNGGUNG SATU",
                "subdistrict_id" => 8
            ],
            [
                "name" => "PINONOBATUAN",
                "subdistrict_id" => 8
            ],
            [
                "name" => "PINONOBATUAN BARAT",
                "subdistrict_id" => 8
            ],
            [
                "name" => "TONOM",
                "subdistrict_id" => 8
            ],
            [
                "name" => "DONDOMON",
                "subdistrict_id" => 9
            ],
            [
                "name" => "DONDOMON SELATAN",
                "subdistrict_id" => 9
            ],
            [
                "name" => "DONDOMON UTARA",
                "subdistrict_id" => 9
            ],
            [
                "name" => "MOPUGAD SELATAN",
                "subdistrict_id" => 9
            ],
            [
                "name" => "MOPUGAD SELATAN SATU",
                "subdistrict_id" => 9
            ],
            [
                "name" => "MOPUGAD UTARA",
                "subdistrict_id" => 9
            ],
            [
                "name" => "MOPUGAD UTARA DUA",
                "subdistrict_id" => 9
            ],
            [
                "name" => "MOPUGAD UTARA SATU",
                "subdistrict_id" => 9
            ],
            [
                "name" => "MOPUYA SELATAN",
                "subdistrict_id" => 9
            ],
            [
                "name" => "MOPUYA SELATAN DUA",
                "subdistrict_id" => 9
            ],
            [
                "name" => "MOPUYA SELATAN SATU",
                "subdistrict_id" => 9
            ],
            [
                "name" => "MOPUYA UTARA",
                "subdistrict_id" => 9
            ],
            [
                "name" => "MOPUYA UTARA DUA",
                "subdistrict_id" => 9
            ],
            [
                "name" => "MOPUYA UTARA SATU",
                "subdistrict_id" => 9
            ],
            [
                "name" => "TUMOKANG BARU",
                "subdistrict_id" => 9
            ],
            [
                "name" => "TUMOKANG TIMUR",
                "subdistrict_id" => 9
            ],
            [
                "name" => "BATURAPA",
                "subdistrict_id" => 10
            ],
            [
                "name" => "BATURAPA II",
                "subdistrict_id" => 10
            ],
            [
                "name" => "BUMBUNG",
                "subdistrict_id" => 10
            ],
            [
                "name" => "BUNTALO",
                "subdistrict_id" => 10
            ],
            [
                "name" => "BUNTALO SELATAN",
                "subdistrict_id" => 10
            ],
            [
                "name" => "BUNTALO TIMUR",
                "subdistrict_id" => 10
            ],
            [
                "name" => "DIAT",
                "subdistrict_id" => 10
            ],
            [
                "name" => "LABUAN UKI",
                "subdistrict_id" => 10
            ],
            [
                "name" => "LALOW",
                "subdistrict_id" => 10
            ],
            [
                "name" => "LOLAK",
                "subdistrict_id" => 10
            ],
            [
                "name" => "LOLAK II",
                "subdistrict_id" => 10
            ],
            [
                "name" => "LOLAK TAMBOLANGO",
                "subdistrict_id" => 10
            ],
            [
                "name" => "MONGKOINIT",
                "subdistrict_id" => 10
            ],
            [
                "name" => "MOTABANG",
                "subdistrict_id" => 10
            ],
            [
                "name" => "PINDOL",
                "subdistrict_id" => 10
            ],
            [
                "name" => "PINDOLILI",
                "subdistrict_id" => 10
            ],
            [
                "name" => "PINOGALUMAN",
                "subdistrict_id" => 10
            ],
            [
                "name" => "SAUK",
                "subdistrict_id" => 10
            ],
            [
                "name" => "SOLOG",
                "subdistrict_id" => 10
            ],
            [
                "name" => "TANDU",
                "subdistrict_id" => 10
            ],
            [
                "name" => "TOTABUAN",
                "subdistrict_id" => 10
            ],
            [
                "name" => "TUYAT",
                "subdistrict_id" => 10
            ],
            [
                "name" => "ABAK",
                "subdistrict_id" => 11
            ],
            [
                "name" => "BAKAN",
                "subdistrict_id" => 11
            ],
            [
                "name" => "BOMBANON",
                "subdistrict_id" => 11
            ],
            [
                "name" => "KOPANDAKAN II",
                "subdistrict_id" => 11
            ],
            [
                "name" => "LOLAYAN",
                "subdistrict_id" => 11
            ],
            [
                "name" => "MATALI BARU",
                "subdistrict_id" => 11
            ],
            [
                "name" => "MENGKANG",
                "subdistrict_id" => 11
            ],
            [
                "name" => "MOPAIT",
                "subdistrict_id" => 11
            ],
            [
                "name" => "MOPUSI",
                "subdistrict_id" => 11
            ],
            [
                "name" => "TANOYAN SELATAN",
                "subdistrict_id" => 11
            ],
            [
                "name" => "TANOYAN UTARA",
                "subdistrict_id" => 11
            ],
            [
                "name" => "TAPA AOG",
                "subdistrict_id" => 11
            ],
            [
                "name" => "TUNGOI I",
                "subdistrict_id" => 11
            ],
            [
                "name" => "TUNGOI II",
                "subdistrict_id" => 11
            ],
            [
                "name" => "INSIL",
                "subdistrict_id" => 13
            ],
            [
                "name" => "INSIL BARU",
                "subdistrict_id" => 13
            ],
            [
                "name" => "MANEMBO",
                "subdistrict_id" => 13
            ],
            [
                "name" => "MOBUYA",
                "subdistrict_id" => 13
            ],
            [
                "name" => "PANGIAN",
                "subdistrict_id" => 13
            ],
            [
                "name" => "PANGIAN BARAT",
                "subdistrict_id" => 13
            ],
            [
                "name" => "PANGIAN TENGAH",
                "subdistrict_id" => 13
            ],
            [
                "name" => "POOPO",
                "subdistrict_id" => 13
            ],
            [
                "name" => "POOPO BARAT",
                "subdistrict_id" => 13
            ],
            [
                "name" => "POOPO SELATAN",
                "subdistrict_id" => 13
            ],
            [
                "name" => "SINSINGON",
                "subdistrict_id" => 13
            ],
            [
                "name" => "SINSINGON BARAT",
                "subdistrict_id" => 13
            ],
            [
                "name" => "SINSINGON TIMUR",
                "subdistrict_id" => 13
            ],
            [
                "name" => "",
                "subdistrict_id" => 0
            ],
            [
                "name" => "",
                "subdistrict_id" => 0
            ],



            // " GOGALUMAN",14,1
            // " MARIRI BARU",14,2
            // " MARIRI I",14,3
            // " MARIRI II",14,4
            // " MARIRI LAMA",14,5
            // " MONDATONG",14,6
            // " MONDATONG BARU",14,7
            // " NANASI",14,8
            // " NONAPAN",14,9
            // " NONAPAN I",14,10
            // " NONAPAN II",14,11
            // " PERS NANASI TIMUR",14,12
            // " PERS NONAPAN BARU",14,13
            // " POIGAR I",14,14
            // " POIGAR II",14,15
            // " POIGAR III",14,16
            // " POMOMAN",14,17
            // " TANJUNG MARIRI",14,18
            // " TIBERIAS",14,19
            // " WINERU",14,20

            // " AYONG",15,1
            // " BABO",15,2
            // " BATU MERAH",15,3
            // " BOLANGAT",15,4
            // " BOLANGAT TIMUR",15,5
            // " CEMPAKA",15,6
            // " DOMISIL MOONOW",15,7
            // " LOLANAN",15,8
            // " MAELANG",15,9
            // " PANGI",15,10
            // " PANGI TIMUR",15,11
            // " PASIR PUTIH",15,12

            // " BAKIDA",16,1
            // " BINIHA",16,2
            // " BINIHA TIMUR",16,3
            // " DUDEPO",16,4
            // " DUMINANGA",16,5
            // " MOLIBAGU",16,6
            // " PANGIA",16,7
            // " PINOLANTUNGAN",16,8
            // " POPODU",16,9
            // " SALONGO",16,10
            // " SIANANDAKA",16,11
            // " SOGUO",16,12
            // " SONDANA",16,13
            // " SOPUTA",16,14
            // " TABILAA",16,15
            // " TANGAGAH",16,16
            // " TOLONDADU",16,17
            // " TOLONDADU I",16,18
            // " TOLONDADU II",16,19
            // " TOLUAYU",16,20

            // " ILOMATA",17,1
            // " KOMBOT",17,2
            // " LINAWAN",17,3
            // " LINAWAN I",17,4
            // " LUNGKAP",17,5
            // " NUNUK",17,6
            // " PINOLOSIAN",17,7
            // " PINOLOSIAN SELATAN",17,8
            // " TOLOTOYAN",17,9

            // " ADOW",18,1
            // " ADOW SELATAN",18,2
            // " DEAGA",18,3
            // " MATAINDO",18,4
            // " TOBAYAGAN",18,5
            // " TOROSIK",18,6

            // " DAYOW",19,1
            // " DUMAGIN A",19,2
            // " DUMAGIN B",19,3
            // " ILIGON",19,4
            // " MATANDOI",19,5
            // " MODISI",19,6
            // " ONGGUNOI",19,7
            // " PIDUNG",19,8
            // " POSILAGON",19,9

            // " BOTULIODU",20,1
            // " LION",20,2
            // " LUWOO",20,3
            // " MANGGADAA",20,4
            // " MEYAMBANGA",20,5
            // " MILANGODAA",20,6
            // " MILANGODAA BARAT",20,7
            // " MOMALIA I",20,8
            // " MOMALIA II",20,9
            // " PILOLAHUNGA",20,10
            // " SAIBUAH",20,11
            // " SAKTI",20,12
            // " SINOMBAYUGA",20,13
            // " TOLUTU",20,14
            // " TONALA",20,15

            // " BUKAKA",21,1
            // " BULAWAN",21,2
            // " BULAWAN DUA",21,3
            // " BULAWAN SATU",21,4
            // " BUYAT",21,5
            // " BUYAT BARAT",21,6
            // " BUYAT I",21,7
            // " BUYAT II",21,8
            // " BUYAT SELATAN",21,9
            // " BUYAT TENGAH",21,10
            // " KOTABUNAN",21,11
            // " KOTABUNAN BARAT",21,12
            // " KOTABUNAN SELATAN",21,13
            // " PARET",21,14
            // " PARET TIMUR",21,15

            // " BADARO",22,1
            // " BONGKUDAI BARU",22,2
            // " BONGKUDAI SELATAN",22,3
            // " BONGKUDAI TIMUR",22,4
            // " BONGKUDAI UTARA",22,5
            // " BUYANDI",22,6
            // " CANDI REJO",22,7
            // " GUAAN",22,8
            // " KOKAPOI",22,9
            // " KOKAPOI TIMUR",22,10
            // " LANUT",22,11
            // " LIBERIA",22,12
            // " LIBERIA TIMUR",22,13
            // " MOAT",22,14
            // " MODAYAG",22,15
            // " MODAYAG BARAT",22,16
            // " MODAYAG III",22,17
            // " MODAYAG TIMUR",22,18
            // " MOKITOMPIA",22,19
            // " MOTOTOMPIAN",22,20
            // " PURWOREJO",22,21
            // " PURWOREJO TENGAH",22,22
            // " PURWOREJO TIMUR",22,23
            // " SUMBER REJO",22,24
            // " TOBONGON",22,25

            // " BANGKUDAI BARAT",23,1
            // " BANGUNAN WUWUK",23,2
            // " BANGUNAN WUWUK TIMUR",23,3
            // " BONGKUDAI",23,4
            // " INATON",23,5
            // " MOONOW",23,6
            // " MOYONGKOTA",23,7
            // " MOYONGKOTA BARU",23,8
            // " PINONOBATUAN",23,9
            // " TANGATON",23,10

            // " ATOGA",24,1
            // " ATOGA TIMUR",24,2
            // " BAI",24,3
            // " IDUMUN",24,4
            // " IYOK",24,5
            // " JIKO",24,6
            // " JIKO BELANGA",24,7
            // " JIKO UTARA",24,8
            // " LOYOW",24,9
            // " MATABULU",24,10
            // " MATABULU TIMUR",24,11
            // " MOLOBOG",24,12
            // " MOLOBOG BARAT",24,13
            // " MOLOBOG TIMUR",24,14
            // " MOTONGKAD",24,15
            // " MOTONGKAD SELATAN",24,16
            // " MOTONGKAD TENGAH",24,17
            // " MOTONGKAD UTARA",24,18
            // " NUANGAN",24,19
            // " NUANGAN BARAT",24,20
            // " NUANGAN I",24,21
            // " NUANGAN SELATAN",24,22

            // " DODAP",25,1
            // " DODAP PANTAI",25,2
            // " DODOP MIKASA",25,3
            // " KAYUMOYONDI",25,4
            // " TOGID",25,5
            // " TOMBOLIKAT",25,6
            // " TOMBOLIKAT SELATAN",25,7
            // " TUTUYAN",25,8
            // " TUTUYAN II",25,9
            // " TUTUYAN III",25,10

            // " BATULINTIK",26,1
            // " BINTAUNA",26,2
            // " BINTAUNA PANTAI",26,3
            // " BUNIA",26,4
            // " BUNONG",26,5
            // " HUNTUK",26,6
            // " KOPI",26,7
            // " KUHANGA",26,8
            // " MINANGA",26,9
            // " MOME",26,10
            // " PADANG",26,11
            // " PADANG BARAT",26,12
            // " PIMPI",26,13
            // " TALAGA",26,14
            // " VAHUTA",26,15

            // " BOLANGITANG",27,1
            // " BOLANGITANG I",27,2
            // " BOLANGITANG II",27,3
            // " IYOK",27,4
            // " JAMBUSARANG",27,5
            // " KEIMANGA",27,6
            // " LANGI",27,7
            // " OLLOT",27,8
            // " OLLOT I",27,9
            // " OLLOT II",27,10
            // " PAKU",27,11
            // " PAKU SELATAN",27,12
            // " SONUO",27,13
            // " TALAGA",27,14
            // " TALAGA TOMOAGU",27,15
            // " TANJUNG BUAYA",27,16
            // " TOTE",27,17
            // " WAKAT",27,18

            // " BINJEITA",28,1
            // " BINJEITA I",28,2
            // " BINJEITA II",28,3
            // " BINUANGA",28,4
            // " BINUNI",28,5
            // " BIONTONG",28,6
            // " BIONTONG I",28,7
            // " BIONTONG II",28,8
            // " BOHABAK I",28,9
            // " BOHABAK II",28,10
            // " BOHABAK III",28,11
            // " BOHABAK IV",28,12
            // " LIPU BOGU",28,13
            // " MOKODITEK",28,14
            // " MOKODITEK I",28,15
            // " NAGARA",28,16
            // " NUNUKA",28,17
            // " SALEO",28,18
            // " SALEO SATU",28,19
            // " TANJUNG LABOU",28,20

            // " BIGO",29,1
            // " BIGO SELATAN",29,2
            // " BOROKO",29,3
            // " BOROKO TIMUR",29,4
            // " BOROKO UTARA",29,5
            // " GIHANG",29,6
            // " INOMUNGA",29,7
            // " INOMUNGA UTARA",29,8
            // " KOMUS DUA TIMUR",29,9
            // " KOMUS II",29,10
            // " KUALA",29,11
            // " KUALA UTARA",29,12
            // " PONTAK",29,13
            // " SOLIGIR",29,14
            // " SOLO",29,15

            // " BATU BANTAYO",30,1
            // " BATU TAJAM",30,2
            // " BUKO",30,3
            // " BUKO SELATAN",30,4
            // " BUKO UTARA",30,5
            // " BUSATO",30,6
            // " DALAPULI",30,7
            // " DALAPULI BARAT",30,8
            // " DALAPULI TIMUR",30,9
            // " DENGI",30,10
            // " DUINI",30,11
            // " KAYU OGU",30,12
            // " KOMUS I",30,13
            // " PADANGO",30,14
            // " TAMBULONG PANTAI",30,15
            // " TAMBULONG TIMUR",30,16
            // " TANJUNG SIDUPA",30,17
            // " TINTULOW UTARA",30,18
            // " TOMBULANG",30,19
            // " TUNTULOW",30,20
            // " TUNTUNG",30,21
            // " TUNTUNG TIMUR",30,22

            // " AMPENG SEMBEKA",31,1
            // " BUSISINGO",31,2
            // " BUSISINGO UTARA",31,3
            // " MOKUSATO",31,4
            // " MONOMPIA",31,5
            // " PANGKUSA",31,6
            // " SAMPIRO",31,7
            // " SANGKUB I",31,8
            // " SANGKUB II",31,9
            // " SANGKUB III",31,10
            // " SANGKUB TIMUR",31,11
            // " SANGLUP EMPAT",31,12
            // " SANGTOMBOLANG",31,13
            // " SIDODADI",31,14
            // " SUKA MAKMUR",31,15
            // " TOMBOLANGO",31,16

            // " BUANG",32,1
            // " DALINSAHENG",32,2
            // " KARUNGO",32,3
            // " LAMANGGO",32,4
            // " TOPE",32,5
            // " BUMBIHA",33,1
            // " KANAWONG",33,2
            // " LEHI",33,3
            // " MAKALEHI",33,4
            // " MAKALEHI TIMUR",33,5
            // " MAKALEHI UTARA",33,6
            // " ONDONG",33,7
            // " PANIKI",33,8
            // " PASENG",33,9
            // " PEHE",33,10
            // " PELING",33,11
            // " PELING SAWANG",33,12

            // " BATUSENGGO",34,1
            // " KAPETA",34,2
            // " LAGHAENG",34,3
            // " MAHUNENI",34,4
            // " MAKOA",34,5
            // " TALAWID",34,6
            // " TANAKI",34,7

            // " BATUBULAN",35,1
            // " HIUNG",35,2
            // " KAWAHANG",35,3
            // " KIAWANG",35,4
            // " KINALI",35,5
            // " MINI",35,6
            // " NAMENG",35,7
            // " WINANGUN",35,8
            // " BEONG",36,1
            // " DOMPASE",36,2
            // " LAI",36,3
            // " SALILI",36,4
            // " AKESIMBEKA",37,1
            // " APELAWO",37,2
            // " BAHU",37,3
            // " BEBALI",37,4
            // " BUISE",37,5
            // " BUKIDE",37,6
            // " DAME",37,7
            // " DAME I",37,8
            // " DEAHE",37,9
            // " KANANG",37,10
            // " KARALUNG",37,11
            // " KARALUNG SATU",37,12
            // " LIA",37,13
            // " LIA SATU",37,14
            // " TARORANE",37,15
            // " TATAHADENG",37,16
            // " BALIRANGENG",38,1
            // " BANDIL",38,2
            // " BIAU",38,3
            // " BIAU SEHA",38,4
            // " BINALU",38,5
            // " BUHIAS",38,6
            // " KALIHIANG",38,7
            // " LAHOPANG",38,8
            // " MALA",38,9
            // " MATOLE",38,10
            // " PAHEPA",38,11
            // " PANGIROLONG",38,12
            // " SAWANG",38,13
            // " TAPILE",38,14
            // " APENGSALA",39,1
            // " BAHOI",39,2
            // " BALEHUMARA",39,3
            // " BARANGKA PEHE",39,4
            // " BOTO",39,5
            // " HAASI",39,6
            // " LAINGPATEHI",39,7
            // " LESAH",39,8
            // " LESAH RENDE",39,9
            // " MAHANGIANG",39,10
            // " MOHONGSAWANG",39,11
            // " MULENGAN",39,12
            // " PAHIAMA",39,13
            // " PUMPENTE",39,14
            // " TULUSAN",39,15
            // " BATUMAWIRA",40,1
            // " BIRA KIAMA",40,2
            // " BIRARIKEI",40,3
            // " BUHA",40,4
            // " HUMBIA",40,5
            // " KISIHANG",40,6
            // " BAWO",41,1
            // " BAWOLEU",41,2
            // " BULANGAN",41,3
            // " LUMBO",41,4
            // " MINANGA",41,5
            // " WO",41,6
            // " KAWALUSO",42,1
            // " KENDAHE I",42,2
            // " KENDAHE II",42,3
            // " LIPANG",42,4
            // " MOHONG SAWANG",42,5
            // " PEMPALARAENG",42,6
            // " TALAWID",42,7
            // " TARIANG LAMA",42,8
            // " KAWIO",43,1
            // " MARORE",43,2
            // " MATUTUANG",43,3
            // " BAKALAENG",44,1
            // " BARANGKA",44,2
            // " BARANGKALANG",44,3
            // " BELENGANG",44,4
            // " BENGKA",44,5
            // " HIUNG",44,6
            // " KARATUNG I",44,7
            // " KARATUNG II",44,8
            // " KAUHIS",44,9
            // " LEBO",44,10
            // " MALA",44,11
            // " MANUMPITAENG",44,12
            // " NAHEPESE",44,13
            // " PINEBENTENGANG",44,14
            // " SESIWUNG",44,15
            // " TALOARANE",44,16
            // " TALOARANE I",44,17
            // " TAWOALI",44,18
            // " BATUNDERANG",45,1
            // " BEBALANG",45,2
            // " KALUWATU",45,3
            // " LAINE",45,4
            // " LAPANGO",45,5
            // " LAPANGO I",45,6
            // " LAPEPAHE",45,7
            // " LEHIMI TARIANG",45,8
            // " MAWIRA",45,9
            // " NGALIPAENG I",45,10
            // " NGALIPAENG II",45,11
            // " PINDANG",45,12
            // " SOWAENG",45,13
            // " BUKIDE",46,1
            // " BUKIDE TIMUR",46,2
            // " NANEDAKELE",46,3
            // " NANUSA",46,4
            // " NUSA",46,5
            // " BATUWINGKUNG",47,1
            // " BENTUNG",47,2
            // " BINEBAS",47,3
            // " BIRAHI",47,4
            // " BUKIDE",47,5
            // " BULO",47,6
            // " KALAGHENG",47,7
            // " LAOTONGAN",47,8
            // " LESABE",47,9
            // " LESABE I",47,10
            // " MALAMMENGGU",47,11
            // " MANDOI",47,12
            // " PALARENG",47,13
            // " SIMUENG",47,14
            // " AHA PATUNG",48,1
            // " BEENG",48,2
            // " BEENG LAUT",48,3
            // " BOWONE",48,4
            // " HANGKE",48,5
            // " LEHUPU",48,6
            // " SALURANG",48,7
            // " TAMBUNG",48,8
            // " TENDA",48,9
            // " BASAUH",49,1
            // " DALOKAWENG",49,2
            // " MALISADE",49,3
            // " PINTARENG",49,4
            // " SAMPAKANG",49,5
            // " TUMALEDE",49,6
            // " BIRA",50,1
            // " BIRU",50,2
            // " BOWONGKALI",50,3
            // " BUNGALAWANG",50,4
            // " GUNUNG",50,5
            // " KULUR I",50,6
            // " KULUR II",50,7
            // " KUMA",50,8
            // " KUMA I",50,9
            // " MALUENG",50,10
            // " MIULU",50,11
            // " PALAHANAENG",50,12
            // " PELELANGEN",50,13
            // " RENDINGAN",50,14
            // " SENSONG",50,15
            // " TALENGEN",50,16
            // " TARIANG BARU",50,17
            // " TIMBELANG",50,18
            // " BAHU",51,1
            // " BEHA",51,2
            // " BENGKETANG",51,3
            // " BOWONGKULU",51,4
            // " BOWONGKULU I",51,5
            // " KALASUGE",51,6
            // " KALEKUBE",51,7
            // " KALEKUBE I",51,8
            // " KALURAE",51,9
            // " LENGANENG",51,10
            // " LIKUANG",51,11
            // " MALA",51,12
            // " MOADE",51,13
            // " NAHA",51,14
            // " NAHA I",51,15
            // " PETTA",51,16
            // " PETTA BARAT",51,17
            // " PETTA SELATAN",51,18
            // " PETTA TIMUR",51,19
            // " PUSUNGE",51,20
            // " RAKU",51,21
            // " TAROLANG",51,22
            // " TOLA",51,23
            // " UTAURANO",51,24
            // " APENGSEMBEKA",52,1
            // " BUNGALAWANG",52,2
            // " MAHENA",52,3
            // " MANENTE",52,4
            // " SANTIAGO",52,5
            // " SAWANG BENDAR",52,6
            // " SOATALOARA I",52,7
            // " SOATALOARA II",52,8
            // " ANGGES",53,1
            // " KOLONGAN AKEMBAWI",53,2
            // " KOLONGAN BEHA",53,3
            // " KOLONGAN BEHA BARU",53,4
            // " KOLONGAN MITUNG",53,5
            // " PANANEKENG",53,6
            // " BALANE",55,1
            // " BEBU",55,2
            // " BINALA",55,3
            // " DAGHO",55,4
            // " HESANG",55,5
            // " KALAMA DARAT",55,6
            // " KALINDA",55,7
            // " KALINDA I",55,8
            // " LELIPANG",55,9
            // " MAHUMU",55,10
            // " MAHUMU I",55,11
            // " MAHUMU II",55,12
            // " MAKALEKUHE",55,13
            // " MENGGAWA",55,14
            // " MENGGAWA II",55,15
            // " NAGHA I",55,16
            // " NAGHA II",55,17
            // " PANANARU",55,18
            // " POKOL",55,19
            // " ULUNG PELIANG",55,20
            // " DALAKO BEMBANEHE",56,1
            // " KAHAKITANG",56,2
            // " KALAMA",56,3
            // " MAHENGETANG",56,4
            // " PARA",56,5
            // " PARA I",56,6
            // " TALEKO BATUSAIKI",56,7
            // " B E O",57,1
            // " BANTIK",57,2
            // " BANTIK LAMA",57,3
            // " BENGEL",57,4
            // " BEO BARAT",57,5
            // " BEO TIMUR",57,6
            // " MATAHIT",58,1
            // " NIAMPAK",58,2
            // " NIAMPAK UTARA",58,3
            // " PAMPALU",58,4
            // " RUSO",58,5
            // " TAROHAN",58,6
            // " TAROHAN SELATAN",58,7
            // " AWIT",59,1
            // " AWIT SELATAN",59,2
            // " LOBBO",59,3
            // " LOBBO I",59,4
            // " MAKATARA",59,5
            // " MAKATARA TIMUR",59,6
            // " RAE",59,7
            // " RAE SELATAN",59,8
            // " AKAS",60,1
            // " AKAS BALANE",60,2
            // " BIRANG",60,3
            // " DAMAU",60,4
            // " DAMAU BOWONE",60,5
            // " IGHIK",60,6
            // " PERET",60,7
            // " TADUWALE",60,8
            // " BULUDE",61,1
            // " BULUDE SELATAN",61,2
            // " E S S A N G",61,3
            // " ESSANG SELATAN",61,4
            // " LALUE",61,5
            // " LALUE TENGAH",61,6
            // " LALUE UTARA",61,7
            // " MARIRIK",61,8
            // " AMBIA",62,1
            // " AMBIA UTARA",62,2
            // " BATUMBALANGO",62,3
            // " ENSEM",62,4
            // " ENSEM I",62,5
            // " K U M A",62,6
            // " KUMA SELATAN",62,7
            // " SAMBUARA",62,8
            // " SAMBUARA SATU",62,9
            // " APAN",63,1
            // " ARANGKAA",63,2
            // " BAMBUNG",63,3
            // " BAMBUNG TIMUR",63,4
            // " BANNADA",63,5
            // " G E M E H",63,6
            // " GEMEH RASMATA",63,7
            // " GEMEH WANTANE",63,8
            // " LAHU",63,9
            // " MALAT",63,10
            // " MALAT UTARA",63,11
            // " MAMAHAN",63,12
            // " MAMAHAN BARAT",63,13
            // " TARUAN",63,14
            // " TATURAN",63,15
            // " BULUDE",64,1
            // " BULUDE SELATAN",64,2
            // " KABARUAN",64,3
            // " KABARUAN TIMUR",64,4
            // " KORDAKEL",64,5
            // " MANGARAN",64,6
            // " PANGERAN",64,7
            // " PANNULAN",64,8
            // " PANTUGE",64,9
            // " PANTUGE TIMUR",64,10
            // " RARANGE",64,11
            // " TADUNA",64,12
            // " ALUDE",65,1
            // " KALONGAN",65,2
            // " KALONGAN SELATAN",65,3
            // " KALONGAN UTARA",65,4
            // " MUSI I",65,5
            // " LIRUNG",66,1
            // " LIRUNG I",66,2
            // " LIRUNG MATANE",66,3
            // " LIRUNG MATANE",66,4
            // " LIRUNG SATU",66,5
            // " MUSI",66,6
            // " SEREH",66,7
            // " SEREH I",66,8
            // " TALOLANG",66,9
            // " AMBELA",67,1
            // " KIAMA",67,2
            // " KIAMA BARAT",67,3
            // " MALA",67,4
            // " MALA TIMUR",67,5
            // " MAREDAREN UTARA",67,6
            // " MELONGUANE",67,7
            // " MELONGUANE BARAT",67,8
            // " MELONGUANE TIMUR",67,9
            // " SAWANG",67,10
            // " SAWANG UTARA",67,11
            // " TARUN",67,12
            // " TARUN SELATAN",67,13
            // " BOWOMBARU",68,1
            // " BOWOMBARU TENGAH",68,2
            // " BOWOMBARU UTARA",68,3
            // " TULE",68,4
            // " TULE TENGAH",68,5
            // " TULE UTARA",68,6
            // " PULAU MIANGAS",69,1
            // " MORONGE",70,1
            // " MORONGE I",70,2
            // " MORONGE II",70,3
            // " MORONGE SELATAN",70,4
            // " MORONGE SELATAN I",70,5
            // " MORONGE SELATAN II",70,6
            // " DAMPULIS",71,1
            // " DAMPULIS SELATAN",71,2
            // " KAKOROTAN",71,3
            // " KARATUNG",71,4
            // " KARATUNG SELATAN",71,5
            // " KARATUNG TENGAH",71,6
            // " LALUHE",71,7
            // " MARAMPIT",71,8
            // " MARAMPIT TIMUR",71,9
            // " DARAN",72,1
            // " DARAN UTARA",72,2
            // " PULUTAN",72,3
            // " PULUTAN SELATAN",72,4
            // " PULUTAN UTARA",72,5
            // " A L O",73,1
            // " ALO UTARA",73,2
            // " BANTANE",73,3
            // " BANTANE UTARA",73,4
            // " N U N U",73,5
            // " NUNU UTARA",73,6
            // " PARANGEN",73,7
            // " R A I N I S",73,8
            // " RAINIS BATUPENGA",73,9
            // " TABANG",73,10
            // " TABANG BARAT",73,11
            // " BALANG",74,1
            // " BITUNURIS",74,2
            // " BITUNURIS SELATAN",74,3
            // " DALUM",74,4
            // " SALIBABU",74,5
            // " SALIBABU UTARA",74,6
            // " A M M A T",75,1
            // " AMMAT SELATAN",75,2
            // " BINALANG",75,3
            // " BINALANG TIMUR",75,4
            // " DAPALAN",75,5
            // " DAPIHE",75,6
            // " GANALO",75,7
            // " R I U N G",75,8
            // " RIUNG UTARA",75,9
            // " TUABATU",75,10
            // " TUABATU BARAT",75,11
            // " AERTEMBAGA DUA",76,1
            // " AERTEMBAGA SATU",76,2
            // " KASAWARI",76,3
            // " MAKAWIDEY",76,4
            // " PATETEN DUA",76,5
            // " PATETEN SATU",76,6
            // " PINANGUNIAN",76,7
            // " TANDURUSA",76,8
            // " WINENET DUA",76,9
            // " WINENET SATU",76,10
            // " GIRIAN ATAS",77,1
            // " GIRIAN BAWAH",77,2
            // " GIRIAN INDAH",77,3
            // " GIRIAN PERMAI",77,4
            // " GIRIAN WERU DUA",77,5
            // " GIRIAN WERU SATU",77,6
            // " WANGURER",77,7
            // " BATULUBANG",78,1
            // " DORBOLAANG",78,2
            // " KELAPA DUA",78,3
            // " PANCURAN",78,4
            // " PAPUSUNGAN",78,5
            // " PASIR PANJANG",78,6
            // " PAUDEAN",78,7
            // " BATUKOTA",79,1
            // " BINUANG",79,2
            // " GUNUNG WOKA",79,3
            // " KAREKO",79,4
            // " LIRANG",79,5
            // " MAWALI",79,6
            // " MOTTO",79,7
            // " NUSU",79,8
            // " PINTU KOTA",79,9
            // " POSOKAN",79,10
            // " KADOODAN",80,1
            // " MADIDIR UNET",80,2
            // " MADIDIR URE",80,3
            // " MADIDIR WERU",80,4
            // " PACEDA",80,5
            // " WANGURER BARAT",80,6
            // " WANGURER TIMUR",80,7
            // " WANGURER UTARA",80,8
            // " BITUNG BARAT DUA",81,1
            // " BITUNG BARAT SATU",81,2
            // " BITUNG TENGAH",81,3
            // " BITUNG TIMUR",81,4
            // " KAKENTURAN SATU",81,5
            // " KEKENTURAN DUA",81,6
            // " PAKADOODAN",81,7
            // " PATETEN TIGA",81,8
            // " MANEMBO-NEMBO",82,1
            // " MANEMBO-NEMBO ATAS",82,2
            // " MANEMBO-NEMBO TENGAH",82,3
            // " SAGERAT",82,4
            // " SAGERAT WERU DUA",82,5
            // " SAGERAT WERU SATU",82,6
            // " TANJUNG MERAH",82,7
            // " TENDEKI",82,8
            // " APELA DUA",83,1
            // " APELA SATU",83,2
            // " BATUPUTIH BAWAH",83,3
            // " BATUPUTIH ATAS",83,4
            // " DANOWUDU",83,5
            // " DUASADARA",83,6
            // " KARONDORAN",83,7
            // " KUMERESOT",83,8
            // " PINASUNGKULAN",83,9
            // " PINOKALAN",83,10
            // " TEWAAN",83,11
            // " GOGAGOMAN",84,1
            // " KOTAMOBAGU",84,2
            // " MOGOLAING",84,3
            // " MOLINOW",84,4
            // " MONGKONAI",84,5
            // " MONGKONAI BARAT",84,6
            // " BUNGKO",85,1
            // " KOPANDAKAN I",85,2
            // " MONGONDOW",85,3
            // " MOTOBOI KECIL",85,4
            // " POBUNDAYAN",85,5
            // " POYOWA BESAR I",85,6
            // " POYOWA BESAR II",85,7
            // " POYOWA KECIL",85,8
            // " TABANG",85,9
            // " KOBO BESAR",86,1
            // " KOBO KECIL",86,2
            // " KOTOBANGUN",86,3
            // " MATALI",86,4
            // " MOTOBOI BESAR",86,5
            // " MOYAG",86,6
            // " MOYAG TAMPOAN",86,7
            // " MOYAG TODULAN",86,8
            // " SININDIAN",86,9
            // " TUMUBUI",86,10
            // " BIGA",87,1
            // " BILALANG I",87,2
            // " BILALANG II",87,3
            // " GENGGULANG",87,4
            // " PONTODON",87,5
            // " PONTODON TIMUR",87,6
            // " SIA",87,7
            // " UPAI",87,8
            // " BAILANG",88,1
            // " MERAS",88,2
            // " MOLAS",88,3
            // " PANDU",88,4
            // " TONGKAINA",88,5
            // " ALUNG BANUA",89,1
            // " BUNAKEN",89,2
            // " MANADO TUA DUA",89,3
            // " MANADO TUA SATU",89,4
            // " BAHU",90,1
            // " BATU KOTA",90,2
            // " KLEAK",90,3
            // " MALALAYANG DUA",90,4
            // " MALALAYANG SATU",90,5
            // " MALALAYANG SATU BARAT",90,6
            // " MALALAYANG SATU TIMUR",90,7
            // " WINANGUN DUA",90,8
            // " WINANGUN SATU",90,9
            // " BENGKOL",91,1
            // " BUHA",91,2
            // " KAIRAGI DUA",91,3
            // " KAIRAGI SATU",91,4
            // " KIMA ATAS",91,5
            // " LAPANGAN",91,6
            // " MAPANGET BARAT",91,7
            // " PANIKI BAWAH",91,8
            // " PANIKI DUA",91,9
            // " PANIKI SATU",91,10
            // " DENDENGAN DALAM",92,1
            // " DENDENGAN LUAR",92,2
            // " KAIRAGI WERU",92,3
            // " MALENDENG",92,4
            // " PAAL DUA",92,5
            // " PERKAMIL",92,6
            // " RANOMUUT",92,7
            // " RANOTANA",93,1
            // " SARIO",93,2
            // " SARIO KOTABARU",93,3
            // " SARIO TUMPAAN",93,4
            // " SARIO UTARA",93,5
            // " TITIWUNGAN SELATAN",93,6
            // " TITIWUNGAN UTARA",93,7
            // " KARAME",94,1
            // " KETANG BARU",94,2
            // " KOMBOS BARAT",94,3
            // " KOMBOS TIMUR",94,4
            // " SINGKIL DUA",94,5
            // " SINGKIL SATU",94,6
            // " TERNATE BARU",94,7
            // " TERNATE TANJUNG",94,8
            // " WAWONASA",94,9
            // " BANJER",95,1
            // " PAAL IV",95,2
            // " TAAS",95,3
            // " TIKALA ARES",95,4
            // " TIKALA BARU",95,5
            // " BITUNG KARANGRIA",96,1
            // " ISLAM",96,2
            // " MAASING",96,3
            // " MAHAWU",96,4
            // " SINDULANG DUA",96,5
            // " SINDULANG SATU",96,6
            // " SUMOMPO",96,7
            // " TUMINTING",96,8
            // " TUMUMPA DUA",96,9
            // " TUMUMPA SATU",96,10
            // " BUMI NYIUR",97,1
            // " KAROMBASAN SELATAN",97,2
            // " KAROMBASAN UTARA",97,3
            // " PAKOWA",97,4
            // " RANOTANA WERU",97,5
            // " TANJUNG BATU",97,6
            // " TELING ATAS",97,7
            // " TINGKULU",97,8
            // " WANEA",97,9
            // " BUMI BERINGIN",98,1
            // " CALACA",98,2
            // " ISTIQLAL",98,3
            // " KOMO LUAR",98,4
            // " LAWANGIRUNG",98,5
            // " MAHAKERET BARAT",98,6
            // " MAHAKERET TIMUR",98,7
            // " PINAESAAN",98,8
            // " TELING BAWAH",98,9
            // " TIKALA KUMARAKA",98,10
            // " WENANG SELATAN",98,11
            // " WENANG UTARA",98,12
            // " TARATARA",99,1
            // " TARATARA DUA",99,2
            // " TARATARA SATU",99,3
            // " TARATARA TIGA",99,4
            // " WOLOAN DUA",99,5
            // " WOLOAN SATU",99,6
            // " WOLOAN SATU UTARA",99,7
            // " WOLOAN TIGA",99,8
            // " KAMPUNG JAWA",100,1
            // " LAHENDONG",100,2
            // " LANSOT",100,3
            // " PANGOLOMBIAN",100,4
            // " PINARAS",100,5
            // " TONDANGOW",100,6
            // " TUMATANGTANG",100,7
            // " TUMATANGTANG SATU",100,8
            // " ULUINDANO",100,9
            // " WALIAN",100,10
            // " WALIAN DUA",100,11
            // " WALIAN SATU",100,12
            // " KAMASI",101,1
            // " KAMASI SATU",101,2
            // " KOLONGAN",101,3
            // " KOLONGAN SATU",101,4
            // " MATANI DUA",101,5
            // " MATANI SATU",101,6
            // " MATANI TIGA",101,7
            // " TALETE SATU",101,8
            // " TALETE DUA",101,9
            // " KUMELEMBUAY",102,1
            // " PASLATEN DUA",102,2
            // " PASLATEN SATU",102,3
            // " RURUKAN",102,4
            // " RURUKAN SATU",102,5
            // " KAKASKASEN",103,1
            // " KAKASKASEN DUA",103,2
            // " KAKASKASEN SATU",103,3
            // " KAKASKASEN TIGA",103,4
            // " KAYAWU",103,5
            // " KINILOW",103,6
            // " KINILOW SATU",103,7
            // " TINOOR DUA",103,8
            // " TINOOR SATU",103,9
            // " WAILAN",103,10
            // " ERIS",104,1
            // " MAUMBI",104,2
            // " RANOMERUT",104,3
            // " TANDENGAN",104,4
            // " TANDENGAN SATU",104,5
            // " TELAP",104,6
            // " TOULIANG OKI",104,7
            // " WATUMEA",104,8
            // " KAWENG",105,1
            // " KAYUWATU",105,2
            // " MAHEMBANG",105,3
            // " MAKALELON",105,4
            // " PAHALETEN",105,5
            // " PASLATEN",105,6
            // " RINONDOR",105,7
            // " SENDANGAN",105,8
            // " TALIKURAN",105,9
            // " TALIKURAN",105,10
            // " TOULIMEMBET",105,11
            // " TOUNELET",105,12
            // " TUMPAAN",105,13
            // " WINERU",105,14
            // " BUKIT TINGGI",106,1
            // " KALAWIRAN",106,2
            // " PANASEN",106,3
            // " PASSO",106,4
            // " SIMBEL",106,5
            // " TOTOLAN",106,6
            // " TOULIANG",106,7
            // " TOUNTIMOMOR",106,8
            // " WAILANG",106,9
            // " WASIAN",106,10
            // " KANONANG TIGA",107,1
            // " KINALI",107,2
            // " KINALI SATU",107,3
            // " SENDANGAN",107,4
            // " SENDANGAN SELATAN",107,5
            // " SENDANGAN TENGAH",107,6
            // " TONDEGESAN",107,7
            // " TONDEGESAN I",107,8
            // " TONDEGESAN II",107,9
            // " UNER SATU",107,10
            // " KANONANG DUA",108,1
            // " KANONANG EMPAT",108,2
            // " KANONANG LIMA",108,3
            // " KANONANG SATU",108,4
            // " KAYUUWI",108,5
            // " KAYUUWI SATU",108,6
            // " RANOLAMBOT",108,7
            // " TOMBASIAN ATAS",108,8
            // " TOMBASIAN ATAS SATU",108,9
            // " TOMBASIAN BAWAH",108,10
            // " KIAWA DUA",109,1
            // " KIAWA DUA BARAT",109,2
            // " KIAWA DUA TIMUR",109,3
            // " KIAWA SATU",109,4
            // " KIAWA SATU BARAT",109,5
            // " KIAWA SATU UTARA",109,6
            // " TALIKURAN",109,7
            // " TALIKURAN BARAT",109,8
            // " TALIKURAN UTARA",109,9
            // " UNER",109,10
            // " KALAWIRAN",110,1
            // " KALAWIRAN",110,2
            // " KAYUBESI",110,3
            // " KINALEOSAN",110,4
            // " KOLONGAN",110,5
            // " KOLONGAN I",110,6
            // " KOMBI",110,7
            // " LALUMPE",110,8
            // " MAKALISUNG",110,9
            // " RANOWANGKO II",110,10
            // " RERER",110,11
            // " RERER I",110,12
            // " SAWANGAN",110,13
            // " TULAP",110,14
            // " AMPRENG",111,1
            // " KOPIWANGKER",111,2
            // " KOYAWAS",111,3
            // " LOWIAN",111,4
            // " NOONGAN",111,5
            // " NOONGAN DUA",111,6
            // " NOONGAN TIGA",111,7
            // " PASLATEN",111,8
            // " RARANON",111,9
            // " RARINGIS",111,10
            // " RARINGIS SELATAN",111,11
            // " RARINGIS UTARA",111,12
            // " TOUNELET",111,13
            // " TUMARATAS",111,14
            // " TUMARATAS DUA",111,15
            // " WALEWANGKO",111,16
            // " AMONGENA I",113,1
            // " AMONGENA II",113,1
            // " AMONGENA TIGA",113,2
            // " KARONDORAN",113,3
            // " SUMARAYAR",113,4
            // " TEEP",113,5
            // " WALEURE",113,6
            // " WOLAANG",113,7
            // " KARUMENGA",114,1
            // " TARAITAK",114,2
            // " TARAITAK SATU",114,3
            // " TEMPANG",114,4
            // " TEMPANG II",114,5
            // " TEMPANG III",114,6
            // " TORAGET",114,7
            // " WALANTAKAN",114,8
            // " ATEP OKI",115,1
            // " KALEOSAN",115,2
            // " KAPATARAN",115,3
            // " KAPATARAN SATU",115,4
            // " KAROR",115,5
            // " KAYUROYA",115,6
            // " PARENTEK",115,7
            // " SERETAN",115,8
            // " SERETAN TIMUR",115,9
            // " WATULANEY",115,10
            // " WATULANEY AMIAN",115,11
            // " AGOTEY",116,1
            // " KALASEY DUA",116,2
            // " KALASEY SATU",116,3
            // " KOHA",116,4
            // " KOHA BARAT",116,5
            // " KOHA SELATAN",116,6
            // " KOHA TIMUR",116,7
            // " TATELI",116,8
            // " TATELI DUA",116,9
            // " TATELI SATU",116,10
            // " TATELI TIGA",116,11
            // " TATELI WERU",116,12
            // " KALI",117,1
            // " KALI SELATAN",117,2
            // " LOTTA",117,3
            // " PINELENG DUA INDAH",117,4
            // " PINELENG I",117,5
            // " PINELENG II",117,6
            // " PINELENG SATU TIMUR",117,7
            // " SEA",117,8
            // " SEA I",117,9
            // " SEA II",117,10
            // " SEA MITRA",117,11
            // " SEA TUMPENGAN",117,12
            // " WAREMBUNGAN",117,13
            // " WINAGUN ATAS",117,14
            // " KAIMA",118,1
            // " KASURATAN",118,2
            // " LELEKO",118,3
            // " PAREPEI",118,4
            // " PASLATEN",118,5
            // " PULUTAN",118,6
            // " SENDANGAN",118,7
            // " SINUIAN",118,8
            // " TALIKURAN",118,9
            // " TAMPUSU",118,10
            // " TIMU",118,11
            // " KAUNERAN",119,1
            // " KAUNERAN SATU",119,2
            // " KOLONGAN ATAS",119,3
            // " KOLONGAN ATAS DUA",119,4
            // " KOTONGAN ATAS SATU",119,5
            // " LEILEM",119,6
            // " LEILEM DUA",119,7
            // " LEILEM TIGA",119,8
            // " RAMBUNAN",119,9
            // " RAMBUNAN AMIAN",119,10
            // " SANDANGAN SATU",119,11
            // " SAWANGAN",119,12
            // " SENDANGAN",119,13
            // " TALIKURAN",119,14
            // " TALIKURAN SATU",119,15
            // " TIMBUKAR",119,16
            // " TINCEP",119,17
            // " TOUNELET",119,18
            // " BORGO",120,1
            // " KUMU",120,2
            // " MOKUPA",120,3
            // " PINASUNGKULAN",120,4
            // " POOPOH",120,5
            // " RANOWANGKO",120,6
            // " SARANI MATANI",120,7
            // " SENDUK",120,8
            // " TAMBALA",120,9
            // " TELING",120,10
            // " LEMOH",121,1
            // " LEMOH BARAT",121,2
            // " LEMOH TIMUR",121,3
            // " LEMOH UNER",121,4
            // " LOLAH",121,5
            // " LOLAH DUA",121,6
            // " LOLAH SATU",121,7
            // " LOLAH TIGA",121,8
            // " RANOTONGKOR",121,9
            // " RANOTONGKOR TIMUR",121,10
            // " KAMANGTA",122,1
            // " KEMBES I",122,2
            // " KEMBES II",122,3
            // " KOKA",122,4
            // " RUMENGKOR",122,5
            // " RUMENGKOR DUA",122,6
            // " RUMENGKOR SATU",122,7
            // " SAWANGAN",122,8
            // " SULUAN",122,9
            // " TIKELA",122,10
            // " TOUMBULUAN",122,11
            // " BITUNG",123,1
            // " BUYUNGON",123,1
            // " KILOMETER ",123,1
            // " LEWET",123,1
            // " RANOKETANG TUA",123,1
            // " RANOYAPO",123,1
            // " UWURAN I",123,1
            // " UWURAN II",123,1
            // " ELUSAN",124,1
            // " KAPITU",124,1
            // " KAWANGKOAN BAWAH",124,1
            // " PONDOS",124,1
            // " RUMOONG BAWAH D",124,1
            // " RUMOONG BAWAH K",124,1
            // " TEEP",124,1
            // " TEEP TRANS",124,1
            // " TEWASEN",124,1
            // " WAKAN",124,1
            // " KOTA MENARA",125,1
            // " LOPANA",125,1
            // " LOPANO SATU",125,1
            // " MALENOS BARU",125,1
            // " MALIKU",125,1
            // " MALIKU SATU",125,1
            // " PINALING",125,1
            // " PONDANG",125,1
            // " RANOMEA",125,1
            // " RITEY",125,1
            // " KUMELEMBUAI",126,1
            // " KUMELEMBUAI ATAS",126,1
            // " KUMELEMBUAI DUA",126,1
            // " KUMELEMBUAI SATU",126,1
            // " LOLOMBULAN MAKASILI",126,1
            // " MAKASILI",126,1
            // " MALOLA",126,1
            // " MALOLA I",126,1
            // " BOJONEGORO",127,1
            // " KINAMANG",127,1
            // " KINAMANG SATU",127,1
            // " KINAWERUAN",127,1
            // " LININGAAN",127,1
            // " LOWIAN",127,1
            // " LOWIAN SATU",127,1
            // " TAMBELANG",127,1
            // " TEMBOAN",127,1
            // " TUMANI",127,1
            // " TUMANI SELATAN",127,1
            // " TUMANI UTARA",127,1
            // " LALUMPE",128,1
            // " MOTOLING",128,1
            // " MOTOLING I",128,1
            // " MOTOLING II",128,1
            // " MOTOLING MAWALE",128,1
            // " PICUAN BARU",128,1
            // " RAANAN LAMA",128,1
            // " KEROIT",129,1
            // " RAANAN BARU",129,1
            // " RAANAN BARU DUA",129,1
            // " RAANAN BARU SATU",129,1
            // " TONDEI",129,1
            // " TONDEI DUA",129,1
            // " TONDEI SATU",129,1
            // " TOYOPON",129,1
            // " KARIMBOW",130,1
            // " KARIMBOW TALIKURAN",130,1
            // " PICUAN",130,1
            // " PICUAN SATU",130,1
            // " TOKIN",130,1
            // " TOKIN BARU",130,1
            // " WANGA",130,1
            // " WANGA AMONGENA",130,1
            // " BERINGIN",131,1
            // " LOMPAD",131,1
            // " LOMPAD BARU",131,1
            // " MOPOLO",131,1
            // " MOPOLO ESA",131,1
            // " PONTAK",131,1
            // " PONTAK SATU",131,1
            // " POOPO",131,1
            // " POOPO BARAT",131,1
            // " POOPO UTARA",131,1
            // " POWALUTAN",131,1
            // " RANOYAPO",131,1
            // " AERGALE",132,1
            // " BLONGKO",132,1
            // " BOYONGPANTE",132,1
            // " BOYONGPANTE DUA",132,1
            // " DURIAN",132,1
            // " ONGKAW I",132,1
            // " ONGKAW II",132,1
            // " ONGKAW III",132,1
            // " POIGAR I",132,1
            // " POIGAR II",132,1
            // " TANAMON",132,1
            // " TANAMON UTARA",132,1
            // " TINIAWANGKO",132,1
            // " KAPOYA",133,1
            // " KAPOYA SATU",133,1
            // " PINAPALANGKOW",133,1
            // " SULUUN DUA",133,1
            // " SULUUN EMPAT",133,1
            // " SULUUN SATU",133,1
            // " SULUUN TIGA",133,1
            // " TALAITAD",133,1
            // " TALAITAD UTARA",133,1
            // " KANEYAN",134,1
            // " KORENG",134,1
            // " LANSOT",134,1
            // " LANSOT TIMUR",134,1
            // " PINAMORONGAN",134,1
            // " RUMOONG ATAS",134,1
            // " RUMOONG ATAS DUA",134,1
            // " TUMALUNTUNG",134,1
            // " TUMALUNTUNG SATU",134,1
            // " WIAU LAPI",134,1
            // " WIAU LAPI BARAT",134,1
            // " WUWUK",134,1
            // " WUWUK BARAT",134,1
            // " ARAKAN",135,1
            // " BAJO",135,1
            // " PASLATEN",135,1
            // " PASLATEN SATU",135,1
            // " POPARENG",135,1
            // " PUNGKOL",135,1
            // " RAPRAP",135,1
            // " SONDAKEN",135,1
            // " SULU",135,1
            // " WAWONA",135,1
            // " WAWONTULAP",135,1
            // " BOYONG ATAS",136,1
            // " MOLINOW",136,1
            // " PAKU URE",136,1
            // " PAKU URE II",136,1
            // " PAKU URE KINAMANG",136,1
            // " PAKU URE TINANIAN",136,1
            // " PAKUURE SATU",136,1
            // " PAKUURE TIGA",136,1
            // " PAKUWERU",136,1
            // " PAKUWERU UTARA",136,1
            // " RADEY",136,1
            // " SAPA",136,1
            // " SAPA BARAT",136,1
            // " SAPA TIMUR",136,1
            // " TAWAANG",136,1
            // " TAWAANG BARAT",136,1
            // " TAWAANG TIMUR",136,1
            // " TENGA",136,1
            // " KAROWA",137,1
            // " KINALAWIRAN",137,1
            // " LIANDOK",137,1
            // " LINDANGAN",137,1
            // " PINAESAAN",137,1
            // " RARAATEAN",137,1
            // " SION",137,1
            // " TOMPASO BARU I",137,1
            // " TOMPASO BARU II",137,1
            // " TOROUT",137,1
            // " LELEMA",138,1
            // " MATANI",138,1
            // " MATANI SATU",138,1
            // " MUNTE",138,1
            // " POPONTOLEN",138,1
            // " TANGKUNEI",138,1
            // " TUMPAAN",138,1
            // " TUMPAAN BARU",138,1
            // " TUMPAAN DUA",138,1
            // " TUMPAAN SATU",138,1
            // " BELANG",139,1
            // " BERINGIN",139,1
            // " BORGO",139,1
            // " BORGO SATU",139,1
            // " BUKU",139,1
            // " BUKU SELATAN",139,1
            // " BUKU TENGAH",139,1
            // " BUKU TENGGARA",139,1
            // " BUKU UTARA",139,1
            // " MANGKIT",139,1
            // " MOLOMPAR",139,1
            // " MOLOMPAR TIMUR",139,1
            // " MOLOMPAR UTARA",139,1
            // " PONOSAKAN BELANG",139,1
            // " PONOSAKAN INDAH",139,1
            // " TABABO",139,1
            // " TABABO SELATAN",139,1
            // " WATULINEY",139,1
            // " WATULINEY INDAH",139,1
            // " WATULINEY TENGAH",139,1
            // " LIWUTUNG",140,1
            // " LIWUTUNG DUA",140,1
            // " LIWUTUNG SATU",140,1
            // " MAULIT",140,1
            // " PONIKI",140,1
            // " TOLOMBUKAN",140,1
            // " TOLOMBUKAN BARAT",140,1
            // " TOLOMBUKAN SATU",140,1
            // " TOWUNTU",140,1
            // " TOWUNTU BARAT",140,1
            // " TOWUNTU TIMUR",140,1
            // " BENTENAN",141,1
            // " BENTENAN INDAH",141,1
            // " BENTENAN SATU",141,1
            // " MAKALU",141,1
            // " MAKALU SELATAN",141,1
            // " MINANGA",141,1
            // " MINANGA DUA",141,1
            // " MINANGA SATU",141,1
            // " MINANGA TIGA",141,1
            // " MINANGA TIMUR",141,1
            // " TATENGESAN",141,1
            // " TATENGESAN SATU",141,1
            // " TUMBAK",141,1
            // " TUMBAK MADANI",141,1
            // " WIAU",141,1
            // " LOWU DUA",142,1
            // " LOWU SATU",142,1
            // " LOWU UTARA",142,1
            // " NATAAN",142,1
            // " RASI",142,1
            // " RASI SATU",142,1
            // " TOLOMBUKAN I",142,1
            // " TOSURAYA",142,1
            // " TOSURAYA BARAT",142,1
            // " TOSURAYA SELATAN",142,1
            // " WAWALI",142,1
            // " WAWALI PASAN",142,1
            // " WONGKAY",142,1
            // " PANGU",143,1
            // " PANGU DUA",143,1
            // " PANGU SATU",143,1
            // " WIOI",143,1
            // " WIOI DUA",143,1
            // " WIOI SATU",143,1
            // " WIOI TIGA",143,1
            // " WIOI TIMUR",143,1
            // " WONGKAI",143,1
            // " WONGKAI SATU",143,1
            // " BASAAN",144,1
            // " BASAAN DUA",144,1
            // " BASAAN SATU",144,1
            // " MOREA",144,1
            // " MOREA SATU",144,1
            // " RATATOTOK",144,1
            // " RATATOTOK DUA",144,1
            // " RATATOTOK MUARA",144,1
            // " RATATOTOK SATU",144,1
            // " RATATOTOK SELATAN",144,1
            // " RATATOTOK TENGAH",144,1
            // " RATATOTOK TENGGARA",144,1
            // " RATATOTOK TIMUR",144,1
            // " RATATOTOK UTARA",144,1
            // " SOYOAN",144,1
            // " SILIAN",145,1
            // " SILIAN BARAT",145,1
            // " SILIAN DUA",145,1
            // " SILIAN KOTA",145,1
            // " SILIAN SATU",145,1
            // " SILIAN SELATAN",145,1
            // " SILIAN TENGAH",145,1
            // " SILIAN TIGA",145,1
            // " SILIAN TIMUR",145,1
            // " SILIAN UTARA",145,1
            // " BETELEN",146,1
            // " BETELEN SATU",146,1
            // " KALI",146,1
            // " KALI OKI",146,1
            // " MOLOMPAR I",146,1
            // " MOLOMPAR II",146,1
            // " PISA",146,1
            // " TOMBATU",146,1
            // " TOMBATU I",146,1
            // " TOMBATU II",146,1
            // " TOMBATU III",146,1
            // " TOMBATU TIGA SELATAN",146,1
            // " TOMBATU TIGA TIMUR",146,1
            // " TONSAWANG",146,1
            // " TONSAWANG SATU",146,1
            // " ESANDOM",147,1
            // " ESANDOM DUA",147,1
            // " ESANDOM SATU",147,1
            // " MOLOMPAR",147,1
            // " MOLOMPAR ATAS",147,1
            // " MOLOMPAR DUA",147,1
            // " MOLOMPAR DUA SELATAN",147,1
            // " MOLOMPAR DUA UTARA",147,1
            // " MOLOMPAR SATU",147,1
            // " MUNDUNG",147,1
            // " MUNDUNG SATU",147,1
            // " KUYANGA",148,1
            // " KUYANGA SATU",148,1
            // " TOMBATU DUA",148,1
            // " TOMBATU DUA BARAT",148,1
            // " TOMBATU DUA TENGAH",148,1
            // " TOMBATU DUA UTARA",148,1
            // " TOMBATU TIGA",148,1
            // " TOMBATU TIGA TENGAH",148,1
            // " WINORANGIAN",148,1
            // " WINORANGIAN SATU",148,1
            // " LOBU",149,1
            // " LOBU ATAS",149,1
            // " LOBU DUA",149,1
            // " LOBU KOTA",149,1
            // " LOBU SATU",149,1
            // " LOWATAK",149,1
            // " RANOKETANG ATAS",149,1
            // " RANOKETANG ATAS SATU",149,1
            // " SILIAN I",149,1
            // " SILIAN III",149,1
            // " TONDANAUW",149,1
            // " TONDANOUW SATU",149,1
            // " TOUNDANOUW ATAS",149,1
            // " BANGA",150,1
            // " BUNAG",150,1
            // " KALAIT",150,1
            // " KALAIT DUA",150,1
            // " KALAIT SATU",150,1
            // " KALAIT TIGA",150,1
            // " LOWATAG",150,1
            // " RANOAKO",150,1
            // " SUHUYON",150,1
            // " TAMBELANG",150,1
            // " AIRMADIDI ATAS",151,1
            // " AIRMADIDI BAWAH",151,1
            // " RAP-RAP",151,1
            // " SAMPIRI",151,1
            // " SARONGSONG II",151,1
            // " SARONSONG I",151,1
            // " SAWANGAN",151,1
            // " SUKUR",151,1
            // " TANGGARI",151,1
            // " DIMEMBE",152,1
            // " KLABAT",152,1
            // " LAIKIT",152,1
            // " LUMPIAS",152,1
            // " MATUNGKAS",152,1
            // " PINILIH",152,1
            // " TATELU",152,1
            // " TATELU RONDOR",152,1
            // " TETEY",152,1
            // " WARUKAPAS",152,1
            // " WASIAN",152,1
            // " KALAWAT",153,1
            // " KALEOSAN",153,1
            // " KAWANGKOAN",153,1
            // " KAWANGKOAN BARU",153,1
            // " KOLONGAN",153,1
            // " KOLONGAN TETEMPANGAN",153,1
            // " KUWIL",153,1
            // " MAUMBI",153,1
            // " SUWAAN",153,1
            // " WATUTUMOU",153,1
            // " WATUTUMOU DUA",153,1
            // " WATUTUMOU TIGA",153,1
            // " KAASAR",154,1
            // " KAIMA",154,1
            // " KAREGESAN",154,1
            // " KAUDITAN I",154,1
            // " KAUDITAN II",154,1
            // " KAWILEY",154,1
            // " LEMBEAN",154,1
            // " PASLATEN",154,1
            // " TREMAN",154,1
            // " TUMALUNTUNG",154,1
            // " WATUDAMBO",154,1
            // " WATUDAMBO DUA",154,1
            // " KEMA I",155,1
            // " KEMA II",155,1
            // " KEMA III",155,1
            // " LANSOT",155,1
            // " LILANG",155,1
            // " MAKALISUNG",155,1
            // " TONTAALETE ROK-ROK",155,1
            // " TONTALETE",155,1
            // " WALEO",155,1
            // " WALEO DUA",155,1
            // " AIRBANUA",156,1
            // " BAHOI",156,1
            // " BULUTUI",156,1
            // " GANGGA I",156,1
            // " GANGGA II",156,1
            // " JAYAKARSA",156,1
            // " KINABUHUTAN",156,1
            // " MALIAMBAO",156,1
            // " MUBUNE",156,1
            // " MUNTE",156,1
            // " PALAES",156,1
            // " PAPUTUNGAN",156,1
            // " SEREI",156,1
            // " SONSILO",156,1
            // " TALISE",156,1
            // " TAMBUN",156,1
            // " TANAH PUTIH",156,1
            // " TARABITAN",156,1
            // " TERMAAL",156,1
            // " WAWUNIAN",156,1
            // " BATU",157,1
            // " KAWERUAN",157,1
            // " KOKOLEH DUA",157,1
            // " KOKOLEH SATU",157,1
            // " PASLATEN",157,1
            // " WANGURER",157,1
            // " WEROT",157,1
            // " EHE",158,1
            // " KAHUKU",158,1
            // " KALINAUN",158,1
            // " KINUNANG",158,1
            // " LIBAS",158,1
            // " LIHUNU",158,1
            // " LIKUPANG I",158,1
            // " LIKUPANG II",158,1
            // " LIKUPANG KAMPUNG AMBONG",158,1
            // " MAEN",158,1
            // " MARINSOW",158,1
            // " PINENEK",158,1
            // " PULISAN",158,1
            // " RESETLEMEN",158,1
            // " RINONDORAN",158,1
            // " SARAWET",158,1
            // " WINERU",158,1
            // " WINURI",158,1
            // " KOLONGAN",159,1
            // " MAPANGET",159,1
            // " PANIKI ATAS",159,1
            // " PANIKI BARU",159,1
            // " PATOKAAN",159,1
            // " TALAWAAN",159,1
            // " TEEPWARISA",159,1
            // " TUMBOHON",159,1
            // " WARISA",159,1
            // " WARISA KAMPUNG BARU",159,1
            // " WINETIN",159,1
            // " WUSA",159,1
            // " BUDO",160,1
            // " BULO",160,1
            // " DARUNU",160,1
            // " KIMA BAJO",160,1
            // " KULU",160,1
            // " LANSA",160,1
            // " LANTUNG",160,1
            // " MANTEHAGE II TANGKASI",160,1
            // " MANTEHAGE III TINONGKO",160,1
            // " MANTEHAGE/BANGO",160,1
            // " MANTEHAGE/BUHIAS",160,1
            // " MINAESA",160,1
            // " NAIN",160,1
            // " NAIN SATU",160,1
            // " NAIN TATAMPI",160,1
            // " PONTOH",160,1
            // " TALAWAAN ATAS",160,1
            // " TALAWAAN BANTIK",160,1
            // " TIWOHO",160,1
            // " WORI",160,1
            // BINTAU,12,1
            // BULUD,12,2
            // INUAI,12,3
            // LOBONG,12,4
            // MUNTOI,12,5
            // "MUNTOI TIMUR",12,6
            // OTAM,12,7
            // "OTAM BARAT",12,8
            // PASSI,12,9
            // "PASSI II",12,10
            // " POYUYANAN",12,11
            // WANGGA,12,12
            // "WANGGA SATU",12,13
            // VOAA,26,16
            // BATULEWEHE,54,1
            // DUMUHUNG,54,2
            // ENENGPAHEMBANG,54,3
            // LESA,54,4
            // TAPUANG,54,5
            // TIDORE,54,6
            // "TONA I",54,7
            // "TONA II",54,8
            // " KAMANGA",161,1
            // " KAMANGA DUA",161,1
            // " LIBA",161,1
            // " SENDANGAN",161,1
            // " TALIKURAN",161,1
            // " TEMBER",161,1
            // " TEMPOK",161,1
            // " TEMPOK SELATAN",161,1
            // " TOLOK",161,1
            // " TOLOK SATU",161,1
            // " PENAESAAN",162,1
            // " PINABETENGAN",162,1
            // " PINABETENGAN SELATAN",162,1
            // " PINABETENGAN UTARA",162,1
            // " TOMPASO DUA",162,1
            // " TOMPASO DUA UTARA",162,1
            // " TONSEWER",162,1
            // " TONSEWER SELATAN",162,1
            // " TOUURE",162,1
            // " TOUURE DUA",162,1
            // " MASARANG",163,1
            // " REREWOKAN",163,1
            // " RINEGETAN",163,1
            // " ROONG",163,1
            // " TOUNKURAMBER",163,1
            // " TUUTU",163,1
            // " WATULAMBOT",163,1
            // " WAWALINTOUAN",163,1
            // " WEWELAN",163,1
            // " KOYA",164,1
            // " MAESA UNIMA",164,1
            // " PALELOAN",164,1
            // " TATAARAN I",164,1
            // " TATAARAN II",164,1
            // " TATAARAN PATAR",164,1
            // " TOUNSARU",164,1
            // " URONGO",164,1
            // " KINIAR",165,1
            // " KATINGGOLAN",165,1
            // " KENDIS",165,1
            // " LININGAAN",165,1
            // " LUAAN",165,1
            // " MAKALOUNSOW",165,1
            // " PAPAKELAN",165,2
            // " RANOWANGKO",165,3
            // " TALER",165,4
            // " TOULUOR",165,5
            // " WENGKOL",165,6
            // " KAMPUNG JAWA",166,1
            // " KEMBUAN",166,2
            // " KEMBUAN SATU",166,3
            // " MARAWAS",166,4
            // " SASARAN",166,5
            // " SUMALANGKA",166,6
            // " TONSEA LAMA",166,7
            // " WULAUAN",166,8
            // " ATEP",167,1
            // " ATEP SATU",167,2
            // " KAAYURAN ATAS",167,3
            // " KAAYURAN BAWAH",167,4
            // " KAWATAK",167,5
            // " MANEMBO",167,6
            // " PALAMBA",167,7
            // " RUMBIA",167,8
            // " TEMBOAN",167,9
            // " WINEBETAN",167,10
            // " KAKENTURAN",175,1
            // " KAKENTURAN BARAT",175,2
            // " LINELEAN",175,3
            // MAKAARUYEN,175,4
            // MOKOBANG,175,5
            // PALELON,175,6
            // PINASUNGKULAN,175,7
            // " PINASUNGKULAN UTARA",175,8
            // SINISIR,175,9
            // WULURMAATUS,175,10
        ];

        foreach($data as $urban_village) {
            UrbanVillage::create($urban_village);
        }
    }

}
