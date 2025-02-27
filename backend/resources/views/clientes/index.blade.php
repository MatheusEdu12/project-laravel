<h3>Clientes</h3>

<p>
    Adicione um novo cliente <a href=" {{ route('clientes.create') }} ">aqui</a>
</p>
<ol>
    @foreach ($clientes as $c)
        <li> 
            {{ $c['nome'] }} |
            <a href=" {{ route('clientes.edit', ['cliente' => $c['id']]) }} ">Editar</a> |
            <a href=" {{ route('clientes.show', ['cliente' => $c['id']]) }} ">Informações</a> |
            
            <form action="{{ route('clientes.destroy', $c['id']) }}" method="POST">

                @csrf
                @method('DELETE')
                <input type="submit" value="Excluir">
            </form>
        </li>
    @endforeach
</ol>