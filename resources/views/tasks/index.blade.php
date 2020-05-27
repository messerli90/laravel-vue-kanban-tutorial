@extends('layouts.app')

@section('content')
<div class="md:mx-4 relative overflow-hidden">
    <header class="p-2 flex justify-between">
        <h2 class="text-lg font-medium text-gray-900">
            Tasks
        </h2>
    </header>
    <main class="h-full flex flex-col overflow-auto">
        <kanban-board :initial-data="{{ $tasks }}"></kanban-board>
    </main>
</div>
@endsection
