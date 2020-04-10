<!-- SNSシェアボタン -->
<ul class="socialBtn">
  <li><a class="twitter icon-twitter" href="//twitter.com/intent/tweet?text=<?php echo urlencode(the_title("","",0)); ?>&<?php echo urlencode(get_permalink()); ?>&url=<?php echo urlencode(get_permalink()); ?>" target="_blank" title="Twitterでシェアする"><i class="fab fa-twitter"></i></a></li>
  <li><a class="facebook icon-facebook" href="//www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>&t=<?php echo urlencode(the_title("","",0)); ?>" target="_blank" title="facebookでシェアする"><i class="fab fa-facebook-f"></i></a></li>
  <li><a class="pocket icon-pocket" href="//getpocket.com/edit?url=<?php echo urlencode(get_permalink()); ?>" target="_blank" title="Pocketであとで読む"><i class="fab fa-get-pocket"></i></a></li>
  <!-- <li><a class="hatena icon-hatena" href="//b.hatena.ne.jp/add?mode=confirm&url=<?php echo urlencode(get_permalink()); ?>&title=<?php echo urlencode(the_title("","",0)); ?>" target="_blank" data-hatena-bookmark-title="<?php the_permalink(); ?>" title="このエントリーをはてなブックマークに追加する">はてブ</a></li> -->
  <li><a class="line icon-line" href="//timeline.line.me/social-plugin/share?url=<?php echo urlencode(get_permalink()); ?>" target="_blank" title="LINEでシェアする"><i class="fab fa-line"></i></a></li>
  <li><a class="rss icon-feed" href="<?php echo urlencode(bloginfo('rss2_url')); ?>" target="_blank" title="RSSで購読する"><i class="fas fa-rss"></i></a></li>
</ul>
