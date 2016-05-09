# Apa Ini ?

## Tools untuk membantu membuat project

-> Apa aja isinya ?

1. CodeIgniter framework v 3
2. Harviacode CRUD Generator v 1.3.1 (Included : Export to Pdf, Excel, Word file)
3. Template AdminLte v2
4. Helper combo box by Nuris Akbar


## How to Install

1. Buat database
2. Download mpdf v.6.0 `http://www.mpdf1.com/mpdf/index.php?page=Download`
3. Ubah config CI `aplication/config/`

a. autoload.php

```
    $autoload['libraries'] = array('database','session','template');
    $autoload['helper'] = array('url','form','nuris');
```

b. config.php

```
    $config['base_url'] = 'http://localhost/nullid-research/'; // sesuaikan

    $config['index_page'] = '';
    $config['url_suffix'] = '.html';
```

c. database.php

`   Sesuaikan`

## How to use

1. buka `http://localhost/nullid-research/harviacode`
2. saya rasa paham sendiri apa selanjutnya

-> Note : Generate untuk menggenerate CRUD satu persatu berdsarkan tabel, Generate All untuk menggenerate CRUD semuanya sekaligus