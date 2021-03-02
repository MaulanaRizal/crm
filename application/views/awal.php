<!-- <div id=demo></div> -->
<div id=navigation></div>

<script>
    var tree = <?= $tree ?>;
    function viewTree(tree) {
        var show = '<ul>';
        var key;
        show += '<li>'+tree['nama'] + '</li>'
        for (key in tree['child']) {
            show += viewTree(tree['child'][key])
        }
        show +='</ul>'
        return show;
    }
    document.getElementById('navigation').innerHTML = viewTree(tree);
    document.getElementById('demo').innerHTML = tree['child'][0]['nama'];

</script>