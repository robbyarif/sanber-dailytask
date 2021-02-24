# Day#3 Week 2 - Git and PHP continued

## Objectives

Create a directory named `php-3` inside `htdocs` of XAMPP.

Create new repository in gitlab named `berlatih-php`.

Initialize `php-3` directory with git and connect it with newly created repository.

Create `tentukan-nilai.php` which contain a php function `tentukan_nilai` with a number input param.
> jika paramater integer lebih besar dari sama dengan 85 dan lebih kecil sama dengan 100 maka akan mereturn String “Sangat Baik” Selain itu jika parameter integer lebih besar sama dengan 70 dan lebih kecil dari 85 maka akan mereturn string “Baik” selain itu jika parameter number lebih besar sama dengan 60 dan lebih kecil dari 70 maka akan mereturn string “Cukup” selain itu maka akan mereturn string “Kurang”"

```
<?php
function tentukan_nilai($number)
{
    //  kode disini
}

//TEST CASES
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang
?>
```

Create `ubah-huruf.php` which contain a php function `ubah_huruf` with a string input param.
> Di dalam file tersebut buatlah sebuah function dengan nama ubah_huruf yang menerima parameter berupa string. function akan mereturn string yang berisi karakter-karakter yang sudah diubah dengan karakter setelahnya dalam susunan abjad “abdcde …. xyz”. Contohnya karakter “a” akan diubah menjadi “b” karakter “x” akan berubah menjadi “y”, dst.

```
<?php
function ubah_huruf($string){
//kode di sini
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>
```

Create `tukar-besar-kecil.php` which contain a php function `tukar_besar_kecil` with a string input param.
> function akan mengembalikan sebuah string yang sudah ditukar ukuran besar dan kecil per karakter yang ada di parameter. Contohnya jika parameter “pHp” maka akan mengembalikan “PhP”.

```
<?php
function tukar_besar_kecil($string){
//kode di sini
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>
```

Push all the changes to the repository.