<?php
    $actual = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if (strpos($actual, '&page') !== false) {
        list($url, $param) = explode("&page", $actual);
    }else {
        $url = $actual;
    }

    $nextpage = ($page < $total_pages ) ? "&page=".($page+1) : "" ;
    $prevpage = ($page > 1 ) ? "&page=".($page-1) : "" ;
?>


<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <?php if ($page > 1): ?>
            <li class="page-item">
                <a class="page-link" href="<?=$url.$prevpage?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>

        <?php endif ?>

        <?php for($i=1;$i<=$total_pages;$i++){ ?>
            <li class="page-item"><a class="page-link" href="<?=$url.'&page='.$i?>"><?=$i?></a></li>
        <?php } ?>

        <?php if ($page<$total_pages): ?>
            <li class="page-item">
                <a class="page-link" href="<?=$url.$nextpage?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        <?php endif ?>

    </ul>
</nav>
