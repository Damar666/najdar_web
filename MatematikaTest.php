<?php
use PHPUnit\Framework\TestCase;

require 'Matematika.php';

final class MatematikaTest extends TestCase {
    public function testTambah() {
        $math = new Matematika();
        // Kita tes apakah 10 + 20 hasilnya 30
        $this->assertEquals(30, $math->tambah(10, 20));
    }
}
?>