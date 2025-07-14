<div>
    @if (session()->has('message'))
        <div style="color: green">{{ session('message') }}</div>
    @endif

    <form wire:submit.prevent="submit">
        <label>Nome:</label><br>
        <input type="text" wire:model="name"><br><br>

        <label>Cargo:</label><br>
        <input type="text" wire:model="role"><br><br>

        <label>Email:</label><br>
        <input type="email" wire:model="email"><br><br>

        <button type="submit">Cadastrar</button>
    </form>
</div>
