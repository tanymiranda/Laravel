<x-panel title="Usuários - Novo">
    <!-- Campo para cadastrar -->
    <a href="/usuarios/cadastrar" style="text-decoration: none;">
        <button style="margin-top: 10px; margin-left: 5px; color: white; text-decoration: none; padding: 8px 16px; display: inline-block; background-color: #333333; border-radius: 5px; text-align: center; cursor: pointer;"
        onmouseover="this.style.backgroundColor='black'"
        onmouseout="this.style.backgroundColor='#333333'">Cadastrar Novo Usuário</button>
    </a>
      <!-- Campo usando foreach para exibir a lista da model -->
    <h1 style="text-align: center; margin-top: 30px;">Lista de Usuários</h1>
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; padding: 20px;">
        @foreach ($usuarios as $usuario)
        <div style="padding: 15px; background-color: #f0f0f0; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <p>{{ $usuario->id }}</p>
            <p><strong>Nome: </strong>{{ $usuario->nome }}</p>
            <p><strong>Cargo: </strong>{{ $usuario->cargo }}</p>
            <p><strong>Escolaridade: </strong>{{ $usuario->escolaridade }}</p>
        </div>
        @endforeach
    </div>
</x-panel>
