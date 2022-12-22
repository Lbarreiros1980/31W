<?php
$le_permalien = "<a href='" . get_the_permalink() . "'>Suite</a>";
?>
<article class="grille__article">
    <h6><?php the_title();  ?></h6>
    <p><?= wp_trim_words(get_the_excerpt(), 10,$le_permalien) ; ?></p>
    <p>Sujet:<?php the_field("type_de_cours") ?></p>
    <p>TIM - Collège de Maisonneuve</p>
</article>