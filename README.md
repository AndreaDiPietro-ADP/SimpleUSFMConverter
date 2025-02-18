# simple-usfm-converter
A lightweight and simple converter that transforms most USFM tags into HTML tags with specific detailed CSS classes to customize on-screen representation.

http://markups.paratext.org/
```
Unified Standard Format Markers (USFM) is a plain text markup widely used for encoding the digital text for scripture translations.
It is the standard format applied to translations developed within Paratext. Unified Scripture XML (USX) is a closely related XML format
for digital scripture translation text. The largest collection of USX encoded scripture is currently found within the Digital Bible Library.
```
https://ubsicap.github.io/usfm/about/index.html

Example of usage:
input 
```text
\s Libro dei Numeri
\sr Numeri 40,2
```
```php
<?php

require_once __DIR__ . '/vendor/autoload.php';

use YggdrasHill\SimpleUSFMConverter\SimpleUSFMConverter;

echo SimpleUSFMConverter::fromUsfmToHtml( '\s Libro dei Numeri' . PHP_EOL . '\sr Numeri 40,2' );

```

output
```html
<span class="usfm usfm_titlesheadingsandlabel s">Libro dei Numeri</span>
<span class="usfm usfm_titlesheadingsandlabel sr">Numeri 40,2</span>
```

input
```text
\p
\v 10-16 On the east side, those under the banner of the division of Judah shall camp in their groups, under their leaders, as follows:
\tr \th1 Tribe \th2 Leader \thr3 Number
\tr \tc1 Judah \tc2 Nahshon son of Amminadab \tcr3 74,600
\tr \tc1 Issachar \tc2 Nethanel son of Zuar \tcr3 54,400
\tr \tc1 Zebulun \tc2 Eliab son of Helon \tcr3 57,400
\tr \tcr1-2 Total: \tcr3 186,400
```

output
```html
<span class="usfm usfm_paragraphs p"></span>
<span class="usfm usfm_chaptersandverses v"><sup class="usfm usfm_chaptersandverses verse_number">10-16</sup>On the east side, those under the banner of the division of Judah shall camp in their groups, under their leaders, as follows:</span>
<div class="usfm usfm_tables"><table class="usfm usfm_tables tables"><tr class="usfm usfm_tables tr"><th class="usfm usfm_tables th th1">Tribe </th><th class="usfm usfm_tables th th2">Leader </th><th class="usfm usfm_tables thr thr3">Number</th></tr>
<tr class="usfm usfm_tables tr"><td class="usfm usfm_tables tc tc1">Judah </td><td class="usfm usfm_tables tc tc2">Nahshon son of Amminadab </td><td class="usfm usfm_tables tcr tcr3">74,600</td></tr>
<tr class="usfm usfm_tables tr"><td class="usfm usfm_tables tc tc1">Issachar </td><td class="usfm usfm_tables tc tc2">Nethanel son of Zuar </td><td class="usfm usfm_tables tcr tcr3">54,400</td></tr>
<tr class="usfm usfm_tables tr"><td class="usfm usfm_tables tc tc1">Zebulun </td><td class="usfm usfm_tables tc tc2">Eliab son of Helon </td><td class="usfm usfm_tables tcr tcr3">57,400</td></tr>
<tr class="usfm usfm_tables tr"><td compute_colspan="1-2" colspan="2" class="usfm usfm_tables tcr tcr1-2">Total: </td><td class="usfm usfm_tables tcr tcr3">186,400</td></tr></table></div>
```

