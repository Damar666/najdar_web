node {
    // Stage 1: Ambil Kode dari GitHub
    stage('Checkout Code') {
        echo 'Mengambil kode terbaru dari GitHub...'
        checkout scm
    }
    
    // Stage 2: Jalankan Test
    stage('Jalankan Unit Test') {
        echo 'Menjalankan Unit Test PHP...'
        // Kita pakai perintah bat karena Windows
        bat 'php MatematikaTest.php'
    }
}