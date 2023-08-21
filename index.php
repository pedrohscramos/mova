<?php
interface Mensagem {
    public function getMessage(): string;
}

class DiaUtil implements Mensagem {
    public function getMessage(): string {
        return "Tenha um ótimo dia de trabalho!";
    }
}

class Sabado implements Mensagem {
    public function getMessage(): string {
        return "Aproveite o final de semana!";
    }
}

class Domingo implements Mensagem {
    public function getMessage(): string {
        return "Tenha um domingo relaxante!";
    }
}

class DataEspecial implements Mensagem {
    private $date;

    public function __construct($date) {
        $this->date = $date;
    }

    public function getMessage(): string {
        return "Feliz ocasião especial!";
    }
}

class MensagemContext {
    private $retorno;

    public function __construct($day, $dataEspecial = null) {
        switch ($day) {
            case 'Saturday':
                $this->retorno = new Sabado();
                break;
            case 'Sunday':
                $this->retorno = new Domingo();
                break;
            default:
                $this->retorno = new DiaUtil();
                break;
        }

        if ($dataEspecial !== null) {
            // Se houver uma data especial, usar a estratégia para datas especiais
            $this->retorno = new DataEspecial($dataEspecial);
        }
    }

    public function display() {
        return $this->retorno->getMessage();
    }
}

// Exemplos de uso
$hoje = date("l"); // Dia da semana atual
$dataEspecial = "2023-12-25"; // Exemplo de data especial

$context = new MensagemContext($hoje, $dataEspecial);
echo $context->display();
?>
