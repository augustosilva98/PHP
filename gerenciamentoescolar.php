<?php

class Aluno {
    private $nome;
    private $turma;
    private $professor;
    private $notas;

    public function __construct($nome, $turma, $professor, $notas) {
        $this->nome = $nome;
        $this->turma = $turma;
        $this->professor = $professor;
        $this->notas = $notas;
    }

    public function calcularMedia() {
        $soma = array_sum($this->notas);
        return $soma / count($this->notas);
    }

    public function verificarAprovacao() {
        $media = $this->calcularMedia();

        if ($media > 6) {
            return "Aprovado";
        } elseif ($media >= 4 && $media <= 6) {
            return "Recuperação";
        } else {
            return "Reprovado";
        }
    }

    public function exibirInformacoes() {
        echo "Nome do Aluno: " . $this->nome . "<br>";
        echo "Turma do Aluno: " . $this->turma . "<br>";
        echo "Nome do Professor: " . $this->professor . "<br>";
        echo "Notas do Aluno: " . implode(", ", $this->notas) . "<br>";
        echo "Situação: " . $this->verificarAprovacao() . "<br>";
    }
}

// Exemplo de uso
$aluno = new Aluno("João", "8A", "Maria", [7, 8, 6, 9, 7]);
$aluno->exibirInformacoes();

?>
