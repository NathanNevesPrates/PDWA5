<?php
echo '<?xml version="1.0" encoding="utf-8"?>';
?>
<data>
@foreach ($registros as $item)
    <item>
        <tamanho>{{ $item->tamanho }}</tamanho>
        <sabor>{{ $item->sabor }}</sabor>
        <custo>{{ $item->custo }}</custo>
        <marca>{{ $item->marca }}</marca>
    </item>
@endforeach
</data>