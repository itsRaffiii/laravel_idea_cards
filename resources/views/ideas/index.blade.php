<x-layout>

        </br>
        <h1 style="text-align: center; color: aliceblue;">Welcome, this is the HomePage</h1>

        @if ($ideas->count())
        <div class="mt-6 text-white">
                <h2 class="font-bold">Your Ideas</h2>

                <ul class="mt-6">
                        @foreach ($ideas as $idea)
                        <li class="text-sm">{{ $idea->description }}</li>
                        @endforeach
                </ul>
        </div>

    @else
        <p>No ideas yet?
            <a href="/ideas/create" class="underline">Create a new one.</a>
        </p>
    @endif
</x-layout>
