<?php

namespace App\Http\Controllers;

class InfoController extends Controller
{
    public function index()
    {
        $profil = [
            'nama' => 'Fauzi Fadhilah',
            'panggilan' => 'Oji',
            'tempat_lahir' => 'Jakarta',
            'kelas' => 'X RPL',
            'sekolah' => 'SMKN 8 Jakarta',
            'jurusan' => 'Rekayasa Perangkat Lunak',
            'deskripsi' => 'Seorang pribadi yang ekstrovert, senang berorganisasi, bertemu orang baru, dan terus berkembang.',
        ];

        $kepribadian = [
            'Sifat' => 'Ekstrovert',
            'Kelebihan' => 'Mudah berbaur, cepat beradaptasi, dan mampu mengenali karakter orang lain.',
            'Hal yang dikembangkan' => 'Lebih teliti dan meningkatkan daya ingat.',
            'Kebanggaan' => 'Mampu membangun relasi dan berbaur dengan banyak orang.',
        ];

        $skills = [
            'Visual Studio',
            'Visual Studio Code',
            'Python',
            'HTML',
            'JavaScript',
            'Laravel',
            'AI Engineering',
            'Prompt Engineering',
        ];

        $pelajaran = [
            'AI Engineering & Prompting',
            'IT Software for Business',
            'Rekayasa Perangkat Lunak',
        ];

        $organisasi = [
            'Paskibra',
            'Basket',
            'OSIS',
            'Adiwiyata',
            'IT',
        ];

        $prestasi = [
            'Juara Paskibra',
            'Juara Hadroh',
        ];

        $hobi = [
            'Basketball',
            'Paskibra',
            'Sepak Bola',
            'Mendengarkan Musik',
            'Belajar Teknologi',
        ];

        $musik = [
            'Oasis',
            'ROCK',
            'Sheila on 7',
            'Dewa 19',
            'RC',
        ];

        $favorit = [
            'Makanan' => 'Sate Ayam',
            'Warna' => 'Hitam, Putih, dan Biru Langit',
            'Film' => 'Horror dan Komedi',
            'Kegiatan' => 'Belajar, bermain game, berolahraga, dan mendengarkan musik.',
        ];

        $impian = [
            'Menjadi pengusaha atau pemimpin yang sukses.',
            'Menjadi AI Prompt Engineer.',
            'Mengembangkan aplikasi desktop dan mobile.',
            'Bekerja sambil melanjutkan kuliah.',
            'Membahagiakan orang tua dan menjadi pribadi yang dermawan.',
            'Berkeliling dunia.',
        ];

        $motivasi = 'Teruslah bangun meskipun kamu harus memulai kembali berkali-kali. Setiap proses adalah kesempatan untuk menjadi lebih baik.';

        // SELECTED PROJECTS
        $projects = [
            [
                'name' => 'Personal Portfolio Website',
                'category' => 'Personal Website',
                'description' => 'A personal portfolio website designed to showcase my background, technical skills, experiences, and professional journey. Currently under development using Laravel.',
                'technologies' => ['Laravel', 'PHP', 'HTML', 'CSS'],
                'status' => 'In Development',
                'number' => '01',
            ],
            [
                'name' => 'Library Book Borrowing Demo',
                'category' => 'Web Development',
                'description' => 'A library book borrowing demo website developed to explore web development concepts, experiment with interactive features, and strengthen my frontend development skills.',
                'technologies' => ['HTML', 'CSS', 'JavaScript'],
                'status' => 'Exploration Project',
                'number' => '02',
            ],
        ];

        // SEND ALL DATA TO BLADE VIEW
        return view('info', compact(
            'profil',
            'kepribadian',
            'skills',
            'pelajaran',
            'organisasi',
            'prestasi',
            'hobi',
            'musik',
            'favorit',
            'impian',
            'motivasi',
            'projects'
        ));
    }
}
