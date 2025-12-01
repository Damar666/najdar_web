node {
    stage('1. Ambil Kode dari GitHub') {
        echo 'Mengambil kode terbaru...'
        checkout scm
    }
    
    stage('2. Jalankan PHPUnit') {
        echo 'Menjalankan Unit Test dengan PHPUnit Asli...'
        // Kita jalankan perintah yang SAMA PERSIS dengan yang sukses di terminal kamu tadi
        bat 'php phpunit.phar MatematikaTest.php'
    }
}