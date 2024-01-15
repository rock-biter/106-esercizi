<h1>Ciao Admin!</h1>
<div>
  Hai ricevuto un nuovo contatto.
  <ul>
    <li>
      <strong>Nome:</strong>  {{ $lead->name }}
    </li>
    <li>
      <strong>Email:</strong>  {{ $lead->email }}
    </li>
  </ul>
  <p>
    Messaggio: <br>
    {{ $lead->message }}
  </p>
</div>