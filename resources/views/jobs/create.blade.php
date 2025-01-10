<x-layout>
    <x-page-heading class="text-3xl font-bold mb-6">Post a Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        @csrf
        <x-forms.input name="title" label="Job Title" placeholder="CEO"/>
        <x-forms.input name="salary" label="Salary" placeholder="100,000"/>
        <x-forms.input name="location" label="Job Location"  placeholder="San Francisco, CA"/>
    
        <x-forms.input name="url" label="url" placeholder="https://example.com"/>
        <x-forms.checkbox label="Feature ( Costs Extra )" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="laracasts, video, education"/>

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>

</x-layout>
