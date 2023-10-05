# calcolo del prezzo del biglietto del treno

- chiedere quanti km deve percorrere
- chiedere l'età del passeggero
- calcolare costo del biglietto:
  - calcolare il prezzo base del biglietto:
    - n km \* 0.21
  - calcolare lo sconto:
    - SE eta < 18
      sconto = 20%
    - ALTRIMENTI SE eta > 65
      sconto = 40%
    - ALTRIMENTI
      sconto = 0
  - calcolare il prezzo finale:
    prezzo finale = prezzo base - sconto
- stampare nella pagina il costo con max 2 decimali:
  - prendere l'elemento del dom dove stampare il prezzo
  - modifcare innerHTML con prezzo finale con 2 cifre decimali
