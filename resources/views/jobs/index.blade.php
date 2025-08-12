<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-8 pb-16">
            <h1 class="font-bold text-4xl">Let's Find Your Dream Job</h1>

            <form action="">
                <input type="text" placeholder="Web Developer..." class="rounded-xl bg-gray-100 outline-gray-400 px-5 py-4 w-full mt-6 max-w-2xl">
            </form>
        </section>

        <section>
            <x-section-heading>Top Jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($featuredJobs as $job)
                    <x-job-card :job="$job" />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag)
                    <x-tag :tag="$tag" />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="mt-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :job="$job" />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
