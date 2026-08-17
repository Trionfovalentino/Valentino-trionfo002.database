<x-layout title="Tutti gli Articoli - MyBlog">
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Tutti gli Articoli</h1>
            <a href="{{ route('articles.create') }}" class="btn btn-primary">+ Crea Nuovo</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            @forelse ($articles as $article)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <span class="badge bg-secondary mb-2">{{ $article->category }}</span>
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text text-muted">{{ $article->description }}</p>
                            <p class="card-text">{{ $article->content }}</p>
                        </div>
                        <div class="card-footer bg-white border-0 text-muted small">
                            Creato il: {{ $article->created_at->format('d/m/Y') }}
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="alert alert-info">Nessun articolo presente nel database. Creane uno!</p>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>