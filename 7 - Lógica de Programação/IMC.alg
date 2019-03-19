algoritmo "semnome"
// Função :
// Autor :
// Data : 19/03/2019
// Seção de Declarações 
var

massa, altura, imc: real
op:caractere

inicio

escreval("Qual sua massa (peso kg)?")
leia(massa)

escreval("Qual sua altura (m) ?")
leia(altura)

imc <- massa / (altura * altura)

escreval("O seu IMC e: ", imc)

escreval("Deseja verificar qual o título (S/N) ?")
leia(op)

se (op = "S") ou (op = "s") entao
   se imc < 18.5 entao
      escreval("Abaixo do seu peso")
   senao
      se imc < 25 entao
         escreval("Peso normal")
      senao
         se imc < 30 entao
            escreval("Acima do peso")
         senao
            se imc < 40 entao
               escreval("Obeso")
            senao
               se imc > 40 entao
                  escreval("Obesidade morbito")
               fimse
            fimse
         fimse
      fimse
   fimse
fimse


fimalgoritmo
