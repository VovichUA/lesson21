<h1><?=$pageTitle?></h1>
<ul>
    <?php foreach ($article as $articl) : ?>
        <li>
            <a href="/articles/view/<?=$articl['id']?>"><strong><?=$articl['title']?></strong></a>
        </li>
    <?php endforeach ?>
</ul