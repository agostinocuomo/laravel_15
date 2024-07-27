<x-pagina>
    <form class="w-25 m-5 border border-3 border-warning bg-dark rounded-4" method="post" action="{{route('register')}}">
        <h1 class="float-left text-warning">Inserisci Utente</h1>
        @csrf
        <div class="mb-3 ">
            {{-- @error('name')
                {{$message}}
            @enderror --}}
          <label for="name" class="form-label text-warning">Name</label>
          <input type="name" class="form-control" name="name" id="name" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
        <div class="mb-3 ">
           {{--  @error('email')
                {{$message}}
            @enderro --}}r
          <label for="email" class="form-label text-warning">Email address</label>
          <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
        
        </div>
        <div class="mb-3">
        {{--     @error('password')
            {{$message}}
        @enderror --}}
          <label for="password" class="form-label text-warning">Password</label>
          <input type="password" class="form-control" name="password" id="password">
        </div>
        <div class="mb-3 ">
           {{--  @error('password_confirmation')
                {{$message}}
            @enderror --}}
          <label for="password_confirmation" class="form-label text-warning">Password_Confirmation</label>
          <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" >
          
        </div>
        <div class="mb-3">
        <button type="submit" class="btn btn-primary text-warning bg-dark border border-3 border-warning ">Submit</button>
      </form>
</x-pagina>