input
```text
\mt2 The First Book of Moses, 
\mt3 Commonly Called 
\mt1 Genesis 
\c 1  
\p
\v 1 In the beginning, God\f + \fr 1:1  \ft The Hebrew word rendered “God” is “אֱלֹהִ֑ים” (Elohim).\f* created the heavens and the earth. 
\v 2 The earth was formless and empty. Darkness was on the surface of the deep and God’s Spirit was hovering over the surface of the waters. 
\p
\v 3 God said, “Let there be light,” and there was light. 
\v 4 God saw the light, and saw that it was good. God divided the light from the darkness. 
\v 5 God called the light “day”, and the darkness he called “night”. There was evening and there was morning, the first day. 
\p
\v 6 God said, “Let there be an expanse in the middle of the waters, and let it divide the waters from the waters.” 
\v 7 God made the expanse, and divided the waters which were under the expanse from the waters which were above the expanse; and it was so. 
\v 8 God called the expanse “sky”. There was evening and there was morning, a second day. 
\p
\v 9 God said, “Let the waters under the sky be gathered together to one place, and let the dry land appear;” and it was so. 
\v 10 God called the dry land “earth”, and the gathering together of the waters he called “seas”. God saw that it was good. 
\v 11 God said, “Let the earth yield grass, herbs yielding seeds, and fruit trees bearing fruit after their kind, with their seeds in it, on the earth;” and it was so. 
\v 12 The earth yielded grass, herbs yielding seed after their kind, and trees bearing fruit, with their seeds in it, after their kind; and God saw that it was good. 
\v 13 There was evening and there was morning, a third day. 
\p
\v 14 God said, “Let there be lights in the expanse of the sky to divide the day from the night; and let them be for signs to mark seasons, days, and years; 
\v 15 and let them be for lights in the expanse of the sky to give light on the earth;” and it was so. 
\v 16 God made the two great lights: the greater light to rule the day, and the lesser light to rule the night. He also made the stars. 
\v 17 God set them in the expanse of the sky to give light to the earth, 
\v 18 and to rule over the day and over the night, and to divide the light from the darkness. God saw that it was good. 
\v 19 There was evening and there was morning, a fourth day. 
\p
\v 20 God said, “Let the waters abound with living creatures, and let birds fly above the earth in the open expanse of the sky.” 
\v 21 God created the large sea creatures and every living creature that moves, with which the waters swarmed, after their kind, and every winged bird after its kind. God saw that it was good. 
\v 22 God blessed them, saying, “Be fruitful, and multiply, and fill the waters in the seas, and let birds multiply on the earth.” 
\v 23 There was evening and there was morning, a fifth day. 
\p
\v 24 God said, “Let the earth produce living creatures after their kind, livestock, creeping things, and animals of the earth after their kind;” and it was so. 
\v 25 God made the animals of the earth after their kind, and the livestock after their kind, and everything that creeps on the ground after its kind. God saw that it was good. 
\p
\v 26 God said, “Let’s make man in our image, after our likeness. Let them have dominion over the fish of the sea, and over the birds of the sky, and over the livestock, and over all the earth, and over every creeping thing that creeps on the earth.” 
\v 27 God created man in his own image. In God’s image he created him; male and female he created them. 
\v 28 God blessed them. God said to them, “Be fruitful, multiply, fill the earth, and subdue it. Have dominion over the fish of the sea, over the birds of the sky, and over every living thing that moves on the earth.” 
\v 29 God said, “Behold,\f + \fr 1:29  \ft “Behold”, from “הִנֵּה”, means look at, take notice, observe, see, or gaze at. It is often used as an interjection.\f* I have given you every herb yielding seed, which is on the surface of all the earth, and every tree, which bears fruit yielding seed. It will be your food. 
\v 30 To every animal of the earth, and to every bird of the sky, and to everything that creeps on the earth, in which there is life, I have given every green herb for food;” and it was so. 
\p
\v 31 God saw everything that he had made, and, behold, it was very good. There was evening and there was morning, a sixth day.
```

