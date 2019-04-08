algoritmo "semnome"

var

parar:logico
continuar:caractere

inicio

parar <- verdadeiro

enquanto parar faca
           escreval("Bem vindo ao meu menu")
           escreval("Quer continuar (S/N?")
           leia(continuar)
           se (continuar = "N") ou (continuar = "n") entao
              parar <- falso
           fimse
           
fimenquanto

fimalgoritmo
