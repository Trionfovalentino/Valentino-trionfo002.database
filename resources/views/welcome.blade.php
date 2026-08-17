<x-layout title="Homepage - MyBlog">
    <div class="container my-5 text-center">
        <div class="p-5 mb-4 bg-light rounded-3 border shadow-sm">
            <h1 class="display-5 fw-bold">Benvenuto su MyBlog</h1>
            <p class="col-md-8 fs-4 mx-auto">Gestisci e salva i tuoi articoli direttamente nel database MySQL.</p>
            <div class="d-flex justify-content-center gap-3 mt-4">
                <a href="{{ route('articles.index') }}" class="btn btn-primary btn-lg">Vedi Articoli</a>
                <a href="{{ route('articles.create') }}" class="btn btn-outline-secondary btn-lg">Inserisci Nuovo</a>
            </div>
        </div>
    </div>
</x-layout>