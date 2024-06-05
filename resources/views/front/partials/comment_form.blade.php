<div class="card mt-4">
    <div class="card-header">
        Ajouter un commentaire
    </div>
    <div class="card-body">
        <form action="{{ route('commentaires.store', $article) }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="commentaire" class="form-label">Commentaire</label>
                <textarea class="form-control" id="commentaire" name="commentaire" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
</div>
