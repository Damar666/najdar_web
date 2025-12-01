pipeline {
    agent any

    stages {
        stage('Persiapan') {
            steps {
                echo 'Mengambil kode dari GitHub...'
                // Perintah 'bat' digunakan karena kamu pakai Windows
                bat 'echo Kode berhasil didownload ke Jenkins'
            }
        }
        
        stage('Cek File') {
            steps {
                echo 'Memeriksa kelengkapan file...'
                // Ini akan mengecek apakah ada file index.html
                bat 'if exist index.html (echo File index.html DITEMUKAN) else (echo WARNING: File index.html tidak ada)'
            }
        }

        stage('Build & Deploy') {
            steps {
                echo 'Sedang men-deploy website...'
                // Simulasi deploy
                bat 'echo Website HTML/CSS/JS berhasil di-build!'
            }
        }
    }
}
// Tes Otomasi