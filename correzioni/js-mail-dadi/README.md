# Mail

Chiedi all’utente la sua email, controlla che sia nella lista di chi può accedere, stampa un messaggio appropriato sull’esito del controllo.

- Chiedi all’utente la sua email
  - dichiarare una variable emailUtente e assegnargli il valore di ritorno del prompt
- controlla che sia nella lista di chi può accedere
  - dichiarare una variabile di tipo Array con un elenco di stringhe email
  - verificare che la mail inserita dall'utente sia inclusa dentro all'array
    - dichiarando una variabile emailTrovata = false
    - PER OGNI email dentro all'array
      - SE mailCorrente === emailUtente
        emailTrovata = true
- stampa un messaggio appropriato sull’esito del controllo
  - SE emailTrovata === true
    - console log "accesso consentito"
  - ALTRIMENTI
    - console log "accesso negato"

6. 'gian@gmail.com'

7. ['gian@gmail.com','pippo@gmail.com']

8. emailTrovata => false

i = 0, SE i < 2 ==> true
mailCorrente <= 'gian@gmail.com'
'gian@gmail.com' === 'gian@gmail.com' => true => emailTrovata <== true
i++

i = 1, SE i < 2 ==> true
mailCorrente <= 'pippo@gmail.com'
'pippo@gmail.com' === 'gian@gmail.com' => false
i++

i = 2, SE i < 2 ==> false
ciclo termina

17. SE emailTrovata === true ==> cl('accesso negato')

# DADI

Generare un numero random da 1 a 6, sia per il giocatore sia per il computer.
Stabilire il vincitore, in base a chi fa il punteggio più alto.

- generare un numero random da 1 a 6 per l'utente
- generare un numero random da 1 a 6 per il pc
- Stabilire il vincitore:
  - vardiabile message = ''
  - SE numero utente > numero pc
    - message <= 'hai vinto'
  - ALTRIMENTI SE numero pc > numero utente
    - message <= 'hai perso'
  - ALTRIMENTI
    - message <= 'pareggio'
- stampare l'esito della partita
  - log message