output
```html
<span class="usfm usfm_titlesheadingsandlabel mt mt2">The First Book of Moses, </span>
<span class="usfm usfm_titlesheadingsandlabel mt mt3">Commonly Called </span>
<span class="usfm usfm_titlesheadingsandlabel mt mt1">Genesis </span>
<span class="usfm usfm_chaptersandverses c">1  </span>
<span class="usfm usfm_paragraphs p"></span>
<span class="usfm usfm_chaptersandverses v"><sup class="usfm usfm_chaptersandverses verse_number">1</sup>In the beginning, God<span class="usfm usfm_footnotes f">+ <span class="usfm usfm_footnotes fr">1:1  </span><span class="usfm usfm_footnotes ft">The Hebrew word rendered “God” is “אֱלֹהִ֑ים” (Elohim).</span></span> created the heavens and the earth. </span>
<span class="usfm usfm_chaptersandverses v"><sup class="usfm usfm_chaptersandverses verse_number">2</sup>The earth was formless and empty. Darkness was on the surface of the deep and God’s Spirit was hovering over the surface of the waters. </span>
<span class="usfm usfm_paragraphs p"></span>
<span class="usfm usfm_chaptersandverses v"><sup class="usfm usfm_chaptersandverses verse_number">3</sup>God said, “Let there be light,” and there was light. </span>
<span class="usfm usfm_chaptersandverses v"><sup class="usfm usfm_chaptersandverses verse_number">4</sup>God saw the light, and saw that it was good. God divided the light from the darkness. </span>
<span class="usfm usfm_chaptersandverses v"><sup class="usfm usfm_chaptersandverses verse_number">5</sup>God called the light “day”, and the darkness he called “night”. There was evening and there was morning, the first day. </span>
<span class="usfm usfm_paragraphs p"></span>
<span class="usfm usfm_chaptersandverses v"><sup class="usfm usfm_chaptersandverses verse_number">6</sup>God said, “Let there be an expanse in the middle of the waters, and let it divide the waters from the waters.” </span>
<span class="usfm usfm_chaptersandverses v"><sup class="usfm usfm_chaptersandverses verse_number">7</sup>God made the expanse, and divided the waters which were under the expanse from the waters which were above the expanse; and it was so. </span>
<span class="usfm usfm_chaptersandverses v"><sup class="usfm usfm_chaptersandverses verse_number">8</sup>God called the expanse “sky”. There was evening and there was morning, a second day. </span>
<span class="usfm usfm_paragraphs p"></span>
<span class="usfm usfm_chaptersandverses v"><sup class="usfm usfm_chaptersandverses verse_number">9</sup>God said, “Let the waters under the sky be gathered together to one place, and let the dry land appear;” and it was so. </span>
<span class="usfm usfm_chaptersandverses v"><sup class="usfm usfm_chaptersandverses verse_number">10</sup>God called the dry land “earth”, and the gathering together of the waters he called “seas”. God saw that it was good. </span>
<span class="usfm usfm_chaptersandverses v"><sup class="usfm usfm_chaptersandverses verse_number">11</sup>God said, “Let the earth yield grass, herbs yielding seeds, and fruit trees bearing fruit after their kind, with their seeds in it, on the earth;” and it was so. </span>
<span class="usfm usfm_chaptersandverses v"><sup class="usfm usfm_chaptersandverses verse_number">12</sup>The earth yielded grass, herbs yielding seed after their kind, and trees bearing fruit, with their seeds in it, after their kind; and God saw that it was good. </span>
<span class="usfm usfm_chaptersandverses v"><sup class="usfm usfm_chaptersandverses verse_number">13</sup>There was evening and there was morning, a third day. </span>
<span class="usfm usfm_paragraphs p"></span>
<span class="usfm usfm_chaptersandverses v"><sup class="usfm usfm_chaptersandverses verse_number">14</sup>God said, “Let there be lights in the expanse of the sky to divide the day from the night; and let them be for signs to mark seasons, days, and years; </span>
<span class="usfm usfm_chaptersandverses v"><sup class="usfm usfm_chaptersandverses verse_number">15</sup>and let them be for lights in the expanse of the sky to give light on the earth;” and it was so. </span>
<span class="usfm usfm_chaptersandverses v"><sup class="usfm usfm_chaptersandverses verse_number">16</sup>God made the two great lights: the greater light to rule the day, and the lesser light to rule the night. He also made the stars. </span>
<span class="usfm usfm_chaptersandverses v"><sup class="usfm usfm_chaptersandverses verse_number">17</sup>God set them in the expanse of the sky to give light to the earth, </span>
<span class="usfm usfm_chaptersandverses v"><sup class="usfm usfm_chaptersandverses verse_number">18</sup>and to rule over the day and over the night, and to divide the light from the darkness. God saw that it was good. </span>
<span class="usfm usfm_chaptersandverses v"><sup class="usfm usfm_chaptersandverses verse_number">19</sup>There was evening and there was morning, a fourth day. </span>
<span class="usfm usfm_paragraphs p"></span>
<span class="usfm usfm_chaptersandverses v"><sup class="usfm usfm_chaptersandverses verse_number">20</sup>God said, “Let the waters abound with living creatures, and let birds fly above the earth in the open expanse of the sky.” </span>
<span class="usfm usfm_chaptersandverses v"><sup class="usfm usfm_chaptersandverses verse_number">21</sup>God created the large sea creatures and every living creature that moves, with which the waters swarmed, after their kind, and every winged bird after its kind. God saw that it was good. </span>
<span class="usfm usfm_chaptersandverses v"><sup class="usfm usfm_chaptersandverses verse_number">22</sup>God blessed them, saying, “Be fruitful, and multiply, and fill the waters in the seas, and let birds multiply on the earth.” </span>
<span class="usfm usfm_chaptersandverses v"><sup class="usfm usfm_chaptersandverses verse_number">23</sup>There was evening and there was morning, a fifth day. </span>
<span class="usfm usfm_paragraphs p"></span>
<span class="usfm usfm_chaptersandverses v"><sup class="usfm usfm_chaptersandverses verse_number">24</sup>God said, “Let the earth produce living creatures after their kind, livestock, creeping things, and animals of the earth after their kind;” and it was so. </span>
<span class="usfm usfm_chaptersandverses v"><sup class="usfm usfm_chaptersandverses verse_number">25</sup>God made the animals of the earth after their kind, and the livestock after their kind, and everything that creeps on the ground after its kind. God saw that it was good. </span>
<span class="usfm usfm_paragraphs p"></span>
<span class="usfm usfm_chaptersandverses v"><sup class="usfm usfm_chaptersandverses verse_number">26</sup>God said, “Let’s make man in our image, after our likeness. Let them have dominion over the fish of the sea, and over the birds of the sky, and over the livestock, and over all the earth, and over every creeping thing that creeps on the earth.” </span>
<span class="usfm usfm_chaptersandverses v"><sup class="usfm usfm_chaptersandverses verse_number">27</sup>God created man in his own image. In God’s image he created him; male and female he created them. </span>
<span class="usfm usfm_chaptersandverses v"><sup class="usfm usfm_chaptersandverses verse_number">28</sup>God blessed them. God said to them, “Be fruitful, multiply, fill the earth, and subdue it. Have dominion over the fish of the sea, over the birds of the sky, and over every living thing that moves on the earth.” </span>
<span class="usfm usfm_chaptersandverses v"><sup class="usfm usfm_chaptersandverses verse_number">29</sup>God said, “Behold,<span class="usfm usfm_footnotes f">+ <span class="usfm usfm_footnotes fr">1:29  </span><span class="usfm usfm_footnotes ft">“Behold”, from “הִנֵּה”, means look at, take notice, observe, see, or gaze at. It is often used as an interjection.</span></span> I have given you every herb yielding seed, which is on the surface of all the earth, and every tree, which bears fruit yielding seed. It will be your food. </span>
<span class="usfm usfm_chaptersandverses v"><sup class="usfm usfm_chaptersandverses verse_number">30</sup>To every animal of the earth, and to every bird of the sky, and to everything that creeps on the earth, in which there is life, I have given every green herb for food;” and it was so. </span>
<span class="usfm usfm_paragraphs p"></span>
<span class="usfm usfm_chaptersandverses v"><sup class="usfm usfm_chaptersandverses verse_number">31</sup>God saw everything that he had made, and, behold, it was very good. There was evening and there was morning, a sixth day.</span>
```
