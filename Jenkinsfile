node {
    // Stage 1: Ambil Kode
    stage('1. Ambil Kode') {
        // Perintah wajib supaya Jenkins mengambil file phpunit.phar dari GitHub
        checkout scm
    }
    
    // Stage 2: Jalankan Test
    stage('2. Jalankan PHPUnit') {
        // Jalankan perintah tes menggunakan file phar yang sudah ada di repo
        bat 'php phpunit.phar MatematikaTest.php'
    }
}
