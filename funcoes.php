<?php
// Define o fuso horário padrão para o Brasil
date_default_timezone_set('America/Sao_Paulo');

// Evita ataques XSS ao exibir textos no HTML
function e($texto) {
    if (is_null($texto)) {
        return '';
    }
    return htmlspecialchars($texto, ENT_QUOTES, 'UTF-8');
}

// Formata um valor numérico para moeda em Reais (R$)
function dinheiro($valor) {
    return 'R$ ' . number_format($valor, 2, ',', '.');
}

// Converte datas no formato YYYY-MM-DD para DD/MM/YYYY
function data_br($data) {
    if (!$data) return '';
    $partes = explode('-', substr($data, 0, 10));
    if (count($partes) === 3) {
        return $partes[2] . '/' . $partes[1] . '/' . $partes[0];
    }
    return $data;
}
?>