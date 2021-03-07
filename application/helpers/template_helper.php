<?php
function generateTree($data, $parent)
{
    foreach ($data as $node) {
        if ($node->MEN_ID_MENU == $parent) {
            $tree[] = array(
                'id'    => $node->ID_MENU,
                'nama'  => $node->NAMA_MENU,
                'icon'  => $node->ICON,
                'link'  => base_url($node->LINK),
                'child' => generateTree($data, $node->ID_MENU)
            );
        }
    }
    if (isset($tree)) {
        return $tree;
    }
}

function generateMenu($child)
{
    echo "<ul aria-expanded='false' class='collapse'>";
    foreach ($child as $node) {
        if(isset($node['child'])) {
            echo "<li><a class='has-arrow'  href=". $node['link']." aria-expanded='false' >" . $node['nama'] . "</a>";
            generateMenu($node['child']);
            echo "</li>";
        }else{
            echo "<li ><a href=". $node['link']." aria-expanded='false' >" . $node['nama'] . "</a></li>";
        }
    }
    echo '</ul>';
}
function sideNav()
{
    $CI = get_instance();
    $CI->load->model('m_menu', 'menu');
    $trees = $CI->menu->getTable('Menus')->result();
    $where = array(
        'ID_ROLE' => $_SESSION['ID_ROLE']
    );
    $access = $CI->menu->getData('role_menu',$where)->result();
    $tree = generateTree($trees, null);
    foreach($access as $i){
        // echo $i->ID_MENU.'<br>';
        $show[] = $i->ID_MENU;
    }

    echo '<li>' . "<a class='waves-effect waves-dark' href=" . $tree[0]['link'] . " aria-expanded='false'>" . $tree[0]['icon'] . "<span class='hide-menu'>" . $tree[0]['nama'] . "</span></a>" . '</li>';
    if ($tree[0]['child'] != null) {
        foreach($show as $i){
            foreach ($tree[0]['child'] as $node ) {
                if($node['id']==$i){
                    if ($node['child'] != null) {
                        echo "<li> <a class='has-arrow waves-effect waves-dark' href='" . $node['link'] . "' aria-expanded='false'>" . $node['icon'] . "</i><span class='hide-menu'>" . $node['nama'] . "</span></a>";
                        generateMenu($node['child']);
                    }else{
                        echo "<li> <a class='waves-effect waves-dark' href='" . $node['link'] . "' aria-expanded='false'>" . $node['icon'] . "</i><span class='hide-menu'>" . $node['nama'] . "</span></a>";
                    }
                }
            }
        }
    }
}