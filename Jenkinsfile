pipeline {
    agent any

    stages {
        stage('1. Ambil Kode') {
            steps {
                echo 'Mengambil kode terbaru dari GitHub...'
                // Jenkins otomatis melakukan 'git clone' disini
            }
        }
        
        stage('2. Jalankan Unit Test') {
            steps {
                echo 'Menjalankan pengujian PHP...'
                // Perintah untuk menjalankan file test tadi
                bat 'php MatematikaTest.php'
            }
        }
    }
}