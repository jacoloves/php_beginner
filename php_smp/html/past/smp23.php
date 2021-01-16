<?php

$age = 15;

$foo = <<<EOI
ヒアドキュメントでは、このように、
複数行に渡る文章をそのまま表記することができます。

Tomの年齢は "$age"歳です。
この$age は展開されず、$age にまま出呂k樹されます。
EOI;

class NowDocTest
{
    const DOCUMENT1 = <<<'EOI'
    aaaaaaaaaaaaaaaaaaaa
    aaaaaaaaaaaaaaaaaaa
    EOI;

    const DOCUMENT2 = <<<EOI
    bbbbbbbbbbbbbbbbbb
    bbbbbbbbbbbbbbbbbb
    bbbbbbbb
    EOI;
}