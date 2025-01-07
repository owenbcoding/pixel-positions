<x-layout>
    <x-page-heading class="text-3xl font-bold mb-6">Login</x-page-heading>

    <x-forms.form method="POST" action="/login">
        @csrf
        <x-forms.input name="email" type="email" label="email" />
        <x-forms.input name="password" type="password" label="password" type="password" />

        <x-forms.button>Log In</x-forms.button>
    </x-forms.form>
</x-layout>