<?php
/*
The comments page for Bones
*/

// don't load it if you can't comment
if ( post_password_required() ) {
  return;
}

?>

<h2 id="comments__title"><?php comments_number( __( 'No Comments', 'bonestheme' ), __( 'One Comment', 'bonestheme' ), __( '% Comments', 'bonestheme' ) );?></h2>
  <ol class="comments__comments">
  <?php if ( have_comments() ) : ?>

      <?php
        wp_list_comments( array(
          'style'             => 'ol',
          'short_ping'        => true,
          'avatar_size'       => 64,
          'callback'          => 'bones_comments',
          'type'              => 'all',
          'reply_text'        => __('Reply', 'bonestheme'),
          'page'              => '',
          'per_page'          => '',
          'reverse_top_level' => null,
          'reverse_children'  => ''
        ) );
      ?>
    </ol>
    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
      <nav class="navigation comment-navigation" role="navigation">
        <div class="comment-nav-prev"><?php previous_comments_link( __( '&larr; Previous Comments', 'bonestheme' ) ); ?></div>
        <div class="comment-nav-next"><?php next_comments_link( __( 'More Comments &rarr;', 'bonestheme' ) ); ?></div>
      </nav>
    <?php endif; ?>
  <?php endif; ?>

    <?php if ( ! comments_open() ) : ?>
    	<p class="no-comments"><?php _e( 'Comments are closed.' , 'bonestheme' ); ?></p>
    <?php endif; ?>


  <?php
    $comments_args = array(
      'fields' => array(
        'author' => '<label class="comment-form-author">' . 'Name' . ( $req ? ' <span class="required">*</span>' : '' ) .
                    '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '"' . $aria_req . ' /></label>',
         'email'  => '<label for="email">' . 'Email' . ( $req ? ' <span class="required">*</span>' : '' ) .
                    '<input id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></label>',
          'url'    => '',
        ),
      'comment_field' => '<label>' . 'Comment:' . '<textarea id="comment" name="comment" cols="40" rows="6" aria-required="true"></textarea></label>',
      'title_reply' => 'Leave a comment',
      'title_reply_to'       => __( 'Leave a reply to %s' ),
      'label_submit' => 'Submit',
      'comment_notes_after' => '',
      'id_form' => 'comment__form',
      'cancel_reply_link'    => 'Cancel reply',
    );
  ?>

  <?php comment_form($comments_args); ?>

