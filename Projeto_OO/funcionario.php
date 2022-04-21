<?php

class Funcionario{

    private $nome;
    private $cidade;
    private $salHora;
    private $horasTrab;
    private $salarioFinal;

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setCidade($cidade){
        $senha = $cidade;
        $this->cidade = $cidade;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function setSalHora($salHora){
        $this->salHora = $salHora;
    }

    public function getSalHora(){
        return $this->salHora;
    }

    public function setHorasTrab($horasTrab){
        $this->horasTrab = $horasTrab;
    }

    public function getHorasTrab(){
        return $this->horasTrab;
    }

    public function setSalarioFinal($salarioFinal){
        $this->salarioFinal = $salarioFinal;
    }

    public function getsalarioFinal(){
        return $this->salarioFinal;
    }

    public function calcularSalario(){
        $this->salarioFinal = (($this->horasTrab*$this->salHora)*30);
        return $this->salarioFinal;
    }

    public function mostrarDados(){
        $mostrar = "Nome: ".$this->nome." Cidade: ".$this->cidade."Salário por hora: ".$this->salHora."Horas Trabalhadas: ".$this->horasTrab."Salário Final: ".$this->salarioFinal;
        return $mostrar;
    }

    public function darAumento($aumento){
        $this->salHora += $aumento;
        return $this->salHora;
    }


}

?>