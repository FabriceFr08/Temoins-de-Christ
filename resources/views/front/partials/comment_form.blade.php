<div class="card mt-4">
    <div class="card-header">
        Ajouter un commentaire
    </div>
    <div class="card-body">
        <form action="{{ route('commentaires.store', $article->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom">Votre nom:</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="commentaire">Votre commentaire:</label>
                <textarea class="form-control" id="commentaire" name="commentaire" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Ajouter un commentaire</button>
        </form>
    </div>
</div>
