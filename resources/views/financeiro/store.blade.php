<x-panel title="Financeiro - Dados">
    <!-- Campo para retornar os dados inseridos ao cadastrar -->
    <h1  style="text-align: center; margin-top: 30px;">Conta registrada!</h1>
    <div style="display: flex; justify-content: center; align-items: center; height: 70vh; padding: 20px;">
    <div style="padding: 15px; background-color: black; color: white; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 400px; width: 100%;">    <p><strong>Descrição: </strong> {{ $dados['descricao'] }}</p>
    <p><strong>Valor: R$ </strong> {{ $dados['valor'] }}</p>
    <p><strong>Tipo: </strong> {{ $dados['tipo'] }}</p>
    </div>
    </div>
</x-panel>
