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
        function pageList($curPage, $pages, $param = NULL)
        {
            $page_list = "";
            if ($curPage =! 1 && $curPage) {
                $page_list .= '<a href="'.$_SERVER['PHP_SELF'].'?page=1$param" title="Trang đầu">First |</a>';
            }
            if (($curPage - 1) > 0) {
                $page_list .= '<a href="'.$_SERVER['PHP_SELF'].'?page='.($curPage-1).'$param" title="Về trang trước">Prev | </a>';
            }
            $startPos = max($curPage-2, 1);
            $endPos = min($curPage-2, $pages);

            for ($i= $startPos; $i < $endPos; $i++) { 
                if ($i == $curPage) {
                    $page_list .= '<span>'.$i.'</span>';
                }
                else {
                    $page_list .= '<a href="'.$_SERVER['PHP_SELF'].'?page='.$i.'$param" title="Trang '.$i.'">'.$i.'</a>';
                }
            }
            if ($curPage + 1 <= $pages) {
                $page_list .= '<a href="'.$_SERVER['PHP_SELF'].'?page='.($curPage + 1).'$param" title="Đến trang sau">| Next</a>';
                $page_list .= '<a href="'.$_SERVER['PHP_SELF'].'?page='.$pages.'$param" title="Đến trang cuối"> | Last</a>';
            }
            return $page_list;
        }
    }
    function nextPrev($curPage, $pages){
        $next_prev = "";
        if ($curPage - 1 < 0) {
            $next_prev .= 'Về trang trước';
        }else {
            $next_prev .= '<a href="'.$_SERVER['PHP_SELF'].'?page='.($curPage-1).'$param" title="Về trang trước"></a>';
        }

        $next_prev .= '  |  ';
        if ($curPage + 1 > $pages) {
            $next_prev .= 'Đến trang sau';
        }else{
            $next_prev .= '<a href="'.$_SERVER['PHP_SELF'].'?page='.($curPage+1).'$param" title="Đến trang sau"></a>';
        }
        return $next_prev;
    }
?>