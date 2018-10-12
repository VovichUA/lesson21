<h1><?=$pageTitle?></h1>
<ul>
    <?php foreach ($posts as $post) : ?>
        <li>
            <?=$post['title']?><br/>
            <?=$post['short']?><br/>
            <a href="/posts/view/<?=$post['id']?>">Show more...</a>
        </li>
    <?php endforeach ?>
</ul>