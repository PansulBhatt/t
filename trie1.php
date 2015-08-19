<?php

include 'trie.php';
$trie = new KTrie();
$trie->addWord('aardvark');
echo 'Added \'aardvark\'<br/>';
$trie->addWord('aardwolf');
echo 'Added \'aardwolf\'<br/>';
echo 'Does the trie contain \'aardvark\'? ';
if($trie->hasWord('aardvark')) { echo 'Yes!'; }
else { echo 'No...'; }
echo '<br/>';
echo 'Does the trie contain \'giraffe\'? ';
if($trie->hasWord('giraffe')) { echo 'Yes!'; }
else { echo 'No...'; }
echo '<br/>';
echo 'trie contents:<br/>';
$trie->printStructure();
$trie->printWords();


?>