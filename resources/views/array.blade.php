<?php
$data_indexed = ['A', 'B', 'C', 'D'];

$data_key = [
    'nama' => 'Chandra',
    'alamat' => 'Sajra',
];

echo '<pre>';
print_r($data_indexed);
echo '<pre />';

echo '<pre>';
print_r($data_key);
echo '<pre />';

tambahAtGmail('candra');

function tambahAtGmail($nama)
{
    echo $nama . '@gmail.com';
}
?>
