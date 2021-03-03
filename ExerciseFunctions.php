<?php
function generateStory($singular_noun,$verb,$color,$distance_unit)
{
    $story = "\n"."The {$singular_noun} is lovely, {$color}, and deep."."\n"."But I have promises to keep,\nAnd miles to go before I {$verb},\nAnd {$distance_unit} to go before I {$verb}.\n";
    return $story;
}
echo generateStory("dog","bark","blue","km");
echo generateStory("rose","sing","violet","meters");
echo generateStory("fish","dance","green","cm");
