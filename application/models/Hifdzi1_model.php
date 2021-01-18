<?php
    class Hifdzi1_model extends CI_MODEL{
        public function pertemuan($id){
            $data[1] = [
                ["id" => "1","kata" => "كِتَابٌ","kata_arab" => "كِتَابٌ","arti" => "Buku","hal" => "1","huruf" => array_unique($this->huruf("كِتَابٌ"))],
                ["id" => "1","kata" => "نَافِذَةٌ","kata_arab" => "نَافِذَةٌ","arti" => "Jendela","hal" => "1","huruf" => array_unique($this->huruf("نَافِذَةٌ"))],
                ["id" => "1","kata" => "خِزَانَةٌ","kata_arab" => "خِزَانَةٌ","arti" => "Lemari","hal" => "1","huruf" => array_unique($this->huruf("خِزَانَةٌ"))],
                ["id" => "1","kata" => "دُرْجٌ","kata_arab" => "دُرْجٌ","arti" => "Laci","hal" => "1","huruf" => array_unique($this->huruf("دُرْجٌ"))],
                ["id" => "1","kata" => "دَفْتَرٌ","kata_arab" => "دَفْتَرٌ","arti" => "Buku Catatan","hal" => "1","huruf" => array_unique($this->huruf("دَفْتَرٌ"))],
                ["id" => "1","kata" => "مَجَلَّةٌ","kata_arab" => "مَجَلَّةٌ","arti" => "Majalah","hal" => "2","huruf" => array_unique($this->huruf("مَجَلَّةٌ"))],
                ["id" => "1","kata" => "جَرِيْدَةٌ","kata_arab" => "جَرِيْدَةٌ","arti" => "Koran","hal" => "2","huruf" => array_unique($this->huruf("جَرِيْدَةٌ"))],
                ["id" => "1","kata" => "رِسَالَةٌ","kata_arab" => "رِسَالَةٌ","arti" => "Surat","hal" => "2","huruf" => array_unique($this->huruf("رِسَالَةٌ"))],
                ["id" => "1","kata" => "دِرَاسَةٌ","kata_arab" => "دِرَاسَةٌ","arti" => "Pelajaran","hal" => "2","huruf" => array_unique($this->huruf("دِرَاسَةٌ"))],
                ["id" => "1","kata" => "دُعَاءٌ","kata_arab" => "دُعَاءٌ","arti" => "Doa","hal" => "2","huruf" => array_unique($this->huruf("دُعَاءٌ"))],
            ];

            $data[2] = [
                ["id" => "1","kata" => "مَسْجِدٌ","kata_arab" => "مَسْجِدٌ","arti" => "Masjid","hal" => "1","huruf" => array_unique($this->huruf("مَسْجِدٌ"))],
                ["id" => "1","kata" => "إِدَارَةٌ","kata_arab" => "إِدَارَةٌ","arti" => "Kantor","hal" => "1","huruf" => array_unique($this->huruf("إِدَارَةٌ"))],
                ["id" => "1","kata" => "مَكْتَبَةٌ","kata_arab" => "مَكْتَبَةٌ","arti" => "Perpustakaan","hal" => "1","huruf" => array_unique($this->huruf("مَكْتَبَةٌ"))],
                ["id" => "1","kata" => "بَيْتٌ","kata_arab" => "بَيْتٌ","arti" => "Rumah","hal" => "1","huruf" => array_unique($this->huruf("بَيْتٌ"))],
                ["id" => "1","kata" => "مَدْرَسَةٌ","kata_arab" => "مَدْرَسَةٌ","arti" => "Sekolah","hal" => "1","huruf" => array_unique($this->huruf("مَدْرَسَةٌ"))],
                ["id" => "1","kata" => "لَحْمٌ","kata_arab" => "لَحْمٌ","arti" => "Daging","hal" => "1","huruf" => array_unique($this->huruf("لَحْمٌ"))],
                ["id" => "1","kata" => "كَعْكٌ","kata_arab" => "كَعْكٌ","arti" => "Kue","hal" => "1","huruf" => array_unique($this->huruf("كَعْكٌ"))],
                ["id" => "1","kata" => "سَمَكٌ","kata_arab" => "سَمَكٌ","arti" => "Ikan","hal" => "1","huruf" => array_unique($this->huruf("سَمَكٌ"))],
                ["id" => "1","kata" => "دَجَاجٌ","kata_arab" => "دَجَاجٌ","arti" => "Ayam","hal" => "1","huruf" => array_unique($this->huruf("دَجَاجٌ"))],
                ["id" => "1","kata" => "بَيْضَةٌ","kata_arab" => "بَيْضَةٌ","arti" => "Telur","hal" => "1","huruf" => array_unique($this->huruf("بَيْضَةٌ"))],
            ];

            $data[3] = [
                ["id" => "1","kata" => "قَهْوَةٌ","kata_arab" => "قَهْوَةٌ","arti" => "Kopi","hal" => "1","huruf" => array_unique($this->huruf("قَهْوَةٌ"))],
                ["id" => "1","kata" => "شَايٌ","kata_arab" => "شَايٌ","arti" => "Teh","hal" => "1","huruf" => array_unique($this->huruf("شَايٌ"))],
                ["id" => "1","kata" => "عَصِيْرٌ","kata_arab" => "عَصِيْرٌ","arti" => "Jus","hal" => "1","huruf" => array_unique($this->huruf("عَصِيْرٌ"))],
                ["id" => "1","kata" => "هُوَ","kata_arab" => "هُوَ","arti" => "Dia (lk)","hal" => "1","huruf" => array_unique($this->huruf("هُوَ"))],
                ["id" => "1","kata" => "هِيَ","kata_arab" => "هِيَ","arti" => "Dia (pr)","hal" => "1","huruf" => array_unique($this->huruf("هِيَ"))],
                ["id" => "1","kata" => "أَنْتَ","kata_arab" => "أَنْتَ","arti" => "Kamu (lk)","hal" => "1","huruf" => array_unique($this->huruf("أَنْتَ"))],
                ["id" => "1","kata" => "أَنْتِ","kata_arab" => "أَنْتِ","arti" => "Kamu (pr)","hal" => "1","huruf" => array_unique($this->huruf("أَنْتِ"))],
                ["id" => "1","kata" => "أَنَا","kata_arab" => "أَنَا","arti" => "Saya","hal" => "1","huruf" => array_unique($this->huruf("أَنَا"))],
            ];

            $data[4] = [
                ["id" => "1","kata" => "ذَكِيٌّ","kata_arab" => "ذَكِيٌّ","arti" => "Cerdas","hal" => "1","huruf" => array_unique($this->huruf("ذَكِيٌّ"))],
                ["id" => "1","kata" => "مَاهِرٌ","kata_arab" => "مَاهِرٌ","arti" => "Pintar","hal" => "1","huruf" => array_unique($this->huruf("مَاهِرٌ"))],
                ["id" => "1","kata" => "مُجْتَهِدٌ","kata_arab" => "مُجْتَهِدٌ","arti" => "Rajin","hal" => "1","huruf" => array_unique($this->huruf("مُجْتَهِدٌ"))],
                ["id" => "1","kata" => "جَمِيْلٌ","kata_arab" => "جَمِيْلٌ","arti" => "Ganteng / Cantik","hal" => "1","huruf" => array_unique($this->huruf("جَمِيْلٌ"))],
                ["id" => "1","kata" => "غَنِيٌّ","kata_arab" => "غَنِيٌّ","arti" => "Kaya","hal" => "1","huruf" => array_unique($this->huruf("غَنِيٌّ"))],
                ["id" => "1","kata" => "قَوِيٌّ","kata_arab" => "قَوِيٌّ","arti" => "Kuat","hal" => "1","huruf" => array_unique($this->huruf("قَوِيٌّ"))],
                ["id" => "1","kata" => "فِيْ","kata_arab" => "فِيْ","arti" => "Di / Di dalam","hal" => "1","huruf" => array_unique($this->huruf("فِيْ"))],
                ["id" => "1","kata" => "أَمَامَ","kata_arab" => "أَمَامَ","arti" => "Di depan","hal" => "1","huruf" => array_unique($this->huruf("أَمَامَ"))],
                ["id" => "1","kata" => "وَرَاءَ","kata_arab" => "وَرَاءَ","arti" => "Di belakang","hal" => "1","huruf" => array_unique($this->huruf("وَرَاءَ"))],
                ["id" => "1","kata" => "جَانِبَ","kata_arab" => "جَانِبَ","arti" => "Di samping","hal" => "1","huruf" => array_unique($this->huruf("جَانِبَ"))],
                ["id" => "1","kata" => "فَوْقَ","kata_arab" => "فَوْقَ","arti" => "Di atas","hal" => "1","huruf" => array_unique($this->huruf("فَوْقَ"))],
                ["id" => "1","kata" => "تَحْتَ","kata_arab" => "تَحْتَ","arti" => "Di bawah","hal" => "1","huruf" => array_unique($this->huruf("تَحْتَ"))],
            ];
            
            return $data[$id];
        }

        public function materi_pertemuan($id){
            $data[1] = [
                "0" => "<img src='".base_url()."assets/img/hifdzi_1/1.1.jpg' class='img-rounded img-fluid'>",
                "1" => "<audio controls><source src='".base_url()."assets/sound/hifdzi_1/1.1.mp4' type='audio/mp4'></audio>",  
                "2" => "<img src='".base_url()."assets/img/hifdzi_1/1.2.jpg' class='img-rounded img-fluid'>",  
                "3" => "<audio controls><source src='".base_url()."assets/sound/hifdzi_1/1.2.mp4' type='audio/mp4'></audio>",
            ];

            $data[2] = [
                "0" => "<img src='".base_url()."assets/img/hifdzi_1/2.1.jpg' class='img-rounded img-fluid'>",
                "1" => "<audio controls><source src='".base_url()."assets/sound/hifdzi_1/2.1.mp4' type='audio/mp4'></audio>",  
                "2" => "<img src='".base_url()."assets/img/hifdzi_1/2.2.jpg' class='img-rounded img-fluid'>",  
                "3" => "<audio controls><source src='".base_url()."assets/sound/hifdzi_1/2.2.mp4' type='audio/mp4'></audio>",
            ];

            $data[3] = [
                "0" => "<img src='".base_url()."assets/img/hifdzi_1/3.1.jpg' class='img-rounded img-fluid'>",
                "1" => "<audio controls><source src='".base_url()."assets/sound/hifdzi_1/3.1.mp4' type='audio/mp4'></audio>",  
                "2" => "<img src='".base_url()."assets/img/hifdzi_1/3.2.jpg' class='img-rounded img-fluid'>",  
                "3" => "<audio controls><source src='".base_url()."assets/sound/hifdzi_1/3.2.mp4' type='audio/mp4'></audio>",
            ];
            
            $data[4] = [
                "0" => "<img src='".base_url()."assets/img/hifdzi_1/4.1.jpg' class='img-rounded img-fluid'>",
                "1" => "<audio controls><source src='".base_url()."assets/sound/hifdzi_1/4.1.mp4' type='audio/mp4'></audio>",  
                "2" => "<img src='".base_url()."assets/img/hifdzi_1/4.2.jpg' class='img-rounded img-fluid'>",  
                "3" => "<audio controls><source src='".base_url()."assets/sound/hifdzi_1/4.2.mp4' type='audio/mp4'></audio>",
            ];
       

            return $data[$id];
        }

        public function halaman($id){
            $hal[1] = "2";
            $hal[2] = "3";
            $hal[3] = "4";
            $hal[4] = "2";
            $hal[5] = "3";
            $hal[6] = "4";
            $hal[7] = "2";
            $hal[8] = "2";
            $hal[9] = "3";
            $hal[10] = "2";
            $hal[11] = "3";
            $hal[12] = "2";
            $hal[13] = "4";
            $hal[14] = "3";
            $hal[15] = "2";
            $hal[16] = "2";
            $hal[17] = "2";
            $hal[18] = "4";
            $hal[19] = "4";
            $hal[20] = "4";
            $hal[21] = "4";
            $hal[22] = "2";
            $hal[23] = "2";
            $hal[24] = "2";

            return $hal[$id];
        }

        public function huruf($kata, $cek = ""){
            $i = 0;
            $huruf = [];
            while ($kata != ""){
                if(substr($kata, -1) == "-"){
                    $huruf[$i] = substr($kata, -1);
                    $kata = substr($kata, 0, -1);
                } else if(substr($kata, -1) == " "){
                    $huruf[$i] = " ";
                    $kata = substr($kata, 0, -1);
                } else if(substr($kata, -1) == "/"){
                    $huruf[$i] = substr($kata, -1);
                    $kata = substr($kata, 0, -1);
                } else if (substr($kata, -8) == "اَلْ") {
                    $huruf[$i] = substr($kata, -8);
                    $kata = substr($kata, 0, -8);
                } else if (substr($kata, -6) == "اَل" || substr($kata, -6) == "الْ" ){
                    $huruf[$i] = substr($kata, -6);
                    $kata = substr($kata, 0, -6);
                } else if (substr($kata, -4) == "ال" ){
                    $huruf[$i] = substr($kata, -4);
                    $kata = substr($kata, 0, -4);
                } else if (substr($kata, -2, 2) == "ّ" || substr($kata, -4, 2) == "ّ"){
                    $huruf[$i] = substr($kata, -6);
                    $kata = substr($kata, 0, -6);
                } else if(substr($kata, -2) == "ا" || substr($kata, -2) == "ى" || substr($kata, -2) == "ج" || substr($kata, -2) == "-" || substr($kata, -2) == "_" || substr($kata, -2) == "ل" || substr($kata, -2) == "آ" || substr($kata, -2) == "ي" || substr($kata, -2) == "و"){
                    $huruf[$i] = substr($kata, -2);
                    $kata = substr($kata, 0, -2);
                } else {
                    $huruf[$i] = substr($kata, -4);
                    $kata = substr($kata, 0, -4);
                }

                $i++;
            }

            if($cek != ""){
                $huruf[$i] = $cek;
            }
            
            return $huruf;
        }
    }