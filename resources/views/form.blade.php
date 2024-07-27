<x-pagina>
    <form class="w-25 m-5 border border-3 border-warning bg-dark rounded-4" method="post" action="{{route('store')}}">
        <h1 class="float-left text-warning">Inserisci Utente</h1>
        @csrf
        @method('put')
        <div class="mb-3 ">
            @error('email')
                {{$message}}
            @enderror
          <label for="email" class="form-label text-warning">Email address</label>
          <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            @error('password')
            {{$message}}
        @enderror
          <label for="password" class="form-label text-warning">Password</label>
          <input type="password" class="form-control" name="password" id="password">
        </div>
        <button type="submit" class="btn btn-primary text-warning bg-dark border border-3 border-warning ">Submit</button>
      </form>
</x-pagina>