# Profil Instagram — Bootstrap 5 & Tailwind CSS (Grid 1 / 3 / 4)

Proyek ini mereplikasi halaman **Profil Instagram** dalam dua versi:

- `boosstrap_profile_ig/` → berbasis **Bootstrap 5**
- `tailwind_profile_ig/` → berbasis **Tailwind CSS**

Komponen yang disertakan: header (avatar, username, tombol aksi), statistik (posts/followers/following), bio singkat, deretan **highlights** (stories), tab navigasi (Posts/Reels/Tagged), serta galeri foto berbentuk ubin **persegi**.

---

## Struktur Proyek

/ (root)
├─ README.md
├─ assets/
│ └─ img/
│ ├─ avatar.jpeg
│ ├─ highlight1.jpg
│ ├─ highlight2.jpeg
│ ├─ highlight3.jpeg
│ ├─ highlight4.jpeg
│ ├─ highlight5.jpeg
│ ├─ highlight6.jpeg
│ ├─ post1.webp
│ ├─ post2.webp
│ ├─ post3.jpeg
│ ├─ post4.jpeg
│ ├─ post5.jpeg
│ ├─ post6.jpeg
│ ├─ post7.jpeg
│ ├─ post8.jpeg
│ ├─ post9.jpeg
│ ├─ post10.jpeg
│ ├─ post11.jpeg
│ └─ post12.jpeg
├─ boosstrap_profile_ig/
│ └─ index.html
└─ tailwind_profile_ig/
└─ index.html

> Kedua halaman mengakses gambar melalui path **`../assets/img/...`** karena file HTML berada di subfolder masing-masing.

---

## Cara Menjalankan

- Buka `boosstrap_profile_ig/index.html` atau `tailwind_profile_ig/index.html` langsung di browser; atau
- Gunakan **VS Code → Live Server** dari _root project_ agar path relatif tersaji benar.
- Pastikan koneksi internet aktif (karena memuat CSS dari CDN).

_Tips:_ Jika gambar tidak muncul, lakukan **Hard Refresh** (Ctrl+F5 / Cmd+Shift+R) dan pastikan ekstensi file di HTML sama persis dengan yang ada di folder (`.jpg` vs `.jpeg` vs `.webp`).

---

## Dependensi

- **Bootstrap 5.3.3** + **Bootstrap Icons** (hanya untuk versi Bootstrap).
- **Tailwind CSS (CDN)**.  
  Versi Tailwind **tidak** memakai library ikon eksternal; ikon tab dibuat dengan **SVG inline** agar ringan.

Tidak ada proses build; semua via CDN.

---

## Desain & Responsivitas

- **Konfigurasi kolom feed:**
  - Mobile: **1 kolom**
  - Tablet (≥768px): **3 kolom**
  - Desktop (≥992px): **4 kolom**
- **Ubin persegi:** menjaga tinggi baris tetap rata walau dimensi foto asli berbeda.
  - Bootstrap: `.ig-post { aspect-ratio: 1/1; }` + `object-fit: cover`.
  - Tailwind: `aspect-square object-cover`.
- **Highlights:** deret lingkaran bisa digeser secara horizontal (`overflow-x: auto`).
- **Tabs:** _Posts_ aktif secara default; _Reels_ dan _Tagged_ berupa placeholder.  
  Versi Tailwind menambahkan **ikon SVG inline** pada tab.

---

## Jawaban Reflektif — **Bootstrap**

**1) Alasan memilih 1/3/4 untuk grid**  
Pola 3 kolom di tablet memberi kepadatan visual yang nyaman, sementara 4 kolom di desktop memaksimalkan ruang layar lebar tanpa membuat ubin terlalu kecil. Ubin persegi memastikan komposisi tetap rapi lintas perangkat.

**2) Aksesibilitas tombol di layar kecil**  
Tombol diletakkan berdekatan dengan username (wilayah fokus pengguna), berukuran `btn-sm`, dapat _wrap_ saat ruang sempit, dan kontrasnya tinggi pada tema gelap sehingga mudah diketuk.

**3) Dampak bila postingan bertambah (mis. >50) & solusinya**

- Potensi: ukuran halaman membengkak, waktu muat lebih lama, _scroll_ terasa berat.
- Mitigasi: `loading="lazy"` pada semua `<img>`, kompresi gambar, pertimbangkan **pagination / infinite scroll**, dan tetap pertahankan rasio persegi agar tidak terjadi loncatan tinggi baris.

---

## Jawaban Reflektif — **Tailwind**

**1) Keputusan `grid-cols` dan `gap`**  
`grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-1` dipilih agar grid terasa rapat namun tidak sesak. Peralihan 3→4 kolom di desktop memanfaatkan ruang ekstra tanpa mengorbankan keterbacaan.

**2) Mengatasi isu layout di mobile dengan utility responsif**  
Utilitas `md:*`/`lg:*` mengubah tata letak secara progresif (tumpuk → sejajar). Kombinasi `aspect-square object-cover overflow-hidden` memastikan semua foto tampil proporsional tanpa distorsi.

**3) Trade-off utility vs CSS komponen**  
Utility class mempercepat dan memberi kontrol granular—sangat cocok untuk halaman kecil seperti tugas ini. Konsekuensinya, kelas bisa panjang; pada proyek besar biasanya diekstrak menjadi komponen/preset. Untuk scope tugas, pendekatan utility murni lebih efisien.

---

## Aksesibilitas & Performa

- Semua gambar memiliki atribut `alt` yang relevan.
- Kontras warna dijaga (teks terang pada latar gelap).
- _Lazy loading_ diaktifkan untuk seluruh `<img>`.

---

## Cara Mengganti Konten

1. **Avatar:** ganti `../assets/img/avatar.jpeg`.
2. **Highlights:** ganti `highlight1…6` sesuai kebutuhan (jaga konsistensi ekstensi di HTML).
3. **Feed:** seluruh `post1…post12` sudah lokal; bila menambah, ikuti pola penamaan yang sama.
4. Bila mengganti nama/ekstensi file, perbarui juga `src` di HTML.

---

## Catatan

- Proyek ini meniru struktur tampilan Instagram, namun belum mencakup modal detail foto, jumlah like/komentar, atau interaksi lengkap (sengaja dibatasi sesuai ruang lingkup tugas).
- Versi Tailwind menggunakan **ikon SVG inline** untuk tab agar tidak menambah dependensi eksternal.

---
