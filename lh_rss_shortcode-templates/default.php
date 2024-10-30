<ul>
<?php foreach ( (array) $rss->items as $item ) { ?>
<li>
<a href="<?php echo esc_url( $item['link'] ); ?>"><?php echo esc_html($item['title']); ?></a>
</li>
<?php } ?>
</ul>