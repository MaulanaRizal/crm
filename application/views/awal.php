<div id=demo></div>
<div id=navigation></div>
<?php
    $i = true;
    if($i==true){
        $result = 'ada';
    }
    echo isset($result);
?>

<script>
    var tree = <?= $tree ?>;
    function viewTree(tree) {
        var show = '<ul>';
        var key;
        for (key in tree) {
            show += '<li>'+tree[key]['nama'] + '</li>'
            show += viewTree(tree[key]['child'])
        }
        show +='</ul>'
        return show;
    }
    document.getElementById('navigation').innerHTML = viewTree(tree);
    // document.getElementById('demo').innerHTML = tree['child'];

</script>