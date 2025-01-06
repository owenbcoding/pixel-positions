<x-layout>
    <x-page-heading class="text-3xl font-bold mb-6">Register</x-page-heading>

    <x-forms.form mthod="POST" action="/register">
        <x-forms.input name="name" type="text" label="Name" required autofocus />
        <x-forms.input name="email" type="email" label="Email" required />
        <x-forms.input name="password" type="password" label="Password" required />
        <x-forms.input name="password confirmation" type="password" label="password_confirmation" required />
        
        <x-forms.divider />

        <x-forms.input label="Employer Name" name="name" />
        <x-forms.input label="Employer logo" name="logo" type="file"/>

        <x-forms.button>Create Account</x-forms.button>
    </x-forms.form>
</x-layout>