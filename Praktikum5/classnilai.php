<?php 
class nilaiUjian {
    // Properties
    public $nim, $mk, $nilai, $grade, $status;

    // Constructor
    public function __construct($nim, $mk, $nilai){
        $this->nim = $nim;
        $this->mk = $mk;
        $this->nilai = $nilai;
        $this->hitungGrade();
    }

    // Method untuk menentukan grade status nilai
    public function hitungGrade() {
        // Menentukan grade berdasarkan nilai
        if ($this->nilai >= 85) {
            $this->grade = "A";
        } elseif ($this->nilai >= 70) {
            $this->grade = "B";
        } elseif ($this->nilai >= 55) {
            $this->grade = "C";
        } elseif ($this->nilai >= 40) {
            $this->grade = "D";
        } else {
            $this->grade = "E";
        }

        // Menentukan status lulus
        if ($this->grade == "A" || $this->grade == "B" || $this->grade == "C") {
            $this->status = "Lulus";
        } else {
            $this->status = "Tidak Lulus";
        }
    }
}
?>