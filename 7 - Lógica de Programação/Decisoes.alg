algoritmo "semnome"

var

nota1:real
nota2:real
media:real

inicio

escreval("Informe Nota 1: ")
leia(nota1)

escreval("Informe Nota 2: ")
leia(nota2)

media <- (nota1 + nota2) / 2

se media >= 6 entao
   escreval("Aluno aprovado")
senao
   escreval("Aluno reprovou")
fimse

escolha media
caso 6 ate 10
     escreval("Aprovado")
caso 1 ate 5
     escreval("Muito mal")
outrocaso
     escreval("Reprovado")
fimescolha

fimalgoritmo
