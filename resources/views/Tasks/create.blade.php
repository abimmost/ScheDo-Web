<!-- resources/views/tasks/create.blade.php -->
<x-layout>
    <x-slot:sliding></x-slot:sliding>
    <div class="container min-vh-100 d-flex flex-column justify-content-center">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-light shadow-lg rounded-lg">
                    <div class="card-body">
                        <h2 class="h3 mb-3 font-weight-normal">Create a new task</h2>
                        <form action="{{ route('tasks.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="description">Task Description</label>
                                <input type="text" name="description" id="description" class="form-control" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="due_date">Due Date</label>
                                <input type="datetime-local" name="due_date" id="due_date" class="form-control" required>
                            </div>
                            <button class="btn btn-block" type="submit" style="background-color: #0f054c; color: white;">Create Task</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>