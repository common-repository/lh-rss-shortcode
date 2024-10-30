<ul>
<?php foreach ( (array) $rss->items as $item ) { ?>
<li>
<a href="<?php echo esc_url( $item['link'] ); ?>"><?php echo esc_html($item['title']); ?></a>
<br/><span class="rss_excerpt"><?php echo esc_html($item['summary']); ?></span>
</li>
<?php } ?>
</ul>