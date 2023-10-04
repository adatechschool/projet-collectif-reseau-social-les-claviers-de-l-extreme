<!doctype html>
<html lang="fr">
    <article>
        <h3>
            <time><?php echo $post['created'] ?></time>
        </h3>
            <address><?php echo $post['taglist'] ?></address>
    <div>
        <p><?php echo $post['content'] ?></p>
    </div>
    <footer>
        <small>♥ <?php echo $post['like_number'] ?> </small>
        <a href=""><?php echo $post['author_name'] ?></a>,
    </footer>
</article>
</html>