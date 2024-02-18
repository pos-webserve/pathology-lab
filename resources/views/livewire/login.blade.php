<html>
<head>
    <!-- Other head elements -->
    <title>Login</title>
    @livewireStyles
</head>
<body>
<!-- Other body elements -->
<div>
    {{-- Stop trying to control. --}}
    <div>This is login custom view.</div>
    <form wire:submit.prevent="login">
        <!-- Form fields -->
        <input type="email" wire:model="email">
        <input type="password" wire:model="password">
        <button type="submit">Login</button>
    </form>
</div>
@livewireScripts
</body>

</html>
