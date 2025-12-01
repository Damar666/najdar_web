pipeline {
    agent any

    stages {
        stage('Ambil Kode') {
            steps {
                echo 'Mengambil repository dari GitHub...'
            }
        }
        
        stage('Jalankan Perintah Soal') {
            steps {
                echo 'Menjalankan instruksi soal nomor 2...'
                // Ini perintah wajib sesuai soal:
                powershell 'php index.php'
            }
        }
    }
}