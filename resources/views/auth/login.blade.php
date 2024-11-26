<div>
    <h1>Login</h1>


        @if ($message = session()->get('messagem'))
        <div>{{ $message }}</div>
        @endif



    <form action="/login" method="post">
        @csrf


        <div>

        <input name="email" placeholder="Email" value="{{ old('email') }}" />
            @error('email')
                <span>{{ $message }}</span>

            @enderror

        </div>

        <br>
        <div>

        <input type="password" name="password" placeholder="Senha" />
            @error('password')
                <span>{{ $message }}</span>

            @enderror
        
        </div>
        <br>

        <button>Logar</button>
    </form>
    
</div>
