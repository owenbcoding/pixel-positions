<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="fond-bold text-4xl">Lets Find Your Next Job</h1>

            <form action="">
                <input type="text" id="search" placeholder="Search for job" class="w-full mt-6 px-5 py-4 border bg-white/5 border-white/10 rounded-xl max-w-xl">
            </form>
        </section>

        <x-section-heading>Featured Jobs</x-section-heading>
    
        <section>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>
    
        <section>
            <x-section-heading>Tags</x-section-heading>
            
            <div class="mt-6 space-x-1">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
            </div>

        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            
            <div class="mt-6 space-y-6">
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
            </div>
        </section>
    </div>
</x-layout>
