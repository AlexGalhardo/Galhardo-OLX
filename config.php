<?php

session_start();

global $pdo;

try {
	$pdo = new PDO("mysql:dbname=galhardo_620;host=localhost", "galhardo_620", "lecoBR@159");
} catch (PDOException $e){
	echo "ERRO: " . $e->getMessage();
	exit;
}