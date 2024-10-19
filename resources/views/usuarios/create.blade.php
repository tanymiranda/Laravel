<x-panel title="Cadastrar Novo Usuário">

    <h2 style="text-align: center; margin-top: 30px;">Cadastrar Novo Usuário</h2>
    <form action="/usuarios" method="post" style="max-width: 500px; margin: 30px auto; padding: 20px; background-color: #D3D3D3; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        @csrf  
        <input type="text" name="nome" id="nome"  placeholder="Nome" required
        style="width: 95%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">
        <input type="text" name="cargo" id="cargo"  placeholder="Cargo" required 
        style="width: 95%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">

        <select name="escolaridade" id="escolaridade" required
        style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">
            <option value="Ensino Superior">Ensino Superior</option>
            <option value="Ensino Médio">Ensino Médio</option>
            <option value="Ensino Fundamental">Ensino Fundamental</option>
        </select>

        <button type="submit" style="width: 100%; padding: 12px; background-color: #333333; color: white; border: none; border-radius: 5px; font-size: 16px; cursor: pointer;">
        Cadastrar</button>
    </form>
</x-panel>
