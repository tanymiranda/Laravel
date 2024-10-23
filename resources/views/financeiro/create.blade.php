<x-panel title="Cadastrar Nova Conta">

    <h2 style="text-align: center; margin-top: 30px;">Cadastrar Nova Conta</h2>
    <form action="/financeiro" method="post" style="max-width: 500px; margin: 30px auto; padding: 20px; background-color: #D3D3D3; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        @csrf
 
        <input type="text" name="descricao" placeholder="Descrição" required 
            style="width: 95%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">

        <input type="number" name="valor" placeholder="Valor" required 
            style="width: 95%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">

        <select name="tipo" required 
            style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">
            <option value="A pagar">A pagar</option>
            <option value="A receber">A receber</option>
        </select>

        <button type="submit" 
            style="width: 100%; padding: 12px; background-color: #333333; color: white; border: none; border-radius: 5px; font-size: 16px; cursor: pointer;">
            Cadastrar
        </button>
    </form>
</x-panel>
