<form action="cible_post.php" method="post">
    <p>
        <label for="fav-book">Livre favori</label>
        <br />
        <input type="text" name="fav_book" id="fav-book" />
    </p>
    <p>
        <label for="fav-book-mark">Note</label>
        <br />
        <input type="number" min="0" max="10" step="2" name="fav_book_mark" id="fav-book-mark" />
    </p>
    <p>
        <input type="submit" value="Valider" />
    </p>
</form>
