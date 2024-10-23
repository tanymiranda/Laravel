 <x-panel title="Financeiro - Contas">

    <a href="/financeiro/cadastrar" style="text-decoration: none;">
    <button style="margin-top: 10px; margin-left: 5px; color: white; text-decoration: none; padding: 8px 16px; display: inline-block; background-color: #333333; border-radius: 5px; text-align: center; cursor: pointer;">Cadastrar Nova Conta</button>
    </a>
    <h1 style="text-align: center; margin-top: 30px;">Lista de Contas para pagar/receber</h1>
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; padding: 20px;">
        @foreach ($contas as $conta)
            <div style="padding: 15px; background-color: #f0f0f0; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <p>{{ $conta->id }}</p>
                <p><strong>Descrição:</strong> {{ $conta->descricao }}</p>
                <p><strong>Valor:</strong> R$ {{ $conta->valor }}</p>
                <p><strong>Tipo:</strong> {{ $conta->tipo }}</p>
            </div>
        @endforeach
    </div>
</x-panel>
