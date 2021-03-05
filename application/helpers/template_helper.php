<?php 

function generateTree($data,$parent)
{
    foreach ($data as $node) {
        if ($node->MEN_ID_MENU == $parent) {
            $tree[] = array(
                'nama'  => $node->NAMA_MENU,
                'icon'  => $node->ICON,
                'link'  => base_url($node->LINK),
                'child' => generateTree($data, $node->ID_MENU)
            );
        }
    } if(isset($tree)){
        return $tree;
    }
}

function generateSubMenu($child)
{
    # code...
}

function generateMenu($child){
    echo '<ul>';
    foreach($child as $node){
        echo "<li><a href=".$node['link'].">".$node['nama']."</a></li>";
        // $show = "<li><a href=#>Daftar Pengguan</a></li>";
        }
        echo '</ul>';
    }

function sideNav()
{
    $CI = get_instance();
    // var_dump($CI);
    $CI->load->model('m_menu','menu');
    $trees = $CI->menu->getTable('Menus')->result();
    $tree = generateTree($trees,null);
    // var_dump();
    
    echo'<li>'."<a class='waves-effect waves-dark' href=".$tree[0]['link']." aria-expanded='false'>".$tree[0]['icon']."<span class='hide-menu'>".$tree[0]['nama']."</span></a>".'</li>';
    foreach($tree[0]['child'] as $node){

        echo "<li> <a class='has-arrow waves-effect waves-dark' href='".$node['link']."' aria-expanded='false'>".$node['icon']."</i><span class='hide-menu'>".$node['nama']."</span></a>";
        // var_dump($node['child']);
        if($node['child']!=null){
                generateMenu($node['child']);
            }
        }
    // generateMenu($tree[0]['child']);
}

?>

