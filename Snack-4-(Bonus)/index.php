<?php

$paragrafo= "Lorem ipsum dolor sit amet consectetur adipiscing elit curae, porta rutrum duis maecenas montes eu inceptos, 
blandit faucibus hac interdum elementum conubia potenti. Duis imperdiet cum lobortis pulvinar vulputate conubia, maecenas 
sem enim magna sociosqu cubilia curabitur, lectus sodales metus quisque rutrum. Platea commodo maecenas lacinia vivamus 
suspendisse quisque, dictum litora purus fringilla pellentesque, ultrices metus viverra proin dictumst. Placerat integer 
ligula interdum suspendisse sem mi dignissim a, fames sagittis tempus ut velit magna vestibulum, dis porttitor lacus 
nullam arcu ac pellentesque. Dictumst pellentesque commodo lacinia primis in bibendum habitant auctor cum, augue nisl 
curabitur netus venenatis iaculis suspendisse scelerisque. Consequat porta velit cum ligula vivamus ac vehicula nisl 
primis, morbi magna pellentesque urna nec nascetur quis pretium, bibendum natoque mi faucibus in tortor dui congue. 
Donec bibendum integer cursus molestie torquent ultrices placerat accumsan, arcu leo per natoque augue vivamus aenean 
suspendisse phasellus, orci habitant diam eu aliquam curabitur justo. Hendrerit est nec nulla luctus sollicitudin dictumst 
dapibus, blandit scelerisque congue ligula inceptos tellus vitae, curabitur sed integer tincidunt feugiat quisque.
Metus dignissim lacinia ante tristique ultrices senectus justo nullam fusce hendrerit potenti cum, ac laoreet dui 
eros etiam maecenas facilisis rhoncus neque luctus id, quam vivamus diam pellentesque suspendisse scelerisque 
eleifend curae parturient nisl accumsan. Porttitor a ultrices sociis dignissim luctus phasellus eu ligula, 
etiam fames sodales augue accumsan gravida et eleifend torquent, inceptos aptent lectus posuere mauris commodo 
montes. Primis non libero himenaeos fusce platea vestibulum luctus, hendrerit condimentum pellentesque sociosqu 
parturient nisi convallis, interdum sagittis metus augue donec sollicitudin. Commodo venenatis nam sagittis hac 
rhoncus posuere fermentum, tortor massa cursus semper proin eget, vitae ultricies per mollis ac phasellus.";


$smallParagrafs = explode(".", $paragrafo);
/* var_dump($smallParagrafs); */

for ($i=0; $i < count($smallParagrafs); $i++) { 
    echo "<h3>".$smallParagrafs[$i]."</h3>";
}

?>