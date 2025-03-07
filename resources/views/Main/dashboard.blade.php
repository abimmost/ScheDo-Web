<x-layout>
    <x-slot:sliding></x-slot:sliding>
    <section class="service_section layout_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-lg rounded-lg overflow-hidden mt-4">
                        <div class="card-body">
                            <h1 class="card-title text-left text-uppercase font-weight-bold" style="font-size: 1.5rem;">To-Do List</h1>
                            <form class="form-inline my-4">
                                <div class="input-group w-100">
                                    <input type="text" class="form-control" placeholder="Add a task">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">Add</button>
                                    </div>
                                </div>
                            </form>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="todo1">
                                        <label class="form-check-label" for="todo1">
                                            <span class="font-weight-bold">Finish project proposal</span>
                                            <span class="text-muted">Due on 4/1/23</span>
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="todo2">
                                        <label class="form-check-label" for="todo2">
                                            <span class="font-weight-bold">Buy groceries</span>
                                            <span class="text-muted">Bananas, milk, bread</span>
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="todo3">
                                        <label class="form-check-label" for="todo3">
                                            <span class="font-weight-bold">Go for a run</span>
                                            <span class="text-muted">3 miles</span>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>