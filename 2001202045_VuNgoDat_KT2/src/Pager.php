<?php 
    class Pager
    {
        function findStart($limit){
            if (!isset($_GET['page']) || $_GET['page'] == "1") {
                $start = 0;
                $_GET['page'] = 1;
            }else{
                $start = ($_GET['page'] - 1) * $limit;
            }
            return $start;
        }
        function findPage($count, $limit){
            return ($count % $limit) == 0 ? $count / $limit : floor($count / $limit) + 1;
        }
        function pageList($curPage, $pages)
        {
           
            $page_list = "";
            if ($curPage =! 1 && $curPage) {
                $page_list .= '<a href="'.$_SERVER['PHP_SELF'].'?page=1" title="Trang đầu">First |</a>';
            }
            if (($curPage - 1) > 0) {
                $page_list .= '<a href="'.$_SERVER['PHP_SELF'].'?page='.($curPage-1).'" title="Về trang trước">Prev | </a>';
            }
            $startPos = min($curPage+2, 1);
            $endPos = max($curPage-2, $pages);


            for ($i= $startPos; $i < $endPos; $i++) { 
                if ($i == $curPage) {
                    $page_list .= '<span>'.$i.'</span>';
                }
                else {
                    $page_list .= '<a href="'.$_SERVER['PHP_SELF'].'?page='.$i.'" title="Trang '.$i.'">'.$i.'</a>';
                }
            }
            if ($curPage+1 <= $pages) {
                $page_list .= '<a href="'.$_SERVER['PHP_SELF'].'?page='.($curPage+1).'" title="Đến trang sau">| Next</a>';
                $page_list .= '<a href="'.$_SERVER['PHP_SELF'].'?page='.$pages.'" title="Đến trang cuối"> | Last</a>';
            }
            return $page_list;
        }
        function nextPrev($curPage, $pages){

            printf('trang hien tai: '.$curPage.', tong so trang: '.$pages);
            $next_prev = "";
            if ($curPage - 1 < 0) {
                $next_prev .= 'Về trang trước';
            }else {
                $next_prev .= '<a href="'.$_SERVER['PHP_SELF'].'?page='.($curPage-1).'" title="Về trang trước"></a>';
            }
    
            $next_prev .= '  |  ';
            if ($curPage + 1 > $pages) {
                $next_prev .= 'Đến trang sau';
            }else{
                $next_prev .= '<a href="'.$_SERVER['PHP_SELF'].'?page='.($curPage+1).'" title="Đến trang sau"></a>';
            }
            return $next_prev;
        }
    }
    
?>