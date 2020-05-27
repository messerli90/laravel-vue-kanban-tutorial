<div class="p-2 flex relative overflow-x-auto h-full">
    @foreach (range(1,10) as $item)
    <div class="mr-4 flex-shrink-0 w-64">
        <div class="bg-white rounded-md shadow">
            <div class="p-4 flex justify-between items-center border-b border-gray-200">
                <h4 class="font-semibold">Status {{ $item }}</h4>
                <button>Add Task</button>
            </div>
            <div
                class="p-2 flex-1 flex flex-col h-full overflow-x-hidden overflow-y-auto rounded shadow-xs bg-blue-100">
                @foreach (range(1, rand(2,5)) as $task)
                <div class="mb-3 p-3 h-24 flex flex-col bg-white rounded-md shadow transform hover:shadow-md">

                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endforeach
</div>
