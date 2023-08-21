<?php
require_once 'index.php';

function testDiaUtilMessage() {
    $context = new MensagemContext('Monday');
    $message = $context->display();
    assert($message === "Tenha um ótimo dia de trabalho!", "Test failed: Weekday message");
}

function testSabadoMessage() {
    $context = new MensagemContext('Saturday');
    $message = $context->display();
    assert($message === "Aproveite o final de semana!", "Test failed: Saturday message");
}

function testDomingoMessage() {
    $context = new MensagemContext('Sunday');
    $message = $context->display();
    assert($message === "Tenha um domingo relaxante!", "Teste falhou: Mensagem de teste de domingo");
}

function testDataEspecialMessage() {
    $specialDate = "2023-12-25";
    $context = new MensagemContext('Wednesday', $specialDate);
    $message = $context->display();
    assert($message === "Feliz ocasião especial!", "Teste falhou: Mensagem de data especial");
}

// Executar os testes
testDiaUtilMessage();
testSabadoMessage();
testDomingoMessage();
testDataEspecialMessage();

echo "Todos os testes aprovados!";
?>
