<div class="comments">
<?php if( have_comments() ): ?>
<h2>コメント</h2>

<ul>
<?php wp_list_comments( 'avatar_size=0&max_depth=1&format=html5'); ?>
</ul>
<?php endif; ?>

<?php comment_form( 'format=html5&title_reply=コメント&label_submit=Submit' ); ?>
</div>
