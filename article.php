<!doctype html>
<html lang="fr">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <article>
        <h3>
            <time><?php echo $post['created'] ?></time>
        </h3>
            <address><?php echo $post['taglist'] ?></address>
    <div>
        <p><?php echo $post['content'] ?></p>
    </div>
    <footer>
        <small><i class="fa-solid fa-thumbs-up"></i> <?php echo $post['like_number'] ?> </small>
        <a href=""><?php echo $post['author_name'] ?></a>,
    </footer>
</article>
</html>