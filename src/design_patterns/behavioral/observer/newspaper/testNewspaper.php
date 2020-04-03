<?php

include_once("Newspaper.php");
include_once("Reader.php");

$newspaper = new Newspaper('Newyork Times');

$allen = new Reader('Allen');
$jim = new Reader('Jim');
$linda = new Reader('Linda');

// Add reader
$newspaper->attach($allen);
$newspaper->attach($jim);
$newspaper->attach($linda);

// Remove reader
$newspaper->detach($linda);

// Set break outs
$newspaper->breakOutNews('USA break down!');