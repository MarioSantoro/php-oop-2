<?php
include_once __DIR__ . '/../models/Categorie.php';
include_once __DIR__ . '/../models/Prodotti.php';
include_once __DIR__ . '/../models/Gioco.php';
include_once __DIR__ . '/../models/Cuccia.php';
include_once __DIR__ . '/../models/Cibo.php';

$products = [
    new Gioco(true, 'giallo', 'pupazzo', 10.99, '', new Categorie('Cane')),
    new Gioco(false, 'rosso', 'osso', 6.99, '', new Categorie('Cane')),
    new Gioco(true, 'viola', 'palla di lana', 15.99, '', new Categorie('Gatto')),
    new Gioco(false, 'blu', 'sonaglio', 4.99, '', new Categorie('Gatto')),
    new Cibo('Carne', 1, 'cibo per cani', 12.99, '', new Categorie('Cane')),
    new Cibo('Pesce', 1, 'cibo per gatti', 16.99, '', new Categorie('Gatti')),
    new Cibo('Manzo', 1, 'cibo per cani', 7.99, '', new Categorie('Cane')),
    new Cibo('Agnello', 1, 'cibo per gatti', 29.99, '', new Categorie('Gatti')),
    new Cuccia('Media', 'Media', 'Cuccia per cani nobili', 40.99, '', new Categorie('Cane')),
    new Cuccia('Piccola', 'Piccola', 'Cuccia per cani plebei', 5.99, '', new Categorie('Cane')),
    new Cuccia('Grande', 'Grande', 'Cuccia per gatti meastosi', 45.99, '', new Categorie('Gatto')),
    new Cuccia('Media', 'Media', 'Cuccia per gatti nobili', 40.99, '', new Categorie('Gatto')),
];
