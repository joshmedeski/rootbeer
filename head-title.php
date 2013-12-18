<title>
  <?php
    if (function_exists('is_tag') && is_tag()) { 
      echo 'Tag Archive for &quot;'.$tag.'&quot; — '; 
    } 
    elseif (is_archive()) { 
      wp_title(''); echo ' Archive — '; 
    }
    elseif (is_search()) { 
      echo 'Search for &quot;'.wp_specialchars($s).'&quot; — '; 
    }
    elseif (!(is_404()) && (is_single()) || (is_page())) { 
      wp_title(''); echo ' — '; 
    }
    elseif (is_404()) {
      echo 'Not Found — '; 
    }
    if (is_home()) { 
      bloginfo('name'); echo ' — '; bloginfo('description'); 
    }
    else { bloginfo('name'); }
  ?>
</title>