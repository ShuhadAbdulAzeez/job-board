<x-layout>
    <x-breadcrumbs class="mb-4" :links="['My Job Application' => '#']" />

    @forelse ($applications as $application)
        <x-job-card :job="$application->job">
            <div class="flex items-center justify-between text-xs text-slate-500">
                <div>Left</div>
                <div>Right</div>
            </div>
        </x-job-card>   
    @empty 
    @endforelse
</x-layout>
