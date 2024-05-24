<h1>Formulaire d'insertion</h1>

<form action="/article/traitement" method="post">
    @csrf
    <tr>
        <tr>
            <label for="nom">Nom</label>
            <input type="text" placeholder="Nom de l'article">
        </tr>
        <tr>
            <label for="categorie">Categorie</label>
            <input type="text" placeholder="Categorie de l'article">
        </tr>
    </tr>
    <tr>
        <tr>
            <label for="image">Image</label>
            <input type="text" placeholder="Saisir l'url de l'image">
        </tr>
        <tr>
            <label for="description">Description</label>
            <input type="text" placeholder="Saisir la description de l'article">
        </tr>
    </tr>
    <button style="margin-top: 10px; color: white; background: blue;">Enregistrer</button>
</form>
