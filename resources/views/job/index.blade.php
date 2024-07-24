<x-layout>
    <x-breadcrumbs class="mb-4" :links="['Jobs'=> route('job.index')]" />
    @foreach($jobs as $job)
    <x-job-card :$job>
        <div>
            <x-link-buttum :href=" route('job.show',$job)">
                Show
            </x-link-buttum>
        </div>
    </x-job-card>
    @endforeach
</x-layout>
