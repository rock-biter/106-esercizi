# Chiedere all’utente di inserire una parola Creare una funzione per capire se la parola inserita è palindroma

- chiedere all'utente una parola
- SE la parole è palindroma
  - stampiamo in console: la parola è palindroma
- ALTRIMENTI
  - la parola non è palindroma

# function isPalindrome

parametri:

- parola (string)

- rendere la parola tutta minuscola
- invertiamo la parola orignale
  - creare un variale parolaRovesciata stringa vuota
  - per ogni lettera della parola partendo dalla fine
    - leggiamo la lettere corrente
    - concateniamo alla variabile parolaRovesciata
- SE la parola === parola invertita
  - return true
- ALTRIMENTI
  - return false

### esecuzione

parola = 'Ciao'
parolaRovesciata = ''

lettera corrente = 'o'
parolaRovesciata = 'o'

lettera corrente = 'a'
parolaRovesciata = 'oa'

lettera corrente = 'i'
parolaRovesciata = 'oai'

lettera corrente = 'c'
parolaRovesciata = 'oaiC'

'anna' === 'anna' => true

# L’utente sceglie pari o dispari e inserisce un numero da 1 a 5. Generiamo un numero random (sempre da 1 a 5) per il computer (usando una funzione). Sommiamo i due numeri Stabiliamo se la somma dei due numeri è pari o dispari (usando una funzione) Dichiariamo chi ha vinto
