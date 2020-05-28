@extends('layouts.app')

@section('content')
<div class="md:mx-4 relative overflow-hidden">
    <main class="h-full flex flex-col overflow-auto">
        <kanban-board :initial-data="{{ $tasks }}"></kanban-board>
    </main>
</div>
@endsection
