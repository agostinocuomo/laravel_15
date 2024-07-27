<x-pagina class="d-flex flex-wrap p-4">
    @foreach ($utenti as $utente )
  
        <div style="width: 200px, height:100px" class="border border-warning rounded-3 bg-dark  mt-4 ">
          <h3 class="text-warning">{{$utente->email}}</h3>
          <h3 class="text-warning ">{{$utente->password}}</h3>
          <h3 class="text-warning ">{{$utente->role->ruolo}}</h3>
        </div>

    @endforeach
    
      </x-pagina>