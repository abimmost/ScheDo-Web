<x-layout>
    <x-slot:sliding></x-slot:sliding>
    <div class="container min-vh-100 d-flex flex-column justify-content-center">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-light shadow-lg rounded-lg">
                    <div class="card-body">
                        <h1 class="card-title text-left text-uppercase font-weight-bold" style="font-size: 1.5rem;">To-Do List for {{ $user->name }}</h1>
                        <form class="form-inline my-4" id="addTaskForm">
                            @csrf
                            <div class="input-group w-100">
                                <a href="{{ route('tasks.create') }}" class="btn" style="background-color: #0f054c; color: white;">New Task</a>
                            </div>
                        </form>
                        @if($tasks->isEmpty())
                            <p class="text-center">You don't have any tasks yet. <a href="{{ route('tasks.create') }}">Create a new task</a> to get started!</p>
                        @else
                            <ul class="list-group list-group-flush">
                                @foreach($tasks as $task)
                                    <li class="list-group-item" id="task-item-{{ $task->id }}">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <form action="{{ route('tasks.update', $task->id) }}" method="POST" id="form-task-{{ $task->id }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="description" value="{{ $task->description }}">
                                                    <input type="hidden" name="due_date" value="{{ $task->due_date }}">
                                                    <input type="hidden" name="status" value="{{ $task->status ? 0 : 1 }}">
                                                    <input class="form-check-input" type="checkbox" id="task{{ $task->id }}" {{ $task->status ? 'checked' : '' }} onchange="toggleTaskStatus({{ $task->id }}); document.getElementById('form-task-{{ $task->id }}').submit()">
                                                    <label class="form-check-label" for="task{{ $task->id }}">
                                                        <span id="task-desc-{{ $task->id }}" style="{{ $task->status ? 'text-decoration: line-through;' : '' }}">{{ $task->description }}</span>
                                                    </label>
                                                </form>
                                                <small class="text-muted d-block" id="task-status-{{ $task->id }}">
                                                    {{ $task->status ? 'completed' : 'pending' }}
                                                </small>
                                            </div>
                                            <div>
                                                <small class="text-muted" id="task-due-{{ $task->id }}" style="{{ $task->status ? 'text-decoration: line-through;' : '' }}">
                                                    Due: {{ \Carbon\Carbon::parse($task->due_date)->format('d M Y H:i') }}
                                                </small>
                                                <div class="mt-2">
                                                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-secondary">Edit</a>
                                                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline" onsubmit="return confirmDelete();">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>