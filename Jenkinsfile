node {
    stage('1. Persiapan') {
        // Ambil kode dari repo ini
        checkout scm
    }
    
    stage('2. Cek Alat') {
        // Pastikan PHPUnit ada
        bat 'php phpunit.phar --version'
    }
    
    stage('3. Eksekusi Test') {
        echo 'Menjalankan Unit Test...'
        // Jalankan tes
        bat 'php phpunit.phar MatematikaTest.php'
    }
}
