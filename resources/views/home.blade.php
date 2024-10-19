<x-panel title="Página Inicial">
    
    <div style="display: flex; justify-content: space-between; gap: 20px;">
        <div style="flex: 1; padding: 10px; background-color: #f0f0f0; border-radius: 8px;">
            <h2>Lista de Contas</h2>
            @foreach ($contas as $conta)
                <p>{{ $conta->id }} - {{ $conta->descricao }} - R$ {{ $conta->valor }} - {{ $conta->tipo }}</p>
            @endforeach
        </div>

        <div style="width: 1px; background-color: #ccc;"></div>
        
        <div style="flex: 1; padding: 10px; background-color: #f0f0f0; border-radius: 8px;">
            <h2>Lista de Usuários</h2>
            @foreach ($usuarios as $usuario)
                <p>{{ $usuario->id }} - {{ $usuario->nome }} - {{ $usuario->cargo }} - {{ $usuario->escolaridade }}</p>
            @endforeach
        </div>
    </div>
</x-panel>
