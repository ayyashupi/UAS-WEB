

var img1 = document.getElementById("image1");
img1.alt = "TAAT JOEDA. Lahir di Cirebon, 14 Juli 1948. Pendidikan: Fakultas Seni Rupa ITB. Pameran Tunggal: 2000 – Pameran Tunggal – Benteng Vredeburg, Yogyakarta / 2001 – Pameran Tunggal – Lion, West Georgia, Vancouver, Canada; Hongkong Gallery / 2002 – Mercantille Executive Club, BCA Building, Jakarta / 2003 – Cermin Inspirasi, Hotel Marriot, Jakarta; Beyond Wealth, ABN AMRO Private Banking, Jakarta / 2004 – Hotel Mulia, Jakarta / 2006 – Lagoon Tower Hilton Hotel, Jakarta / 2007 – Kuala Lumpur, Malaysia / 2008 – Grand Melia, Jakarta. Jl. Sukahaji Permai 2 No. 3, Gegerkalong, Bandung 40152";

var img2 = document.getElementById("image2");
img2.alt = "TATO KASTAREJA. Lahir di Cilacap, 26 Juni 1967. Pendidikan: 1985 – SMSR Yogyakarta jurusan seni lukis. Pameran tunggal: 2006 – pameran tunggal di Darmint Café Art Gallery, Jakarta. Pameran bersama: Pameran Nusantara, Galeri Nasional Jakarta. Penghargaan: 2005 – karya berjudul “Batu-batu Keterbatasan” menang 5 besar untuk karya terbaik pada kompetisi Golden Palette 2005; karya berjudul “Menembus Kebebasan” masuk nominasi pada kompetisi Golden Palette. Pasar Seni Blok C-20, Taman Impian Jaya Ancol, Jakarta";

var img3 = document.getElementById("image3");
img3.alt = "EGUH OSTENRIK. Lahir di Jakarta, 1950. Pendidikan: 1972 – Akademi Grafis – Lette Schüle, Berlin Barat, Jerman / 1974 – Jurusan Seni Rupa Murni, Hochschule der Künste, Berlin Barat. Pameran tunggal: 2003 – “Praise” Patung dan panel terakota, Hotel Intercontinental, Manila-Philippines / 2005 – “Compassion” Church of St. Mary of the Angels, Singapura; “Look At Me”, lukisan dan patung, Galeri Nadi, Jakarta / 2007 – “Kamasutra Femmes” lukisan dan patung, East & West Art Gallery, Melbourne-Australia. Group exhibition: 2004 – “A Brush with Lions”, Sing Art, Singapura / 2006 – “East West Art Collection I”, Art Singapore 2006, Singapura; “East West Art Collection II”, Shanghai Art Fair 2006, Shanghai, China / 2007 – Malihom AIR Program, Galeri ABN AMRO, Penang-Malaysia. Jl. Tridharma Utama III No. 5, RT 009/RW 012/ Cilandak Barat, Jakarta 12430";

var img4 = document.getElementById("image4");
img4.alt = "T. SUTANTO. Lahir di Klaten, 2 Mei 1941. Pendidikan: Sarjana Seni Rupa ITB (Jurusan Seni Grafis); PRATT Institute New York (Communication Design). Pengalaman Pameran di dalam dan luar negeri. Penghargaan: Pemenang Biennale Seni Lukis Indonesia IV (1980); 10 Besar dalam INDONESIAN ART AWARDS 1996.";

var img5 = document.getElementById("image5");
img5.alt = "SYAHRUDDIN HARAHAP. Lahir di Kabanjahe, Sumatera Utara, 3 Desember 1955. Pendidikan: Sarjana Seni Rupa FPBS IKIP Medan; Magister Ketahanan Nasional UGM, Yogyakarta. Pameran: 1997 – pameran seni lukis se-Sumatera, Bandar Lampung; pameran seni lukis se-Sumatera, Bengkulu / 1998 – pameran bersama di Yogyakarta; pameran bersama di Bandung / 1999 – pameran seni lukis se-Sumatera Utara, Bandar Lampung / 2000 – pameran seni lukis Indonesia/silaturahmi di Gersik. Penghargaan: 1979 – lukisan terbaik pada lomba seni lukis Porseni Sumatera Utara, lukisan terbaik pada lomba seni lukis Porseni Kopertis Wilayah I, Sumatera Utara dan Kalimantan Barat / 1980 – lukisan terbaik III lomba seni lukis Porseni Tingkat Nasional; 1996 – terpilih sebagai karya terbaik pameran seni lukis se-Sumatera, Jambi / 1998 – terpilih sebagai karya terbaik pada pameran se-Sumatera, Jambi. Jl. Pendidikan No. 97, Kel. Indrakasih, Medan";

var img6 = document.getElementById("image6");
img6.alt = "SYAHRIZAL PAHLEVI. Lahir: Palembang,14 Oktober 1965. Pendidikan: Tamat dari jurusan Seni Lukis ISI Yogyakarta (1994). Pameran tunggal: 1998 – Lukisan dan Instalasi,Bentara Budaya Yogyakarta / 1999 – “Juice Merah Hangat dan Segar”, Instalasi, Lembaga Indonesia-Prancis Yogyakarta / 2000 – Lukisan dan Seni Grafis Indosteak Restaurant, Jakarta / 2004 – “Seri Penulis dll” Seni Grafis, Kedai Kebun Forum Yogyakarta / 2005 – “Harmanto” Grafis dan media campuran, Bentara Budaya Yogyakarta / 2008 – “Maps in Mind/Pahlevi”, Galeri Langgeng, Magelang. Pameran bersama: 2004 – “Treshold”, Museum Affandi, Yogyakarta / 2005 – “Mari Gembira”, Kedai Kebun Forum, Yogyakarta / 2006 – 7th Triennale Mondiale D’estampes, Galerie d’art Contemporain de Chamalianes, France. Penghargaan: 1991 – Terbaik II Karikatur Pariwisata ‘KEKAR 91’, Jakarta / 1995, 1996, 1997 – Finalis Philip Morris IAA /2003, 2006 – Finalis Trienal Seni Grafis Indonesia. Somodaran GP III No. 51, Banyuraden, Yogyakarta";

var modalImg = document.getElementById("modalimg");
img1.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}