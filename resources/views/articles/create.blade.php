<x-layout title="Crea Articolo - MyBlog">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Nuovo Articolo</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('articles.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Titolo</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">Categoria</label>
                                <input type="text" class="form-control" id="category" name="category" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Descrizione Breve</label>
                                <textarea class="form-control" id="description" name="description" rows="2" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="content" class="form-label">Contenuto</label>
                                <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Salva Articolo</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>